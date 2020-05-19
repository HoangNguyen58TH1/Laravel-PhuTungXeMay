<?php

use Illuminate\Database\Seeder;

class DataSlide extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slide')->insert([
            ['hinh'=>'slide1.jpg'],
            ['hinh'=>'slide2.jpg'],
            ['hinh'=>'slide3.jpg'],
            ['hinh'=>'slide4.jpg'],
            ['hinh'=>'slide5.jpg']
        ]);
    }
}
