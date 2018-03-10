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

Route::get('/', 'HomeController@index');


Route::group(['middleware' => 'guest'], function (){
	
	Route::get('/inscription', 'AuthController@getRegister');
	Route::post('/inscription', 'AuthController@postRegister');
	
	Route::get('/connexion', 'AuthController@getLogin');
	Route::post('/connexion', 'AuthController@postLogin');
});


Route::group(['middleware' => 'auth'], function (){
	
	Route::get('/compte', 'AuthController@account');
	Route::put('/compte', 'AuthController@postPassword');
	
	Route::get('/deconnexion', 'AuthController@logout');
});



Route::group(['middleware' => ['admin','auth'], 'prefix' => 'admin'], function (){
	
	Route::get('/', 'AdminController@getProject');
	Route::post('/', 'AdminController@postProject');
	
	Route::get('/supprimer/{id}', 'AdminController@removeProject');
	
	Route::get('/editer/{id}', 'AdminController@getEditProject');
	Route::put('/editer/{id}', 'AdminController@postEditProject');
});
 



