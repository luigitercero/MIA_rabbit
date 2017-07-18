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

Route::get('/','InicioController@index'

/*function () {
    return view('master');
}*/);
Route::resource('perfil', 'PerfilController');
Route::resource('usuario', 'UsuarioController'); //index, create,show, delete,store,edit

Route::resource('roll', 'RollController');
Route::resource('genero', 'GeneroController');
Route::resource('mail', 'MailController');

Route::resource('log','LogController');
Route::resource('admin/posts', 'Admin\\PostsController');
Route::get('logout','LogController@logout');
Route::resource('publicidad','PublicidadController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('sistema', 'sistemaController');



