<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_khachhang', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->bigIncrements('kh_ma');
            $table->string('kh_taiKhoan',50);
            $table->string('kh_matKhau',50);
            $table->string('kh_hoTen',100);
            $table->tinyInteger('kh_gioiTinh');
            $table->string('kh_email',100);
            $table->timestamp('kh_ngaySinh')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('kh_diaChi',191);
            $table->string('kh_dienThoai',11);
            $table->timestamp('kh_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('kh_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('kh_trangThai');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_khachhang');
    }
}
