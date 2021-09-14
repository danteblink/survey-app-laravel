<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

// Verificar Email
Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'Auth\AuthController@confirm'
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

Route::post('form', ['as' =>'form', 'uses' => 'FormController@store']);

Route::post('investigacion', ['as' =>'investigacion', 'uses' => 'investigacionController@store']);

Route::get('institucion', ['as' =>'institucion', 'uses' => 'institucionController@store']);
Route::post('institucion', ['as' =>'institucion', 'uses' => 'institucionController@store']);

Route::post('publicacion/add', ['as' =>'publicacion/add', 'uses' => 'publicacionController@add']);
Route::delete('publicacion/delete/{id}', ['as' =>'publicaciones/delete', 'uses' => 'publicacionController@delete']);

Route::post('proyecto/add', ['as' =>'proyecto/add', 'uses' => 'proyectoController@add']);
Route::delete('proyecto/delete/{id}', ['as' =>'proyecto/delete', 'uses' => 'proyectoController@delete']);

Route::post('patente/add', ['as' =>'patente/add', 'uses' => 'patenteController@add']);
Route::delete('patente/delete/{id}', ['as' =>'patente/delete', 'uses' => 'patenteController@delete']);

Route::post('vinculacion/add', ['as' =>'vinculacion/add', 'uses' => 'vinculacionController@add']);
Route::delete('vinculacion/delete/{id}', ['as' =>'vinculacion/delete', 'uses' => 'vinculacionController@delete']);

Route::post('equipo/add', ['as' =>'equipo/add', 'uses' => 'equipoController@add']);
Route::delete('equipo/delete/{id}', ['as' =>'equipo/delete', 'uses' => 'equipoController@delete']);

Route::post('personales/add', ['as' =>'personales/add', 'uses' => 'personalesController@add']);
Route::post('personales/update/{id}', ['as' =>'personales.update', 'uses' => 'personalesController@update']);
Route::delete('personales/delete/{id}', ['as' =>'personales/delete', 'uses' => 'personalesController@delete']);

Route::post('estudiante/add', ['as' =>'estudiante/add', 'uses' => 'estudianteController@add']);
Route::post('estudiante/update/{id}', ['as' =>'estudiante.update', 'uses' => 'estudianteController@update']);
Route::delete('estudiante/delete/{id}', ['as' =>'estudiante.delete', 'uses' => 'estudianteController@delete']);

Route::post('miembro/add', ['as' =>'miembro/add', 'uses' => 'miembroController@add']);
Route::delete('miembro/delete/{id}', ['as' =>'miembro/delete', 'uses' => 'miembroController@delete']);

Route::post('grupo/add', ['as' =>'grupo/add', 'uses' => 'grupoController@add']);
Route::post('grupo/update/{id}', ['as' =>'grupo.update', 'uses' => 'grupoController@update']);
Route::delete('grupo/delete/{id}', ['as' =>'grupo.delete', 'uses' => 'grupoController@delete']);

Route::get('investigador/{id}', 'pdfController@invoice');

Route::get('estudiante/{id}', 'pdfController@invoiceStudent');