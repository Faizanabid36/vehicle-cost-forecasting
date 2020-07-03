<?php

namespace App\Http\Controllers;

use App\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $warehouses=Warehouse::paginate(4);
        return view('warehouse.index',compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('warehouse.add');
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
        $data=$request->validate([
            'w_name'=>'required',
            'w_location'=>'required',
            'storage'=>'required|gt:15000',
        ]);
        Warehouse::create($data);
        return redirect('/warehouses')->with('success', ['Warehouse Added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit(Warehouse $warehouse)
    {
        //
        $warehouseE=Warehouse::find($warehouse->id);
        return view('warehouse.edit',compact('warehouseE'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warehouse $warehouse)
    {
        //
        $data=$request->validate([
            'w_name'=>'required',
            'w_location'=>'required',
            'storage'=>'required|gt:15000',
        ]);
        $warehouseU=Warehouse::find($warehouse->id);
        $warehouseU->w_name=$request->input('w_name');
        $warehouseU->w_location=$request->input('w_location');        
        $warehouseU->storage=$request->input('storage');
        $warehouseU->save();
        return redirect('/warehouses')->with('success', ['Changes Made Successfully']);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warehouse $warehouse)
    {
        //
       $warehouseD=Warehouse::find($warehouse->id);
       $warehouseD->delete();
       return back()->with('success', ['Warehouse Deleted Successfully']);
    }
}
