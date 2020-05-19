<?php

use Illuminate\Database\Seeder;

class DataUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['ten'=>'Cao Viết Thắng','gioitinh'=>'Nam','email'=>'thang.cv.56cntt@gmail.com','matkhau'=>bcrypt('123456'),'diachi'=>'Ninh Hòa','sodienthoai'=>'0911343404'],
            ['ten'=>'Đinh thị Kim Thoa','gioitinh'=>'Nữ','email'=>'thoaoccho@gmail.com','matkhau'=>bcrypt('123456'),'diachi'=>'Vạn Ninh','sodienthoai'=>'113'],
            ['ten'=>'Trần Đặng Kim Khuê','gioitinh'=>'Nam','email'=>'khue.conbo@gmail.com','matkhau'=>bcrypt('123456'),'diachi'=>'Diên Khánh','sodienthoai'=>'999'],
        ]);
    }
}
