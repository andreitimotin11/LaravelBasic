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

Route::get('/',['as'=>'home', 'middleware' => 'mymiddle','uses'=>'Admin\AboutController@show', 'as'=>'home' ]);
Route::get('/about', ['uses' => 'FirstController@show', 'as' => 'about']);
Route::get('/articles', [ 'uses' => 'Admin\Core@getArticles',
    'as' => 'articles']);
Route::get('/article/{id}', ['uses' => 'Admin\Core@getArticle', 'middleware' => 'mymiddle:home',
    'as' => 'article'])/*->middleware(['mymiddle'])*/;
Route::get('/about', ['uses'=>'FirstController@show',
    'as'=>'about',
    'middleware' => 'mymiddle']);

// list pages
/*
Route::resource('/pages', 'Admin\CoreResource');
Route::controller('/pages','PagesController');
Route::get('/article/{page}',['uses'
=> 'Admin\Core@getArticle',
'as' => 'article',
'middleware' => 'mymiddle']);
*/