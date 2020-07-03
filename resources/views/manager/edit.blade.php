@extends('layouts.app')
{{-- Title Section --}}
@section('title','Edit Manager')

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
	<div class="col-md-6">
		<form method="post" enctype="multipart/form-data" action="{{ action('ManagerController@update',$managerE->id) }}">
			<div>
			    <div style="width: 60%;margin: 0px auto">
			        <!--Body-->
			        <div class="md-form">
			        	Name:
			        	<input type="text" value="{{ $managerE->name }}" name="name" type="text" class="form-control text-white">
			            @if($errors->has('name'))
							<p class="alert text-danger">**
								@if($errors->any('name'))
									Enter Name
								@endif
							</p>
						@endif
			        </div>
			        <div class="md-form">
			        	Address:
			        	<input type="text" value="{{ $managerE->address }}" name="address" type="text" class="form-control text-white">
			            @if($errors->has('address'))
							<p class="alert text-danger">**
								@if($errors->any('address'))
									Enter Address
								@endif
							</p>
						@endif
			        </div>

			        <div class="md-form">
			        	Contact Num:
			        	<input type="text" value="{{ $managerE->contact }}" name="contact" type="text" class="form-control text-white">
			            @if($errors->has('contact'))
							<p class="alert text-danger">**
								@if($errors->any('contact'))
									Enter Name
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
	</div>	
</div>
@endsection