@extends('layouts.app')
{{-- Title Section --}}
@section('title','Add new Warehouse')


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
		<form method="post" action="{{ action('WarehouseController@store') }}">
			<div>
			    <div class="" style="width: 60%;margin: 0px auto;">

			        <!--Body-->
			        <div class="md-form">
			            <input value="{{ old('w_name') }}" name="w_name" type="text" id="form2" class="form-control text-white">
			            <label for="form2">Warehouse Name</label>
			            @if($errors->has('w_name'))
							<p class="alert text-danger">**
								@if($errors->any('w_name'))
									Enter Name of the Warehouse
								@endif
							</p>
						@endif
			        </div>

			        <div class="md-form">
			            <input value="{{ old('w_location') }}" name="w_location" type="text" id="form4" class="form-control text-white">
			            <label for="form4">Location</label>
			            @if($errors->has('w_location'))
							<p class="alert text-danger">**
								@if($errors->any('w_location'))
									Enter Location of Warehouse
								@endif
							</p>
						@endif
			        </div>


			        <div class="md-form">
			            <input value="{{ old('storage') }}" name="storage" type="text" id="form4" class="form-control text-white">
			            <label for="form4">Storage <small>(cases)</small></label>
			            @if($errors->has('storage'))
							<p class="alert text-danger">**
								@if(strpos($errors->get('storage')[0], "required"))
									Enter the Storage Capacity of Warehouse
								@endif
								@if(strpos($errors->get('storage')[0], "greater"))
									Storage Must be Greater than 15000 Cases
								@endif
							</p>
						@endif
			        </div>

			        <div class="text-center mb-5 ">
			            <button class="btn btn-primary text-white">Add Warehouse</button>
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