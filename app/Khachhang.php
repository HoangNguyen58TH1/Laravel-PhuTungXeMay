<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    //
    protected $table = 'khachhang';

    public function donhang(){
        return $this->hasMany('App\Donhang','id_khachhang','id');
    }
}
