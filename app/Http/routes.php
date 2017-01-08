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

Route::get('/article/{id}',
    ['as'=>'article',
        function ($id) {
   echo $id;
}]);


Route::get('/page/{id}', function ($id) {
     echo '<pre>';
     echo $id ;
})->where('id', '[0-9]+');

Route::get('/comments', function (){
    print_r($_POST);
});
Route::group(['prefix'=>'admin'], function (){
    Route::get('page/create', function (){
        return redirect()->route('home');
    });
    Route::get('page/edit', function (){
        echo 'page/edit';
    });
});