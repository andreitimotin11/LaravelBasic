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

Route::get('/',['as'=>'home', function () {
    return view('welcome');
}]);
Route::get('/about/{id}', 'FirstController@show');
Route::get('/articles', 'Admin\Core@getArticles');
Route::get('/article/{id}', 'Admin\Core@getArticle');

// list pages
Route::resource('/pages', 'Admin\CoreResource');