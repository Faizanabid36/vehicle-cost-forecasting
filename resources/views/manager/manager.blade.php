@extends('layouts.app')
{{-- Title Section --}}
@section('title','Manager')

@section('content')
@if (Session::has('success'))
    <div class="alert alert-success pb-0 mb-3">
        <ul>
            {!! Session::get('success')[0] !!}
        </ul>
    </div>
@endif
<div style="margin:50px 0px" class="row">
	<div class="col-md-6">
		<img src="{{ asset('images\\factoryImages\\'."649244026.jfif") }}">
		<br><br>
	</div>
		<div style="text-align: left" class="col-md-6 ">
			<h3 class="text-white" style="font-size: 22px">Name:</h3>{{ $data[0]->name }}
			<h3 class="text-white" style="font-size: 22px">Address:</h3>{{ $data[0]->address }}
			<h3 class="text-white" style="font-size: 22px">Contact:</h3>{{ $data[0]->contact }}
			<h3 class="text-white" style="font-size: 22px">Employee ID:</h3>{{ $data[0]->emp_id }}
			<br>
			<button class="m-3">
				<a href="/manager/{{ $data[0]->id }}/edit">Change Data</a>
			</button>
		</div>
</div>
@endsection