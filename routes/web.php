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

/*Route::get('/', function () {
return view('Login.login');
})->name('login');*/

Route::get('/', 'Login\\AuthController@dashboard')->name('login');
Route::post('/auth', 'Login\\AuthController@login')->name('login.do'); 

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'Login\\AuthController@logout')->name('logout'); 


});


