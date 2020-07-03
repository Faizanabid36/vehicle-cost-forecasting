<?php

namespace App\Http\Controllers;

use App\Factory;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $factories=Factory::paginate(3);
        // dd($factories);

        return view('factory.index',compact('factories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('factory.add');
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
            'name'=>'required',
            'location'=>'required',
            'num_employees'=>'required|gt:1|lt:1000',
            'num_offices'=>'required|gt:0|lt:15',
            'head_office'=>'required',
            'type'=>'required',
            'f_img'=>'required',

        ]);

        $image=$request->file('f_img');
        $newName=rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/factoryImages'),$newName);
        $factoryA=new Factory();

        $factoryA->name=$request->input('name');
        $factoryA->location=$request->input('location');
        $factoryA->num_employees=$request->input('num_employees');
        $factoryA->num_offices=$request->input('num_offices');
        $factoryA->head_office=$request->input('head_office');
        $factoryA->type=$request->input('type');
        $factoryA->f_img=$newName;

        $factoryA->save();
        // Factory::create($data);
        return redirect('/factories')->with('success', ['Factory Added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function show(Factory $factory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function edit(Factory $factory)
    {
        //
        $factoryE=Factory::find($factory->id);
        return view('factory.edit',compact('factoryE'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factory $factory)
    {
        //

        $this->validate($request,[
            'name'=>'required',
            'location'=>'required',
            'num_employees'=>'required|gt:1|lt:1000',
            'num_offices'=>'required|gt:0|lt:15',
            'head_office'=>'required',
            'type'=>'required',

        ]);

        $factoryN=Factory::find($factory->id);
        $factoryN->name=$request->input('name');
        $factoryN->location=$request->input('location');
        $factoryN->num_employees=$request->input('num_employees');
        $factoryN->num_offices=$request->input('num_offices');
        $factoryN->head_office=$request->input('head_office');
        $factoryN->type=$request->input('type');
        $factoryN->f_img=$factory->f_img;
        $factoryN->save();
        return redirect('/factories')->with('success', ['Changes Made Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factory $factory)
    {
        //
       $factoryD=Factory::find($factory->id);
       $factoryD->delete();
       return back()->with('success', ['Factory Deleted Successfully']);
    }
}
