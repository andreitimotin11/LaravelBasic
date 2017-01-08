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

Route::get('/',['as'=>'home','uses' => 'FirstController@show']);
Route::get('/about/{id}', 'FirstController@show');
Route::get('/articles', ['uses' => 'Admin\Core@getArticles',
 'as'=> 'articles']);

Route::get('/article/{page}',['uses'
=> 'Admin\Core@getArticle',
'as' => 'article']);