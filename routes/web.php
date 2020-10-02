<?php

use Illuminate\Support\Facades\Route;

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
//fullcalendar
Route::get('fullcalendar','App\Http\Controllers\FullCalendarController@index') ->name ('fullcalendar.index');
Route::post('fullcalendar/create','App\Http\Controllers\FullCalendarController@create');
Route::post('fullcalendar/update','App\Http\Controllers\FullCalendarController@update');
Route::post('fullcalendar/delete','App\Http\Controllers\FullCalendarController@destroy');

Route::get('/', function () {
    return view('fullcalendar');
});


