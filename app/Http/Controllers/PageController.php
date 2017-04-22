<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;
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

    public function getLogin()
    {
       if(Auth::check())
        return view('home.page.login',['nguoidung' => Auth::user()]);
       else
        return view('home.page.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,[
                'email'=>'required',
                'password'=>'required|min:3|max:32'
            ],[
                'email.required'=>'Bạn chưa nhập Email',
                'password.required'=>'Bạn chưa nhập mât khẩu',
                'password.min'=>'Mật khẩu không được nhỏ hơn 3 ký tự',
                'password.max'=>'Mật khẩu không được quá 32 ký tự'
            ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->with('Thanhcong', 'Đăng nhập không thành công');
        }
        
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
    public function getLogout()
    {
      Auth::logout();
      return redirect()->route('home');
    }
    public function getSignup()
    {
        if(Auth::check())
            return view('home.page.signup',['nguoidung' => Auth::user()]);
        else
             return view('home.page.signup');
    }
    public function postSignup(Request $request)
    {
        $this->validate($request,[
                'name'=>'required|min:3',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:3|max:32',
                'passwordconfirm'=>'required|same:password'
            ],[
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng không được ít hơn 3 ký tự',
                'email.required'=>'Bạn chưa nhập Email',
                'email.email'=>'Bạn chưa nhập đúng định danh email',
                'email.unique'=>'Email đã tồn tại',
                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu không được nhỏ hơn 3 ký tự',
                'password.max'=>'Mật khẩu không được quá 32 ký tự',
                'passwordconfirm.required'=>'Bạn chưa nhập password xác thực',
                'passwordconfirm.same'=>'Password không trùng khớp'
            ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('signup')->with('Thanhcong', 'Đăng ký thành công'); 
    }
    public function getChangepassword()
    {
        if(Auth::check())
            return view('home.page.changepassword',['nguoidung' => Auth::user()]);
        else
             return view('home.page.changepassword');
    }
    public function postChangepassword(Request $request)
    {
        $this->validate($request,[
                'password'=>'required|min:3|max:32',
                'passwordconfirm'=>'required|same:password'
            ],[
                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu không được nhỏ hơn 3 ký tự',
                'password.max'=>'Mật khẩu không được quá 32 ký tự',
                'passwordconfirm.required'=>'Bạn chưa nhập password xác thực',
                'passwordconfirm.same'=>'Password không trùng khớp'
            ]);
        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('changepassword')->with('Thanhcong', 'Cập nhật password thành công. Bạn vui lòng đăng nhập lại!'); 
    }

}
