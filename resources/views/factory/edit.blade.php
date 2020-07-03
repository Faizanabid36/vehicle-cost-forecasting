@extends('layouts.app')
{{-- Title Section --}}
@section('title','Edit Factory Details')


@section('links')
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('MDB/css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('MDB/css/style.css') }}" rel="stylesheet">
  <style type="text/css">
  	body{
		font-family: "Nunito", sans-serif !important;
	}
  </style>

@endsection


{{-- Content Goes Here --}}
@section('content')
		<div class="container row">
			<div class="inner mt-5">
			<header class="special">
	            <h1>Edit the Record</h1>
	          </header>
			</div>
		</div>
{{-- 		???????????????????? --}}
		<form method="post" enctype="multipart/form-data" action="{{ action('FactoryController@update',$factoryE->id) }}">
			<div>
			    <div style="width: 60%;margin: 0px auto;">

			        <!--Body-->
			        <div class="md-form">
			            <input value="{{ $factoryE->name }}" name="name" type="text" id="form2" class="form-control text-white">
			            <label for="form2">Factory Name</label>
			            @if($errors->has('name'))
							<p class="alert text-danger">**
								@if($errors->any('name'))
									Enter Factory Name
								@endif
							</p>
						@endif
			        </div>

			        <div class="md-form">
			            <input value="{{ $factoryE->location }}" name="location" type="text" id="form4" class="form-control text-white">
			            <label for="form4">Location</label>
			            @if($errors->has('location'))
							<p class="alert text-danger">**
								@if($errors->any('location'))
									Enter Factory Location
								@endif
							</p>
						@endif
			        </div>

			        <div class="md-form">
			            <input value="{{ $factoryE->num_employees }}" name="num_employees" type="number" id="form4" class="form-control text-white">
			            <label for="form4">Number of Employees</label>
			            @if($errors->has('num_employees'))
							<p class="alert text-danger">**
								@if(strpos($errors->get('num_employees')[0], "required"))
									Enter Number of Employees
								@endif
								@if(strpos($errors->get('num_employees')[0], "greater"))
									Employees Must be Greater than 1
								@endif
								@if(strpos($errors->get('num_employees')[0], "less"))
									Employees Must be Less than 1000
								@endif
							</p>
						@endif
			        </div>

			        <div class="md-form">
			            <input value="{{ $factoryE->num_offices }}" name="num_offices" type="text" id="form4" class="form-control text-white">
			            <label for="number">Number of Offices</label>
			            @if($errors->has('num_offices'))
							<p class="alert text-danger">**
								@if(strpos($errors->get('num_offices')[0], "required"))
									Enter Number of Offices
								@endif
								@if(strpos($errors->get('num_offices')[0], "greater"))
									Offices Must be Greater than 0
								@endif
								@if(strpos($errors->get('num_offices')[0], "less"))
									Offices Must be Less than 15
								@endif
							</p>
						@endif
			        </div>

			        <div class="md-form">
			            <input value="{{ $factoryE->head_office }}" name="head_office" type="text" id="form4" class="form-control text-white">
			            <label for="form4">Head Office</label>
			            @if($errors->has('head_office'))
							<p class="alert text-danger">**
								@if($errors->any('head_office'))
									Enter Location of Head Office
								@endif
							</p>
						@endif
			        </div>

			        <div class="md-form">
			            <input value="{{ $factoryE->type }}" name="type" type="text" id="form4" class="form-control text-white">
			            <label for="form4">Government/Private</label>
			            @if($errors->has('type'))
							<p class="alert text-danger">**
								@if($errors->any('type'))
									Private or Government?
								@endif
							</p>
						@endif
			        </div>
			        <div class="text-center mb-5 ">
			            <button class="btn btn-primary text-white">Update Record</button>
			     	</div>
			     	{{ csrf_field() }}
			     	<input type="hidden" name="_method" value="PATCH">
    			</div>
    		</div>
    	</form>






  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('MDB/js/jquery-3.4.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('MDB/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('MDB/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('MDB/js/mdb.min.js') }}"></script>
		</div>
@endsection