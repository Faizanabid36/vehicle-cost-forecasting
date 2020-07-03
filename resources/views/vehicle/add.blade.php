@extends('layouts.app')
{{-- Title Section --}}
@section('title','Add new Vehicle')


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
	            <h1>Add a new Warehouse to the list</h1>
	          </header>
			</div>
		</div>
{{-- 		???????????????????? --}}
		<form method="post" enctype="multipart/form-data" action="{{ action('VehicleController@store') }}">
			<div>
			    <div style="width: 60%;margin: 0px auto;">

			        <!--Body-->
			        <div class="md-form">
			        	<label for="form2">Vehicle Type <small>(Ft)</small></label><br><br>
			        	<select id="form2" class="text-white" value="{{ old('veh_type') }}" name="veh_type">
			        		<option selected disabled value="" >Please Choose an Option</option>
			        		<option value="60">60 Ft</option>
			        		<option value="50">50 Ft</option>
			        		<option value="40">40 Ft</option>
			        		<option value="20">20 Ft</option>
			        		<option value="16">16 Ft</option>
			        	</select>
			            @if($errors->has('veh_type'))
							<p class="alert text-danger">**
								@if($errors->any('veh_type'))
									Select Type of Vehicle
								@endif
							</p>
						@endif
			        </div>

			        <div class="md-form">
			            <input value="{{ old('veh_loadability') }}" name="veh_loadability" type="text" id="form4" class="form-control text-white">
			            <label for="form4">Vehicle Loadability</label>
			            @if($errors->has('veh_loadability'))
							<p class="alert text-danger">**
								@if(strpos($errors->get('veh_loadability')[0], "required"))
									Enter Number of Employees
								@endif
								@if(strpos($errors->get('veh_loadability')[0], "greater"))
									Vehicle Loadability Must be Greater than 300 Cases
								@endif
							</p>
						@endif
			        </div>


			        <div class="md-form">
			            <label for="form4">Vehicle Picture</label><br><br>
			            <input value="{{ old('veh_img') }}" name="veh_img" type="file" id="form4" class="form-control text-white">
			            @if($errors->has('veh_img'))
							<p class="alert text-danger">**
								@if($errors->any('veh_img'))
									Select an Image
								@endif
							</p>
						@endif
			        </div>

			        <div class="text-center mb-5 ">
			            <button class="btn btn-primary text-white">Add Vehicle</button>
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