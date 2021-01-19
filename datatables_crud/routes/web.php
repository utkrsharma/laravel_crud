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
    return view('welcome');
});

Route::get('ajaxdata', 'App\Http\Controllers\AjaxdataController@index')->name('ajaxdata');
Route::get('ajaxdata/getdata', 'App\Http\Controllers\AjaxdataController@getdata')->name('ajaxdata.getdata');

Route::post('ajaxdata/postdata', 'App\Http\Controllers\AjaxdataController@postdata')->name('ajaxdata.postdata');

Route::get('ajaxdata/fetchdata', 'App\Http\Controllers\AjaxdataController@fetchdata')->name('ajaxdata.fetchdata');