<?php

namespace App\Http\Controllers;

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

class UserController extends Controller
{
	function __construct()
	{
		$loaisp = LoaiSP::all();
		view()->share('loaisp', $loaisp);
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
