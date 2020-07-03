<?php

namespace App\Http\Controllers;

use App\FactoryWarehouseVehicle;
use App\FactoryWarehouse;
use App\Warehouse;
use App\Vehicle;
use App\Factory;
use Illuminate\Http\Request;

class FactoryWarehouseVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $fw=FactoryWarehouse::all();
        $factories=Factory::all();
        $warehouses=Warehouse::all();
        $vehicles=Vehicle::all();
        $data=array($factories,$warehouses,$vehicles,$fw);

        return view('cost.index',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactoryWarehouseVehicle  $factoryWarehouseVehicle
     * @return \Illuminate\Http\Response
     */
    public function show(FactoryWarehouseVehicle $factoryWarehouseVehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactoryWarehouseVehicle  $factoryWarehouseVehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(FactoryWarehouseVehicle $factoryWarehouseVehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactoryWarehouseVehicle  $factoryWarehouseVehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactoryWarehouseVehicle $factoryWarehouseVehicle)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactoryWarehouseVehicle  $factoryWarehouseVehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactoryWarehouseVehicle $factoryWarehouseVehicle)
    {
        //
    }
}
