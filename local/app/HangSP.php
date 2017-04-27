<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HangSP extends Model
{
    protected $table = "hangsp";

    public function sanpham()
    {
    	return $this->hasMany('App\SanPham','idhangsp','id');
    }

    public function loaisanpham()
    {
    	return $this->belongsTo('App\LoaiSP','idloaisp','id');
    }
}
