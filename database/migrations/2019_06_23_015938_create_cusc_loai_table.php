<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_loai', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('l_ma')->autoIncrement()->comment('Đây là cột đầu tiên');
            $table->string('l_ten',50)->comment('Đây là cột thứ 2');
            $table->timestamp('l_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Đây là cột thứ 3');
            $table->timestamp('l_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Đây là cột thứ 4');
            $table->tinyInteger('l_trangthai')->default('2')->comment('Đây là cột thứ 5');
            $table->unique('l_ten');            
        });
    }    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cusc_loai');
    }
}
