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
  <script type="text/javascript">

  	$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="mail' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="phone' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
</script>

@endsection



{{-- Content Goes Here --}}
@section('content')
	@if (Session::has('success'))
		    <div class="alert alert-success pb-0 mb-3">
		        <ul>
		            {!! Session::get('success')[0] !!}
		        </ul>
		    </div>
		@endif
		<form method="post" action="{{ action('FactoryWarehouseController@store') }}">
			<table id="myTable" class="container mb-5 pb-5 table order-list">
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
						@if($errors->has('war_name'))
							<p class="alert text-danger">**
								@if($errors->any('war_name'))
									Select Warehouse
								@endif
							</p>
						@endif
						</div>
		    		</td>
		    		<td>
		        	   	<div class="md-form">
		        	   		<select name="war_name" id="form2"  class="selectpicker text-white">
								<option class="text-black"	 disabled selected> Select Warehouse</option>
								@foreach($data[1] as $warehouses)
									<option value="{{ $warehouses->w_name }}" class="text-black">
										{{ $warehouses->w_name }}
									</option>
								@endforeach
							</select>
							@if($errors->has('war_name'))
								<p class="alert text-danger">**
									@if($errors->any('war_name'))
										Select A Warehouse
									@endif
								</p>
							@endif
		        	   	</div>
					</td>
					<td>
						<div class="md-form">
							<label for="distance">Distance</label>
							<input id="form4" class="form-control text-white" type="number" name="distance">
						</div>
						@if($errors->has('distance'))
							<p class="alert text-danger">**
								@if($errors->any('distance'))
									Enter Distance between Factory and Warehouse
								@endif
							</p>
						@endif
					</td>
					<td>
						<div class="md-form">
							<label for="cpkm">Cost/KM</label>
							<input id="form4" class="form-control text-white" type="number" name="cpkm">
						</div>
						@if($errors->has('cpkm'))
							<p class="alert text-danger">**
								@if(strpos($errors->get('cpkm')[0], "required"))
									Enter Cost per KM
								@endif
								@if(strpos($errors->get('cpkm')[0], "greater"))
									Cost per KM Must be Greater than 30
								@endif
							</p>
						@endif
					</td>
					<td>
						<div class="md-form">
							<label for="distribution">Production</label>
							<input value="{{ $data[2] }}" readonly="" id="form4" class="form-control text-white" type="number" name="distribution">
						</div>
						@if($errors->has('distribution'))
							<p class="alert text-danger">**
								@if($errors->any('distribution'))
									Enter Number of Cases to be Disributed
								@endif
							</p>
						@endif
					</td>
					<td><input type="submit" class="btn btn-primary" id="addrow" value="Add Row" /></td>
				</tr>
		    </tbody>
		</table>
			<div style="width: 60%; margin: 0px auto" class="text-center mb-5 ">
			       <button class="btn btn-primary text-white">Get Number of Trips
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