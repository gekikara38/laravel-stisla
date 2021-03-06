<?php

use Illuminate\Support\Facades\App;
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



Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('logout', 'App\Http\Controllers\LoginController@logout');

Route::group(['middleware' => ['auth', 'checklevel:admin']], function(){

    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    // Route::get('');
});

Route::get('/', function () {
    return view('welcome');
});
