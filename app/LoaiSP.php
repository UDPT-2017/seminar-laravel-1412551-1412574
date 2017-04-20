<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSP extends Model
{
    protected $table = "loaisp";

    public function hangsp()
    {
    	return $this->hasMany('App\HangSP','idloaisp','id');
    }
}
