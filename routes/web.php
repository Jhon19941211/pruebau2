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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfil', 'UserController@perfil')->name('perfil');

Route::post('/actualizar', 'UserController@actualizar')->name('actualizar');

Route::get('/pasatiempo', 'PasatiempoController@pasatiempo')->name('pasatiempo');


Route::get('/pasatiempo/crear', 'PasatiempoController@crear')->name('crearpasatiempo');

Route::post('/create', 'PasatiempoController@create')->name('create');

Route::get('/pasatiempo/listar', 'PasatiempoController@listar')->name('listar');
