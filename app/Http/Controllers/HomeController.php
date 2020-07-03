<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Factory;
use App\Vehicle;
use App\Dispatch;
use App\Warehouse;
use App\Production;
use App\FactoryWarehouse;
use App\FactoryWarehosueVehicle;

class HomeController extends Controller
{
    //
    public function index()
    {
        $prodEBM=Production::EBM()->get();
        $prodCFL=Production::CFL()->get();
        // dd($prodCFL);
        $disp=Dispatch::all();
        $disp_q=0;
        $totalProd=0;
        $totalEBM=0;
        $totalCFL=0;

        $dispEBM=Dispatch::where('fac_name','English Biscuits Manufacturers')->get();
        $dispCFL=Dispatch::where('fac_name','Coronet Food Limited')->get();

        $dispEBM_q=0;
        foreach ($dispEBM as $key) {
            $dispEBM_q=$dispEBM_q+$key->qty_disp;
        }

        $dispCFL_q=0;
        foreach ($dispCFL as $key) {
            $dispCFL_q=$dispCFL_q+$key->qty_disp;
        }

        foreach ($prodEBM as $key) {
            $totalEBM=$totalEBM+$key->qty;
        }
        foreach ($prodCFL as $key) {
            $totalCFL=$totalCFL+$key->qty;
        }
        $totalProd=$totalEBM+$totalCFL;
        foreach($disp as $d)
        {
            $disp_q=$disp_q+$d->qty_disp;
        }
        $data=array($totalProd,$totalEBM,$totalCFL,$disp_q,$prodEBM,$prodCFL,$dispEBM_q,$dispCFL_q);

        return view('welcome',compact('data'));
    }
}
