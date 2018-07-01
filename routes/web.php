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

Route::get('/', [
	'as'=>'article.home',
	'uses'=>'ArticleController@home'

]);
Route::get('/articles',[
	'as' => 'article.index',
	'uses' => 'ArticleController@index']);
Route::get('/articles/create',[

	'as'=>'article.create',
	'uses'=>'ArticleController@create'
]);
Route::post('/articles',[
	'as'=>'article.store',
	'uses'=>'ArticleController@store'
]);
Route::get('/articles/{id}/edit',[
	'as'=>'article.edit',
	'uses'=>'ArticleController@edit'
]);
Route::put('/articles/{id}',[
	'as'=>'article.update',
	'uses'=>'ArticleController@update'
]);
Route::delete('/articles/{id}',[
	'as'=>'article.destroy',
	'uses'=>'ArticleController@destroy'
]);

Route::get('/articles/{id}',
['as'  =>'article.show',
'uses'=>'ArticleController@show']);
