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


Route::get('/seguir/{seguido}/dejarDeSeguir','HomeController@dejarDeSeguir');

Route::get('/seguir/{seguido}','HomeController@seguir');

//Perfil
Route::get('/{username}','PerfilController@perfil');
Route::get('/{username}/following','PerfilController@perfilSiguiendo');
Route::get('/{username}/followers','PerfilController@perfilSeguidores');

//Tweet
Route::post('/tweet', 'HomeController@nuevoTweet');