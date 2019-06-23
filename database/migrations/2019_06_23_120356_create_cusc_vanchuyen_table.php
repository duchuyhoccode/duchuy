<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscVanchuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_vanchuyen', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->tinyIncrements('vc_ma');
            $table->string('vc_ten');
            $table->integer('vc_chiPhi');
            $table->text('dienGiai');
            $table->timestamp('vc_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('vc_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('vc_trangThai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_vanchuyen');
    }
}
