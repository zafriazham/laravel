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

Route::get('/', function () {
    return 'I want to learn to test something';
    // return view('welcome');
});

Route::group(['prefix' => 'cuaca'], function () {
    Route::get('/', 'WebController@displayData')->name('get');
});
