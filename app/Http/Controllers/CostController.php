<?php

namespace App\Http\Controllers;

use App\Cost;
use App\FactoryWarehouseVehicle;
use Illuminate\Http\Request;

class CostController extends Controller
{
    //
    public function index(Request $request){
    	$data=new FactoryWarehouseVehicle();


    	$data->facory_name=$request->input('facory_name');
    	$data->warehouse_name=$request->input('warehouse_name');


    	$data->T_60=$request->input('T_60');
    	$data->T_50=$request->input('T_50');
    	$data->T_40=$request->input('T_40');
    	$data->T_20=$request->input('T_20');
    	$data->T_16=$request->input('T_16');


    	$data->C_60=$request->input('C_60');
    	$data->C_50=$request->input('C_50');
    	$data->C_40=$request->input('C_40');
    	$data->C_20=$request->input('C_20');
    	$data->C_16=$request->input('C_16');
    	$data->save();
        
    	return redirect('/factory_warehouse/create')->with('success', ['Cost Recorded Successfully']);
    }
}
