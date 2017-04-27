<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = "sanpham";

    public function hangsp()
    {
    	return $this->belongsTo('App\HangSP','idhangsp','id');
    }
}
