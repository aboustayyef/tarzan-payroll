<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/employees', [
	'uses'	=>	'EmployeesController@index'
]);

Route::get('/employees/create',[
	'as'	=>	'employees.create',
	'uses'	=>	'EmployeesController@create'
]);

Route::get('/employees/update',[
	'as'	=>	'employees.update',
	'uses'	=>	'EmployeesController@update'
]);

Route::post('/employees', [
	'as'	=>	'employees.store',
	'uses'	=>	'EmployeesController@store'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
