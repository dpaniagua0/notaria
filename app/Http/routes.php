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
    return view('login');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('roles', 'RoleController');

Route::get('roles/delete/{id}', [
  'as' => 'roles.delete',
  'uses' => 'RoleController@destroy'
]);


Route::resource('users', 'UserController');

Route::get('users/delete/{id}', [
  'as' => 'users.delete',
  'uses' => 'UserController@destroy'
]);

Route::resource('conceptos', 'ConceptoController');

Route::get('conceptos/delete/{id}', [
  'as' => 'conceptos.delete',
  'uses' => 'ConceptoController@destroy'
]);

Route::resource('escrituras', 'EscrituraController');

Route::get('escrituras/delete/{id}', [
  'as' => 'escrituras.delete',
  'uses' => 'EscrituraController@destroy'
]);

Route::resource('servicios', 'ServiceController');

Route::get('servicios/delete/{id}', [
  'as' => 'servicios.delete',
  'uses' => 'ServiceController@destroy'
]);

Route::resource('documentos', 'DocumentController');

Route::get('documentos/delete/{id}', [
  'as' => 'documentos.delete',
  'uses' => 'DocumentController@destroy'
]);

Route::resource('declaranots', 'DeclaranotController');

Route::get('declaranots/delete/{id}', [
  'as' => 'declaranots.delete',
  'uses' => 'DeclaranotController@destroy'
]);