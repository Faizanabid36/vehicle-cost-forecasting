@extends('layouts.app')
@section('title','Dispatch Produced Cases')

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
		        <h1>Deleiver th Produced Cases</h1>
		   	</header>
		</div>
	</div>
	@if (Session::has('success'))
		    <div class="alert alert-success pb-0 mb-3">
		        <ul>
		            {!! Session::get('success')[0] !!}
		        </ul>
		    </div>
		@endif

	<form method="post" action="{{ action('DispatchController@store') }}">
			<table id="myTable" class="container mb-5 table order-list">
				<thead>
					<tr>
						<th><h2 style="font-size: 22px">Select Factory</h2></th>
						<th><h2 style="font-size: 22px">Select Warehouse</h2></th>
						<th><h2 style="font-size: 22px">Quantity to Deleiver</h2></th>
						<th><h2 style="font-size: 22px">Date of Production</h2></th>
					</tr>
				</thead>
		    <tbody>
				<tr>	
		    		<td>
		    			<div class="md-form">
						<select name="fac_name" id="form2" class="selectpicker text-white">
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
						<select name="ware_name" id="form2" class="selectpicker text-white">
							<option class="text-black" value="" disabled selected> Select Warehouse</option>
							@foreach($data[1] as $warehuse)
							<option value="{{ $warehuse->w_name }}" class="text-black">
									{{ $warehuse->w_name }}
							</option>
							@endforeach
						</select>
						</div>
		    		</td>
		    		<td>
						<div class="md-form">
							<label for="qty">Production <small>(In Cases)</small></label>
							<input value="" id="form4" class="form-control text-white" type="number" name="qty">
						</div>
					</td>
					<td>
						<div class="md-form">
							<label for="date1">Date</label>
							<input readonly="" value="{{ date('d F Y') }}" id="form4" class="form-control text-white" type="text" name="date_prod"	>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						@if($errors->has('fac_name')||$errors->has('fac_name2'))
							<p class="alert text-danger">**
								@if($errors->any('fac_name')||$errors->has('fac_name'))
									Select Factory
								@endif
							</p>
						@endif
					</td>
					<td>
						@if($errors->has('ware_name')||$errors->has('ware_name'))
							<p class="alert text-danger">**
								@if($errors->any('ware_name')||$errors->any('ware_name'))
									Enter Date
								@endif
							</p>
						@endif
					</td>
					<td>
						@if($errors->has('qty')||$errors->has('qty'))
							<p class="alert text-danger">**
								@if($errors->any('qty')||$errors->any('qty'))
									Enter Number of Cases Produced
								@endif
							</p>
						@endif
					</td>
					<td>
						@if($errors->has('date_prod')||$errors->has('date_prod'))
							<p class="alert text-danger">**
								@if($errors->any('date_prod')||$errors->any('date_prod'))
									Enter Date
								@endif
							</p>
						@endif
					</td>
				</tr>
		    </tbody>
		</table>
			<div style="width: 60%; margin: 0px auto" class="text-center mb-5 ">
			       <button class="btn btn-primary text-white">Dispatch Production
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
@endsection