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

Route::group(array('before' => 'auth'), function(){

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::get('/produtos/editar/{id}', 'ProdutoController@editar');

Route::post('/produtos/atualizar/{id}', 'ProdutoController@atualizar');

});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
