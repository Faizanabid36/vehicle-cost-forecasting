<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home','HomeController@index')->name('home');
Route::resource('/manager','ManagerController');
Route::get('/changeimage/{manager}','ManagerController@image');
Route::post('/changeimage/{manager}','ManagerController@image');


Route::resource('/warehouses','WarehouseController');
Route::resource('/factories','FactoryController');
Route::resource('/production','ProductionController');
Route::resource('/dispatch','DispatchController');
Route::resource('/products','ProductController');
Route::resource('/vehicles','VehicleController');
Route::resource('/image','ImageController');

Route::resource('/factory_warehouse','FactoryWarehouseController');
Route::resource('/factory_warehouse_vehicle','FactoryWarehouseVehicleController');
Route::get('/cost','CostController@index')->name('cost');
Route::post('/cost/','CostController@index')->name('cost');

