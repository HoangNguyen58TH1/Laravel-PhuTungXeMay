<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_khachhang')->unsigned();
            $table->foreign('id_khachhang')->references('id')->on('khachhang')->onDelete('cascade');
            // $table->integer('id_giaodich')->unsigned();
            // $table->foreign('id_giaodich')->references('id')->on('giaodich')->onDelete('cascade');
            // $table->timestamps();
            $table->date('ngay_order');
            $table->decimal('tongtien',15,4);
            $table->string('hinhthucthanhtoan',200);
            $table->string('ghichu');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
