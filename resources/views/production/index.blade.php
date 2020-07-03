@extends('layouts.app')
@section('title','Add Daily Production')
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

@section('content')
		<div class="container row">
				<div class="inner mt-5">
					<header class="special">
		        	<h1>Daily Production</h1>
		     	   <h3 class="text-white">Product that is Manufactured on Daily basis</h3>
		   		</header>
			</div>
		</div>
		<form method="post" action="{{ action('ProductionController@store') }}">
			<table id="myTable" class="container mb-5 table order-list">
				<thead>
					<tr>
						<th><h2 style="font-size: 22px">Factory</h2></th>
						<th><h2 style="font-size: 22px">Quantity Produced</h2></th>
						<th><h2 style="font-size: 22px">Date of Production</h2></th>
					</tr>
				</thead>
		    <tbody>
		    	<tr>	
		    		<td>
		    			<div class="md-form">
						<select name="fac_name1" id="form2" class="selectpicker text-white">
							<option class="text-black" value="" disabled selected> Select Factory</option>
							@foreach($data[0] as $factories)
							<option value="{{ $factories->name }}" class="text-black">
									{{ $factories->name }}
							</option>
							@endforeach
						</select>
						</div>
		    		</td>
		    		<td>
						<div class="md-form">
							<label for="qty1">Production <small>(In Cases)</small></label>
							<input value="" id="form4" class="form-control text-white" type="number" name="qty1">
						</div>
					</td>
					<td>
						<div class="md-form">
							<label for="distribution">Date</label>
							<input readonly="" value="{{ date('d F Y') }}" id="form4" class="form-control text-white" type="text" name="date_prod1">
						</div>
					</td>
				</tr>
				<tr>	
		    		<td>
		    			<div class="md-form">
						<select name="fac_name2" id="form2" class="selectpicker text-white">
							<option class="text-black" value="" disabled selected> Select Factory</option>
							@foreach($data[0] as $factories)
							<option value="{{ $factories->name }}" class="text-black">
									{{ $factories->name }}
							</option>
							@endforeach
						</select>
						</div>
		    		</td>
		    		<td>
						<div class="md-form">
							<label for="qty2">Production <small>(In Cases)</small></label>
							<input value="" id="form4" class="form-control text-white" type="number" name="qty2">
						</div>
					</td>
					<td>
						<div class="md-form">
							<label for="date1">Date</label>
							<input readonly="" value="{{ date('d F Y') }}" id="form4" class="form-control text-white" type="text" name="date_prod2"	>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						@if($errors->has('fac_name1')||$errors->has('fac_name2'))
							<p class="alert text-danger">**
								@if($errors->any('fac_name1')||$errors->has('fac_name2'))
									Select Factory
								@endif
							</p>
						@endif
					</td>
					<td>
						@if($errors->has('qty1')||$errors->has('qty2'))
							<p class="alert text-danger">**
								@if($errors->any('qty1')||$errors->any('qty2'))
									Enter Number of Cases Produced
								@endif
							</p>
						@endif
					</td>
					<td>
						@if($errors->has('date_prod1')||$errors->has('date_prod2'))
							<p class="alert text-danger">**
								@if($errors->any('date_prod1')||$errors->any('date_prod2'))
									Enter Date
								@endif
							</p>
						@endif
					</td>
				</tr>
		    </tbody>
		</table>
			<div style="width: 60%; margin: 0px auto" class="text-center mb-5 ">
			       <button class="btn btn-primary text-white">Add Production
		           </button>
		   	</div>
		  	@csrf
		</form>
	  <script type="text/javascript" src="{{ asset('MDB/js/jquery-3.4.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('MDB/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('MDB/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('MDB/js/mdb.min.js') }}"></script>	
	</div>
@endsection