<?php

namespace App\Http\Controllers;
use Cart;
use Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;


use App\LoaiSP;
use App\HangSP;
use App\SanPham;
use App\User;

class PageController extends Controller
{
	function __construct()
	{
		$loaisp = LoaiSP::all();
		view()->share('loaisp', $loaisp);
	}

    public function getHome()
    { 
        if(Auth::check()){
            $spmoi = SanPham::take(4)->orderBy('created_at', 'desc')->get();
            $sphot = Sanpham::take(4)->orderBy('luotxem', 'desc')->get();
            $sphot8 = Sanpham::take(8)->orderBy('luotxem', 'desc')->get();
            $spkhuyenmai = Sanpham::take(4)->orderBy('giamgia', 'desc')->get();
            return view('home.page.home',['spmoi'=>$spmoi, 'sphot'=>$sphot, 'sphot8'=>$sphot8, 'spkhuyenmai'=>$spkhuyenmai], ['nguoidung'=> Auth::user()]);
        }
        else{
        	$spmoi = SanPham::take(4)->orderBy('created_at', 'desc')->get();
        	$sphot = Sanpham::take(4)->orderBy('luotxem', 'desc')->get();
        	$sphot8 = Sanpham::take(8)->orderBy('luotxem', 'desc')->get();
        	$spkhuyenmai = Sanpham::take(4)->orderBy('giamgia', 'desc')->get();
        	return view('home.page.home',['spmoi'=>$spmoi, 'sphot'=>$sphot, 'sphot8'=>$sphot8, 'spkhuyenmai'=>$spkhuyenmai]);
        }
    }

    public function getAbout()
    {
        if(Auth::check())

    	   return view('home.page.about',['nguoidung' => Auth::user()]);
        else
           return view('home.page.about');
    }

    public function getAccount()
    {
       if(Auth::check())
        return view('home.page.account',['nguoidung' => Auth::user()]);
       else
    	return view('home.page.account');
    }
    public function postAccount(Request $request)
    {
       $this->validate($request,[
                'name'=>'required',
                'email'=>'required|email|unique:users,email'
            ],[
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng không được ít hơn 3 ký tự',
                'email.required'=>'Bạn chưa nhập Email',
                'email.email'=>'Bạn chưa nhập đúng định danh email',
                'email.unique'=>'Email đã tồn tại'
            ]);
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('account')->with('Thanhcong', 'Cập nhật thông tin thành công.Bạn vui lòng đăng nhập lại!'); 
    }

    public function getFaq()
    {
       if(Auth::check())
        return view('home.page.faq',['nguoidung' => Auth::user()]);
       else
    	return view('home.page.faq');
    }

    

    public function getCart()
    {
        if(Auth::check()){
            $total = Cart::subtotal();
            $giohang = Cart::content();
            return view('home.page.cart',['total' => $total, 'giohang' => $giohang],['nguoidung' => Auth::user()]);
        }
        else{      
            $total = Cart::subtotal();
            $giohang = Cart::content();
        	return view('home.page.cart',['total' => $total, 'giohang' => $giohang]);
        }
    }

    public function getContact()
    {
        if(Auth::check())
            return view('home.page.contact',['nguoidung' => Auth::user()]);
        else

    	return view('home.page.contact');
    }

    public function getProduct($id)
    {
        if(Auth::check()){
            $sanpham = SanPham::find($id);
            $sanpham->increment('luotxem');
            $sanphamlienquan = SanPham::where('idhangsp',$sanpham->idhangsp)->where('id','!=',$sanpham->id)->take(8)->get();
            return view('home.page.product',['sanpham' => $sanpham, 'splienquan' => $sanphamlienquan],['nguoidung' => Auth::user()]);
        }
        else{
        	$sanpham = SanPham::find($id);
        	$sanpham->increment('luotxem');
        	$sanphamlienquan = SanPham::where('idhangsp',$sanpham->idhangsp)->where('id','!=',$sanpham->id)->take(8)->get();
        	return view('home.page.product',['sanpham' => $sanpham, 'splienquan' => $sanphamlienquan]);
        }
    }

    public function getListProduct($idhangsp)
    {
       if(Auth::check()){
            $hangsp = HangSP::find($idhangsp);
            $sp = $hangsp->sanpham()->paginate(2);
            return view('home.page.listproduct',['hangsp' => $hangsp,'sp' => $sp],['nguoidung' => Auth::user()]);
        }
       else{
    	$hangsp = HangSP::find($idhangsp);
    	$sp = $hangsp->sanpham()->paginate(2);
    	return view('home.page.listproduct',['hangsp' => $hangsp,'sp' => $sp]);
        }
    }

    public function getAddCart($idsp)
    {

        $sp = SanPham::find($idsp);
        Cart::add(['id' => $sp->id, 'name' => $sp->tensp, 'qty' => 1, 'price' => ($sp->gia - $sp->gia*$sp->giamgia/100), 'options' => ['img' => $sp->urlhinh]]);
        return redirect() -> route('shoppingcart');
    }

    public function getEditCart()
    {
        if(Request::ajax())
        {
            $id = Request::get('id');
            $qty = Request::get('qty');
            Cart::update($id, $qty);
            echo "ok";
        }
    }

    public function getDeleteCart($id)
    {
        Cart::remove($id);
        return redirect()->route('shoppingcart');   
    }
    

    public function getSearchProduct($key)
    {
        if(Auth::check()){
            $sp = SanPham::where('tensp', 'LIKE', "%$key%")->paginate(2);
            return view('home.page.search',['sp' => $sp],['nguoidung' => Auth::user()]);
        }
        else{
            
            $sp = SanPham::where('tensp', 'LIKE', "%$key%")->paginate(2);
            return view('home.page.search',['sp' => $sp]);
        }
    }

    public function postSearchProduct(Request $request)
    {
        $this->validate($request,['key'=>'required'],['key.required'=>'Chưa nhập từ khóa']);
        $key = $request->key;
        return redirect()->route("search",['key' => $key]);
    }

}
