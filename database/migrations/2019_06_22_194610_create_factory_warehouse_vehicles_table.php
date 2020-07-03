<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryWarehouseVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_warehouse_vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facory_name');
            $table->string('warehouse_name');
            $table->bigInteger('T_60');
            $table->bigInteger('T_50');
            $table->bigInteger('T_40');
            $table->bigInteger('T_20');
            $table->bigInteger('T_16');
            $table->bigInteger('C_60');
            $table->bigInteger('C_50');
            $table->bigInteger('C_40');
            $table->bigInteger('C_20');
            $table->bigInteger('C_16');
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
        Schema::dropIfExists('factory_warehouse_vehicles');
    }
}
