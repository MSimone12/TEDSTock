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

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::post('/add', ['as'=>'adicionar', 'uses'=>'ImagensController@salvar'])->middleware('auth');
Route::get('/search', ['as'=>'busca', 'uses'=>'ImagensController@busca'])->middleware('auth');
Route::get('/img/{id}', ['as'=>'img', 'uses'=>'ImagensController@popup'])->middleware('auth');
Route::get('/download/{id}', ['as'=>'download', 'uses'=>'ImagensController@downloadTipo'])->middleware('auth');
