@extends('layouts.app')
{{-- Title Section --}}
@section('title','Add new Factory')


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
	            <h1>Add a new Factory into existing Record</h1>
	          </header>
			</div>
		</div>
{{-- 		???????????????????? --}}
		<form method="post" action="{{ action('FactoryController@store') }}" enctype="multipart/form-data">
			<div>
			    <div class="" style="width: 60%;margin: 0px auto;">

			        <!--Body-->
			        <div class="md-form">
			            <input value="{{ old('name') }}" name="name" type="text" id="form2" class="form-control text-white">
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
			            <input value="{{ old('location') }}" name="location" type="text" id="form4" class="form-control text-white">
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
			            <input value="{{ old('num_employees') }}" name="num_employees" type="number" id="form4" class="form-control text-white">
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
			            <input value="{{ old('num_offices') }}" name="num_offices" type="text" id="form4" class="form-control text-white">
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
			            <input value="{{ old('head_office') }}" name="head_office" type="text" id="form4" class="form-control text-white">
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
			            <input value="{{ old('type') }}" name="type" type="text" id="form4" class="form-control text-white">
			            <label for="form4">Government/Private</label>
			            @if($errors->has('type'))
							<p class="alert text-danger">**
								@if($errors->any('type'))
									Private or Government?
								@endif
							</p>
						@endif
			        </div>
			        <div class="md-form">
			        	<label for="form4">Upload Image</label><br><br>
			            <input name="f_img" type="file" id="form4" class="form-control text-white">
			            @if($errors->has('f_img'))
							<p class="alert text-danger">**
								@if($errors->any('f_img'))
									Select an Image
								@endif
							</p>
						@endif
			        </div>

			        <div class="text-center mb-5 ">
			            <button class="btn btn-primary text-white">Add</button>
			     	</div>
			     	@csrf
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