@extends('layouts.app')
{{-- Title Section --}}
@section('title','New Forecast')

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
	</div>
			<table class="container mb-5 pb-5">
	    	<thead class="special mb-5">
	    		<div class="md-form">
					<select name="fac_name" style="width: 70%; margin: 0px auto;font-size:22px" id="form2" class="selectpicker text-white">
						<option style="font-size: 18px" class="text-black pt-5" value="" disabled selected> List of all Available Vehicles</option>
						@foreach($data[2] as $vehicles)
						<option value="{{ $vehicles->veh_type }}" style="font-size: 18px" class="text-black pt-5">
								{{ $vehicles->veh_type }} Ft.
						</option>
						@endforeach
					</select>
					@if($errors->has('war_name'))
							<p style="width: 70%; margin: 0px auto" class="alert">**
								@if($errors->any('fac_name'))
								Select a Factory Name
								@endif
							</p>
					@endif
				</div>


	    					<br><br><br><br>
	    	</thead>
	    	<thead>
	    		<tr>
	    			<th><h1>Factory-Warehouse</h1></th>
	    			<th colspan="7"><h1 style="text-align: center;">Number of Trips</h1></th>
	    		</tr>
	    		<tr>
	    			<td><h2 class="pb-0" hidden="">Vehicle Type</h2></td>
	    			<td >60FT</td>
	    			<td >50FT</td>
	    			<td >40FT</td>
	    			<td >20FT</td>
	    			<td >16FT</td>
	    		</tr>
	    	</thead>
		    <tbody>
			    	<tr>
			    		<td>
			    			<b class="text-white">{{ $data[3]->fac_name }}----> {{ $data[3]->war_name }}
			    			</b>
			    		</td>
			    		<td>
			    			<p class="text-white">
			    				{{
			    					ceil($data[3]->distribution/$data[2][0]['veh_loadability']) 
			    				}} Trips
			    			</p>
			    		</td>
			    		<td>
			    			<p class="text-white">
			    				{{
			    					ceil($data[3]->distribution/$data[2][1]['veh_loadability']) 
			    				}} Trips
			    			</p>
			    		</td>
			    		<td>
			    			<p class="text-white">
			    				{{
			    					ceil($data[3]->distribution/$data[2][2]['veh_loadability']) 
			    				}} Trips
			    			</p>
			    		</td>
			    		<td>
			    			<p class="text-white">
			    				{{
			    					ceil($data[3]->distribution/$data[2][3]['veh_loadability']) 
			    				}} Trips
			    			</p>
			    		</td>
			    		<td>
			    			<p class="text-white">
			    				{{
			    					ceil($data[3]->distribution/$data[2][4]['veh_loadability'])
			    				}} Trips
			    			</p>
			    		</td>
			    	</tr>
		    </tbody>
		</table>
			<div style="width: 60%; margin: 0px auto" class="text-center mb-5 ">
			    <a  href="/factory_warehouse/{{ $data[3]->id }}/edit">
			    	<button class="btn btn-primary text-white">Calculate Cost
		           </button>
			    </a>
		   	</div>
	  <script type="text/javascript" src="{{ asset('MDB/js/jquery-3.4.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('MDB/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('MDB/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('MDB/js/mdb.min.js') }}"></script>	
	</div>
@endsection