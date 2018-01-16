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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/seguir/{seguido}','HomeController@seguir');
Route::put('/seguir/{seguido}','HomeController@dejarDeSeguir');

//Perfil
Route::get('/{username}','PerfilController@perfil');

//Tweet
Route::post('/tweet', 'HomeController@nuevoTweet');

//Mensajes
Route::get('/mensaje','MessageController@index');