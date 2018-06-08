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

use Illuminate\Support\Facades\Route;

Route::get('/','DrugsController@home');

Route::get('/register','DrugsController@add');
Route::post('/register','DrugsController@register')->name("registerRoute");

Route::get('/list','DrugsController@list');
Route::get('/api/{id}','DrugsController@api');

Route::get('/details/{id}', 'DrugsController@details');


