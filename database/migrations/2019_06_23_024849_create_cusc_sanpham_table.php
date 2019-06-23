<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_sanpham', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->bigIncrements('sp_ma');
            $table->string('sp_ten');
            $table->Integer('sp_giaGoc');
            $table->Integer('sp_giaBan');
            $table->string('sp_hinh');
            $table->text('sp_thongTin');
            $table->string('sp_danhGia',50);
            $table->timestamp('sp_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('sp_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('sp_trangThai');

            $table->unsignedTinyInteger('l_ma');

            $table->foreign('l_ma')->references('l_ma')->on('cusc_loai')
                ->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_sanpham');
    }
}
