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

Route::get('/', 'UserController@home');

Route::get('/usuarios', 'UserController@index')->name('users');

//el condicional sirve para que esta ruta solo funcione cuando se le pase un número y no letras
Route::get('/usuarios/{id}','UserController@show')
        ->where('id', '[0-9]+')
        ->name('users.show');

Route::get('/usuarios/nuevo','UserController@create')->name('users.create');

Route::get('/saludo/{name}/{nickname?}','WelcomeUserController@index');