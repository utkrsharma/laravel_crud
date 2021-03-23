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
/*Route::get('botman/handle', 'App\Http\Controllers\BotManController@handle')->name('botman.handle');
Route::post('botman/handle', 'App\Http\Controllers\BotManController@handle')->name('botman.handle');*/
Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');