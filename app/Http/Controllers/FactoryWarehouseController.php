<?php

namespace App\Http\Controllers;

use App\FactoryWarehouse;
use App\Factory;
use App\Warehouse;
use App\Vehicle;
use App\Product;
use Illuminate\Http\Request;

class FactoryWarehouseController extends Controller
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
        $factories=Factory::all();
        $warehouses=Warehouse::all();
        $product=Product::all();
        $qty=0;
        foreach ($product as $prd ) {
            $qty=$qty+$prd->num_boxes;
        }
        $data=array($factories,$warehouses,$qty);
        return view('factory_warehouse.index',compact('data'));

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
        $this->validate($request,[
            'fac_name'=>'required',
            'war_name'=>'required',
            'distance'=>'required',
            'cpkm'=>'required|gt:30',
            'distribution'=>'required',
        ]);
        $fw=new FactoryWarehouse();
        $fw->fac_name=$request->input('fac_name');
        $fw->war_name=$request->input('war_name');
        $fw->distance=$request->input('distance');
        $fw->cpkm=$request->input('cpkm');
        $fw->distribution=$request->input('distribution');
        $fw->save();
        $factories=Factory::all();
        $warehouses=Warehouse::all();
        $vehicles=Vehicle::all();
        $data=array($factories,$warehouses,$vehicles,$fw);
        return view('factory_warehouse_vehicle.index',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactoryWarehouse  $factoryWarehouse
     * @return \Illuminate\Http\Response
     */
    public function show(FactoryWarehouse $factoryWarehouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactoryWarehouse  $factoryWarehouse
     * @return \Illuminate\Http\Response
     */
    public function edit(FactoryWarehouse $factoryWarehouse)
    {
        //
        $factories=Factory::all();
        $warehouses=Warehouse::all();
        $vehicles=Vehicle::all();
        $data=array($factories,$warehouses,$vehicles,$factoryWarehouse);
        return view('cost.index',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactoryWarehouse  $factoryWarehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactoryWarehouse $factoryWarehouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactoryWarehouse  $factoryWarehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactoryWarehouse $factoryWarehouse)
    {
        //
    }
}
