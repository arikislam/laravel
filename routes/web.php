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


Route::get('articels','ArticelController@index');
Route::get('articels/create','ArticelController@create');
Route::get('articels/new','ArticelController@new');


Route::get('articels/{id}','ArticelController@show');
Route::post('articels','ArticelController@store');



