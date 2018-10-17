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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as'=>'main', 'uses'=>'MainController@show']);

Route::get('/events', ['as'=>'events', 'uses'=>'EventsController@show']);

Route::get('/event', ['as'=>'event', 'uses'=>'EventController@show']);
