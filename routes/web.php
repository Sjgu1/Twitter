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

//Seguir
Route::get('/seguir/{seguido}/dejarDeSeguir','HomeController@dejarDeSeguir');
Route::get('/seguir/{seguido}','HomeController@seguir');
Route::post('/','PerfilController@buscar');

//RT
Route::get('/{tweet}/hacerRT','HomeController@addRT');
Route::get('/{tweet}/quitar/deshacerRT','HomeController@removeRT');

//Like
Route::get('/{tweet}/hacerLike','HomeController@addLike');
Route::get('/{tweet}/quitar/deshacerLike','HomeController@removeLike');

//Perfil
Route::get('/{username}','PerfilController@perfil');
Route::post('/{username}','PerfilController@modificarPerfil');
Route::get('/{username}/following','PerfilController@perfilSiguiendo');
Route::get('/{username}/followers','PerfilController@perfilSeguidores');
Route::get('/{username}/likes','PerfilController@perfilLikes');

//Administrador
Route::get('/administrar/general','PerfilController@administrar')->middleware('admin');
Route::post('/administrar/crearUsuario','PerfilController@crearUsuario')->middleware('admin');
Route::get('/administrar/usuario/{username}','PerfilController@administrarUsuario')->middleware('admin');
Route::post('/administrar/usuario/{username}','PerfilController@actualizarUsuario')->middleware('admin');
Route::get('/administrar/usuario/{username}/eliminar','PerfilController@eliminarUsuario')->middleware('admin');





//Tweet
Route::post('/tweet/nuevo', 'HomeController@nuevoTweet');
Route::get('/{username}/status/{id}','PerfilController@perfilTweet');
Route::post('/{username}/status/{id}','HomeController@addRespuesta');

Route::get('/tweet/{tweet}','HomeController@removeTweet');


//Mensajes
Route::post('/mensaje/{conver}', 'MessageController@nuevoMensaje');
Route::get('/conver/{idUser}', 'MessageController@nuevaConver');
Route::get('/conver/borrar/{idConver}', 'MessageController@deleteConver');
Route::get('/mensaje/borrar/{idMensaje}', 'MessageController@deleteMensaje');