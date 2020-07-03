<?php

namespace App\Http\Controllers;

use App\Product;
use App\Factory;
use App\Dispatch;
use App\Warehouse;
use App\Production;
use Illuminate\Http\Request;

class DispatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $factories=Factory::all();
        $warehouses=Warehouse::all();
        $production_EBM=Production::EBM()->get();
        $production_CFL=Production::CFL()->get();
        $data=array($factories,$warehouses,$production_EBM,$production_CFL);
        return view('dispatch.index',compact('data'));
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
        $d=new Dispatch;
        $d->fac_name=$request->input('fac_name');
        $d->ware_name=$request->input('ware_name');
        $d->qty_disp=$request->input('qty');
        $prev_qty=Production::where('fac_name',$request->input('fac_name'))->first();

        if($d->qty_disp>$prev_qty->total_qty)
        {
            return redirect('dispatch')->with('success', ['Invalid Number of Cases entered. Factory has Produced only '.$prev_qty->total_qty.' Number of Cases']);
        }
        else{
            $d->save();
            $prodE=Production::where('fac_name',$request->input('fac_name'))->first();
            $prodE->total_qty=$prev_qty->total_qty-$d->qty_disp;
            $prodE->save();
            return redirect('/home')->with('success', ['Dispatched Successfully']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function show(Dispatch $dispatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function edit(Dispatch $dispatch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispatch $dispatch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dispatch  $dispatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispatch $dispatch)
    {
        //
    }
}
