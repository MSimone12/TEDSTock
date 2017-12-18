<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as'=>'index', 'uses'=>'ImagensController@index']);

// Auth::routes();

Route::post('/add', ['as'=>'adicionar', 'uses'=>'ImagensController@salvar']);
Route::get('/home', 'HomeController@index');
Route::get('/search', ['as'=>'busca', 'uses'=>'ImagensController@busca']);
