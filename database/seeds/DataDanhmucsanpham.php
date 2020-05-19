<?php

use Illuminate\Database\Seeder;

class DataDanhmucsanpham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danhmucsanpham')->insert([
            ['ten'=>'Nhớt'],
            ['ten'=>'Gương'],
            ['ten'=>'Nhông Sên Dĩa'],
            ['ten'=>'Vỏ'],
            ['ten'=>'Pô'],
            ['ten'=>'Phuộc'],
            ['ten'=>'Đèn'],
        ]);
    }
}
