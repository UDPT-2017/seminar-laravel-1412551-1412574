<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use App\LoaiSP;
use App\HangSP;
use App\SanPham;

class PageController extends Controller
{
	function __construct()
	{
		$loaisp = LoaiSP::all();
		view()->share('loaisp',$loaisp);
	}

    public function getHome()
    {
    	$spmoi = SanPham::take(4)->orderBy('created_at', 'desc')->get();
    	$sphot = Sanpham::take(4)->orderBy('luotxem', 'desc')->get();
    	$sphot8 = Sanpham::take(8)->orderBy('luotxem', 'desc')->get();
    	$spkhuyenmai = Sanpham::take(4)->orderBy('giamgia', 'desc')->get();
    	return view('home.page.home',['spmoi'=>$spmoi, 'sphot'=>$sphot, 'sphot8'=>$sphot8, 'spkhuyenmai'=>$spkhuyenmai]);
    }

    public function getAbout()
    {
    	return view('home.page.about');
    }

    public function getAccount()
    {
    	return view('home.page.account');
    }

    public function getFaq()
    {
    	return view('home.page.faq');
    }

    public function getLogin()
    {
    	return view('home.page.login');
    }

    public function getCart()
    {
    	return view('home.page.cart');
    }

    public function getContact()
    {
    	return view('home.page.contact');
    }

    public function getProduct($id)
    {
    	$sanpham = SanPham::find($id);
    	$sanpham->increment('luotxem');
    	$sanphamlienquan = SanPham::where('idhangsp',$sanpham->idhangsp)->where('id','!=',$sanpham->id)->take(8)->get();
    	return view('home.page.product',['sanpham' => $sanpham, 'splienquan' => $sanphamlienquan]);
    }

    public function getListProduct($idhangsp)
    {
    	$hangsp = HangSP::find($idhangsp);
    	$sp = $hangsp->sanpham()->paginate(2);
    	return view('home.page.listproduct',['hangsp' => $hangsp,'sp' => $sp]);
    }
}
