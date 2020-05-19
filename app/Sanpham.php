<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    //
    protected $table = 'sanpham';

    public function danhmucsanpham(){
        return $this->belongsTo('App\Danhmucsanpham','id_danhmucsanpham','id');
    }

    public function chitietdonhang(){
        return $this->hasMany('App\Chitietdonhang','id_sanpham','id');
    }
}
