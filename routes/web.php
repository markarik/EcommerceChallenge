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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/','UsersController@index');
Route::get('/dashboard','UsersController@index');

Route::get('/dashboard2','UsersController@index2');

Route::get('/dashboard3','UsersController@index3');

Route::get('/cart','CartController@index');
Route::get('/laptop','LaptopController@index');
Route::get('/accessories','AccessoriesController@index');
Route::get('/items','OthersController@index');


Route::get('/detail','LaptopController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
