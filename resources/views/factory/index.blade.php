@extends('layouts.app')
{{-- Title Section --}}
@section('title','Factories')



{{-- Content Goes Here --}}
@section('content')
	<div class="container row">
		<div class="inner mt-5">
		<header class="special">
            <h1>Where do we produce?</h1>
            <h3 class="text-white">Here is the list of our Factories</h3>
          </header>
		</div>
	</div>
	<div class="col-md-12">
		@if(count($factories)>0)
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
	        	    <th><h1>Factory</h1></th>
	    	        <th><h1>Location</h1></th>
	       	 	    <th><h1>Number of Employees</h1></th>
	       	    	<th><h1>Head Office</h1></th>
	       	    	<th><h1>Type</h1></th>
	       	    	<th><h1>Image</h1></th>
	       	    	<th><h1>Edit</h1></th>
	       	    	<th><h1>Delete</h1></th>
	       		</tr>
	    	</thead>
		    <tbody>
		          @foreach($factories as $factory)
		          	<tr class="text-white">
		          		<td >{{ $factory->name }}</td>
		          		<td >{{ $factory->location }}</td>
		          		<td >{{ $factory->num_employees }}</td>
		          		<td >{{ $factory->head_office }}</td>
		          		<td >{{ $factory->type }}</td>
		          		<td>
		          			<img height="125px" width="250px" src="{{ asset('images\\factoryImages\\'.$factory->f_img) }}"></td>
		          		<td><a class="icon fas fa-edit fa-2x " href="/factories/{{ $factory->id }}/edit"></a></td>
		          		<td>
		          			<form action="{{ action('FactoryController@update',$factory->id) }}" method="post">
		          				<button class="alert alert-danger icon fas fa-trash fa-2x " href="factories/{{ $factory->id }}"></button>
			          			{{ csrf_field() }}
						     	<input type="hidden" name="_method" value="DELETE">
					     	</form>
		          		</td>
		          	</tr>
		          @endforeach
		    </tbody>
		</table>
		<div style="margin-left: 950px">
			{{ $factories->links() }}
		</div>

		@else
			<div class="container">
				<h1 class="red">Nothing to Display</h1>
			</div>
		@endif
		<div style="width: 60%; margin: 0px auto" class="btn btn-primary d-flex justify-content-center mb-5">
			<a href="/factories/create" class="text-white pt-2 pb-2">Add a New Factory</a>
		</div>
	</div>
@endsection
