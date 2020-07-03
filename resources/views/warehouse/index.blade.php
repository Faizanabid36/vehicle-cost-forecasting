@extends('layouts.app')
{{-- Title Section --}}
@section('title','Warehouse')



{{-- Content Goes Here --}}
@section('content')
	<div class="container row">
		<div class="inner mt-5">
		<header class="special">
            <h1>Where do we Supply?</h1>
            <h3>Here is the list of warehousewhere we send produced goods</h3>
          </header>
		</div>
	</div>
	<div class="col-md-12">
		@if(count($warehouses)>0)
		@if (Session::has('success'))
		    <div class="alert alert-success pb-0 mb-3">
		        <ul>
		            {!! Session::get('success')[0] !!}
		        </ul>
		    </div>
		@endif
		<table class="container mb-5 pb-5">
	    	<thead>
	        	<tr>
	        	    <th><h1>Warehouse</h1></th>
	    	        <th><h1>Location</h1></th>
	       	    	<th><h1>Storage Capacity</h1></th>
	       	    	<th><h1>Edit</h1></th>
	       	    	<th><h1>Delete</h1></th>
	       		</tr>
	    	</thead>
		    <tbody>
		          @foreach($warehouses as $warehouse)
		          	<tr class="text-white">
		          		<td>{{ $warehouse->w_name }}</td>
		          		<td>{{ $warehouse->w_location }}</td>
		          		<td>{{ $warehouse->storage }} Cases</td>
		          		<td><a class="icon fas fa-edit fa-2x " href="/warehouses/{{ $warehouse->id }}/edit"></a></td>
		          		<td>
		          			<form class="mb-0" action="{{ action('WarehouseController@update',$warehouse->id) }}" method="post">
		          				<button class="mb-0 alert alert-danger icon fas fa-trash fa-2x " href="warehouses/{{ $warehouse->id }}"></button>
			          			{{ csrf_field() }}
						     	<input type="hidden" name="_method" value="DELETE">
					     	</form>
		          		</td>
		          	</tr>
		          @endforeach
		    </tbody>
		</table>
		<div style="margin-left: 950px">
			{{ $warehouses->links() }}
		</div>
		@else
			<div class="container">
				<h1 class="red">Nothing to Display</h1>
			</div>
		@endif
		<div style="width: 60%; margin: 0px auto" class="btn btn-primary d-flex justify-content-center mb-5">
			<a href="/warehouses/create" class="text-white">Add a New Warehouse</a>
		</div>
	</div>
@endsection
