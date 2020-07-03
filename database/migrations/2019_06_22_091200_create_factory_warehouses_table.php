<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_warehouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fac_name');
            $table->string('war_name');
            $table->bigInteger('distance');
            $table->bigInteger('cpkm');
            $table->bigInteger('distribution')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factory_warehouses');
    }
}
