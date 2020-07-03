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
    <form action="{{ action('CostController@index') }}" method="post">
            <table class="container mb-5 pb-5">
            <thead class="special mb-5">
            </thead>
            <thead>
                <tr style="font-size:24px">
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
                    {{-- <tr>
                        <td>
                            <b class="text-white"><input hidden name="facory_name" value="{{ $data[3]->fac_name }}">
                                {{ $data[3]->fac_name }}----> {{ $data[3]->war_name }}
                            </b>
                            <input hidden name="warehouse_name" value="{{ $data[3]->war_name }}">
                        </td>
                        <td>
                            <p class="text-white"><input name="T_60" hidden value="{{
                                    ceil($data[3]->distribution/$data[2][0]['veh_loadability']) 
                                }}">
                                {{
                                    ceil($data[3]->distribution/$data[2][0]['veh_loadability']) 
                                }} Trips
                            </p>
                        </td>
                        <td>
                            <p class="text-white"><input name="T_50" hidden value="{{ ceil($data[3]->distribution/$data[2][1]['veh_loadability']) }}">
                                {{
                                    ceil($data[3]->distribution/$data[2][1]['veh_loadability']) 
                                }} Trips
                            </p>
                        </td>
                        <td>
                            <p class="text-white"><input name="T_40" hidden value="{{ ceil($data[3]->distribution/$data[2][2]['veh_loadability']) }}">
                                {{
                                    ceil($data[3]->distribution/$data[2][2]['veh_loadability']) 
                                }} Trips
                            </p>
                        </td>
                        <td>
                            <p class="text-white"><input name="T_20" hidden value="{{ ceil($data[3]->distribution/$data[2][3]['veh_loadability']) }}">
                                {{
                                    ceil($data[3]->distribution/$data[2][3]['veh_loadability']) 
                                }} Trips
                            </p>
                        </td>
                        <td>
                            <p class="text-white"><input name="T_16" hidden value="{{ ceil($data[3]->distribution/$data[2][4]['veh_loadability'])
 }}">
                                {{
                                    ceil($data[3]->distribution/$data[2][4]['veh_loadability'])
                                }} Trips
                            </p>
                        </td>
                    </tr>
            </tbody>
            <tbody>
                <tr>
                    <th><h1 class="text-white">Cost for each Vehicle</h1></th>
                    <th><h1>
                        <input name="C_60" hidden value="{{ 
                        ceil($data[3]->distribution/$data[2][0]['veh_loadability'])*($data[3]->cpkm*$data[3]->distance)
                        }}">

                        <p class="text-white">
                            {{ 
                            ceil($data[3]->distribution/$data[2][0]['veh_loadability'])*($data[3]->cpkm*$data[3]->distance)
                            }} Rs.
                        </p> 
                    </h1></th>
                    <th><h1>
                        <input name="C_50" hidden value="{{ 
                        ceil($data[3]->distribution/$data[2][1]['veh_loadability'])*($data[3]->cpkm*$data[3]->distance)
                            }}">

                        <p class="text-white">
                            {{ 
                            ceil($data[3]->distribution/$data[2][1]['veh_loadability'])*($data[3]->cpkm*$data[3]->distance)
                            }} Rs.
                        </p>
                    </h1></th>
                    <th><h1>
                        <input name="C_40" hidden value="{{ 
                            ceil($data[3]->distribution/$data[2][2]['veh_loadability'])*($data[3]->cpkm*$data[3]->distance)
                        }}">
                        <p class="text-white"> 
                            {{ 
                                ceil($data[3]->distribution/$data[2][2]['veh_loadability'])*($data[3]->cpkm*$data[3]->distance)
                            }} Rs.
                        </p>
                    </h1></th>
                    <th><h1>
                        <input name="C_20" hidden value="{{ 
                            ceil($data[3]->distribution/$data[2][3]['veh_loadability'])*($data[3]->cpkm*$data[3]->distance)
                        }}">
                        <p class="text-white">
                            {{ 
                                ceil($data[3]->distribution/$data[2][3]['veh_loadability'])*($data[3]->cpkm*$data[3]->distance)
                            }} Rs.
                        </p>
                    </h1></th>
                    <th><h1>
                        <input name="C_16" hidden value="{{ 
                            ceil($data[3]->distribution/$data[2][4]['veh_loadability'])*($data[3]->cpkm*$data[3]->distance)
                        }}">
                        <p class="text-white"> 
                            {{ 
                                ceil($data[3]->distribution/$data[2][4]['veh_loadability'])*($data[3]->cpkm*$data[3]->distance)
                            }} Rs.
                        </p>
                    </h1></th>
                </tr>
             --}}
        </tbody>
        </table>
        <div style="width: 60%; margin: 0px auto" class="text-center mb-5 ">
                <a  {{-- href="/factory_warehouse/create" --}}>
                    <button type="submit" class="btn btn-primary text-white">Calculate AnotherForecast
                   </button>
                </a>
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