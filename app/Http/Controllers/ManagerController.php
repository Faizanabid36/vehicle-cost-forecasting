<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function image(Manager $manager)
    {
        $managerI=Manager::find($manager->id);
        return view('manager.changeimage',compact('managerI'));
    } 
    public function updateimage(Request $request,Manager $manager)
    {
        $im=$request->file('image');
        $newName=rand().'.'.$im->getClientOriginalExtension();
        $im->move(public_path('images/factoryImages'),$newName);



        $m=Manager::find($manager->id);
        $m->name=$manager->name;
        $m->contact=$manager->contact;
        $m->address=$manager->address;
        $m->emp_id=$emp_id;
        $m->image=$newName;
        $m->save();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Manager::all();
        return view('manager.manager',compact('data'));
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
    }

    /**
     * Display the specified resource.
    view('manager.edit')     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(Manager $manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(Manager $manager)
    {
        //
        $managerE=Manager::find($manager->id);
        return view('manager.edit',compact('managerE'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'contact'=>'required',
            
        ]);
        $managerN=Manager::find($manager->id);
        $managerN->name=$request->input('name');
        $managerN->address=$request->input('address');
        $managerN->contact=$request->input('contact');
        $managerN->image=$manager->image; 
        $managerN->emp_id=$manager->emp_id; 
        $managerN->save();
        return redirect('/manager')->with('success', ['Changes Made Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {
        //
    }
}
