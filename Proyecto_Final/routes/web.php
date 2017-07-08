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

Route::get('/', function () {
    return view('master');
});
<<<<<<< HEAD
Route::resource('usuario', 'UsuarioController'); //index, create,show, delete,store,edit
=======
Route::resource('usuario', 'UsuarioController');
>>>>>>> 23e5f9801dece8d6f572dd0939ec5450d5b811ca
Route::resource('roll', 'RollController');
Route::resource('genero', 'GeneroController');
Auth::routes();
Route::resource('log','LogController');
Route::resource('admin/posts', 'Admin\\PostsController');
Route::get('logout','LogController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
