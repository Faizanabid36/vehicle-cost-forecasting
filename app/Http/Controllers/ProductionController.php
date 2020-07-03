<?php

namespace App\Http\Controllers;

use App\Product;
use App\Factory;
use App\Warehouse;
use App\Production;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductionController extends Controller
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
        $data=array($factories);
        return view('production.index',compact('data'));
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
        
        DB::table('productions')

        ->insert(array(

            array('fac_name'=> $request->input('fac_name1'), 'qty'=>$request->input('qty1'),'date_prod'=>$request->input('date_prod1')),

            array('fac_name'=> $request->input('fac_name2'), 'qty'=>$request->input('qty2'),'date_prod'=>$request->input('date_prod2')),
        ));
        $totalCostEBM=0;
        $production=Production::EBM()->get();
        foreach ($production as $pordd) {
            $totalCostEBM=$totalCostEBM+  $pordd->qty;
        }
        $totalCostCFL=0;
        $production=Production::CFL()->get();
        foreach ($production as $pordd) {
            $totalCostCFL=$totalCostCFL+  $pordd->qty;
        }
        $p1=Production::where('fac_name', 'English Biscuits Manufacturers')->first();
        $p2=Production::where('fac_name', 'Coronet Food Limited')->first();
        // dd($p1);
        if(is_null($p1)){
            return redirect('/home');
        }
        else{
            $p1->total_qty=$totalCostEBM;
            $p1->save();  
        }
        if(is_null($p2)){
            return redirect('/home');
        }
        else{
            $p2->total_qty=$totalCostEBM;
            $p2->save();  
        }

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function show(Production $production)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function edit(Production $production)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Production $production)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function destroy(Production $production)
    {
        //
    }
}
