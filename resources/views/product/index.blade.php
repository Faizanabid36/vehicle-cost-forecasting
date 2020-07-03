@extends('layouts.app')
{{-- Title Section --}}
@section('title','Products')



{{-- Content Goes Here --}}
@section('content')
	<div class="container row">
		<div class="inner mt-5">
		<header class="special">
            <h1>Vehicles Used to Carry the cases</h1>
            <h3>Here is the list of vehicles and their attributes</h3>
          </header>
		</div>
	</div>	
	<div class="col-md-12">
		@if(count($products)>0)
		@if (Session::has('success'))
		    <div class="alert alert-success pb-0 mb-3">
		        <ul>
		            {!! Session::get('success')[0] !!}
		        </ul>
		    </div>
		@endif
		<table class="container mb-5 pb-5 mt-5">
	    	<thead>
	        	<tr>
	        	    <th><h1>Product Name</h1></th>
	    	        <th><h1>Production</h1></th>
	       	    	<th><h1>Type of Product</h1></th>
	       	    	<th><h1>Image</h1></th>
	       	    	<th><h1>Edit</h1></th>
	       	    	<th><h1>Delete</h1></th>
	       		</tr>
	    	</thead>
		    <tbody>
		          @foreach($products as $product)
		          	<tr class="text-white">
		          		<td>{{ $product->p_name }}</td>
		          		<td>{{ $product->num_boxes }} <small>Cases</small></td>
		          		<td>{{ $product->type }}</small></td>
		          		<td>
		          			<img src="{{ asset('images\\productImages\\'.$product->p_img) }}" height="125px" width="250px">
		          		</td>
		          		<td><a class="icon fas fa-edit fa-2x " href="/products/{{ $product->id }}/edit"></a></td>
		          		<td>
		          			<form enctype="multipart/form-data" class="mb-0" action="{{ action('ProductController@update',$product->id) }}" method="post">
		          				<button class="mb-0 alert alert-danger icon fas fa-trash fa-2x " href="products/{{ $product->id }}"></button>
			          			{{ csrf_field() }}
						     	<input type="hidden" name="_method" value="DELETE">
					     	</form>
		          		</td>
		          	</tr>
		          @endforeach
		    </tbody>
		</table>
		<div style="margin-left: 950px">
			{{ $products->links() }}
		</div>
		@else
			<div class="container">
				<h1 class="red">Nothing to Display</h1>
			</div>
		@endif
		<div style="width: 60%; margin: 0px auto" class="btn btn-primary d-flex justify-content-center mb-5">
			<a href="/products/create" class="text-white">Add a New Product</a>
		</div>
	</div>
@endsection
