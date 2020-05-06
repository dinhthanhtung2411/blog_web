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

Route::get('/signin', 'SigninController@index')->name('signin.index');
Route::post('/signin', 'SigninController@signin')->name('signin');
Route::get('/logout', 'SigninController@logout')->name('logout');

Route::get('/register', "RegisterController@show")->name("register.show");


Route::middleware('checkSignin')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');

});


