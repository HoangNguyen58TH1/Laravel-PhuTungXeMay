<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    //
    protected $table = 'donhang';

    public function chitietdonhang(){
        return $this->hasMany('App\Chitietdonhang','id_donhang','id');
    }

    public function khachhang(){
        return $this->belongsTo('App\Khachhang','id_khachhang','id');
    }

    // public function giaodich(){
    //     return $this->belongsTo('App\Giaodich','id_giaodich','id');
    // }
}
