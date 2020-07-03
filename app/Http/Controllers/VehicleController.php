<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vehicles=Vehicle::paginate(4);
        return view('vehicle.index',compact('vehicles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vehicle.add');
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
            'veh_type'=>'required',
            'veh_loadability'=>'required|gt:300',
            'veh_img'=>'required',
        ]);

        $image=$request->file('veh_img');
        $newName=rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/vehicleImages'),$newName);


        $vehicleA=new Vehicle();

        $vehicleA->veh_type=$request->input('veh_type'); 
        $vehicleA->veh_loadability=$request->input('veh_loadability'); 
        $vehicleA->veh_img=$newName;
        $vehicleA->save();

        return redirect('vehicles')->with('success', ['Vehicle Added Successfully']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
        $vehicleE=Vehicle::find($vehicle->id);
        return view('vehicle.edit',compact('vehicleE'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
        
        $this->validate($request,[
            'veh_type'=>'required',
            'veh_loadability'=>'required|gt:300',
        ]);
        $vehicleN=Vehicle::find($vehicle->id);
        $vehicleN->veh_loadability=$request->input('veh_loadability');
        $vehicleN->veh_type=$request->input('veh_type');
        $vehicleN->veh_img=$vehicle->veh_img; 
        $vehicleN->save();
        return redirect('/vehicles')->with('success', ['Changes Made Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
       $vehicleD=Vehicle::find($vehicle->id);
       $vehicleD->delete();
       return back()->with('success', ['Vehicle Deleted Successfully']);
    }
}
