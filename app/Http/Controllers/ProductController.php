<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::paginate(3);
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.add');
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
            'p_name'=>'required',
            'num_boxes'=>'required',
            'type'=>'required',
            'p_img'=>'required',
        ]);
        $image=$request->file('p_img');
        $newName=rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/productImages'),$newName);
        
        $productA=new Product();
        $productA->p_name=$request->input('p_name');
        $productA->num_boxes=$request->input('num_boxes');
        $productA->type=$request->input('type');
        $productA->p_img=$newName;
        $productA->save();
        return redirect('/products')->with('success', ['Product Added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $productE=Product::find($product->id);
        return view('product.edit',compact('productE'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $this->validate($request,[
            'p_name'=>'required',
            'num_boxes'=>'required',
            'type'=>'required',
        ]);
        $productN=Product::find($product->id);
        $productN->p_name=$request->input('p_name');
        $productN->num_boxes=$request->input('num_boxes');
        $productN->type=$request->input('type');
        $productN->p_img=$product->p_img;
        $productN->save();
        return redirect('/products')->with('success', ['Changes Made Successfully']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $productD=Product::find($product->id);
        $productD->delete();
        return redirect()->back()->with('success', ['Product Deleted Successfully']);
    }
}
