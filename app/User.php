<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'name', 'email', 'matkhau',
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // 'matkhau', 'remember_token',
        'password', 'remember_token',
    ];

    //laravel default là password 
    //Vì vậy muốn sử dụng pasword thì phải override bằng function này.
    public function getAuthPassword(){
        return $this->matkhau;
    }
}
