<?php

use Illuminate\Database\Seeder;

class DataBanquantri extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banquantri')->insert([
            'ten'=>'Nguyễn Văn Hoàng',
            'tentaikhoan'=>'admin',
            'matkhau'=>bcrypt('123456'),
        ]);
    }
}
