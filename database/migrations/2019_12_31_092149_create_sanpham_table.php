<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_danhmucsanpham')->unsigned();
            // $table->unsignedBigInteger('id_danhmucsanpham');
            $table->foreign('id_danhmucsanpham')->references('id')->on('danhmucsanpham')->onDelete('cascade');
            $table->string('ten',100);
            $table->decimal('gia',15,4);
            $table->decimal('giamgia',15,4);
            $table->string('hinh',100);
            $table->tinyInteger('moi');
            $table->text('chitiet');
            // $table->timestamps();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
