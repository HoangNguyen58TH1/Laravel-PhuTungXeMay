<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhmucsanpham extends Model
{
    //
    protected $table = 'danhmucsanpham';

    public function sanpham(){
        return $this->hasMany('App\Sanpham','id_danhmucsanpham','id');
    }
}
