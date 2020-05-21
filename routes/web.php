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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/client/index', 'ClientController@index')->name('client.index');




//Route::get('login/{provider}', 'SocialController@redirect');
//Route::get('login/{provider}/callback','SocialController@Callback');
