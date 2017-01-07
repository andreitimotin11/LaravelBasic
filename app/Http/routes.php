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
    return view('welcome');
});

Route::get('/pages/{id_cat}/{id}', function ($id) {
     echo '<pre>';
     echo $id;
 //    print_r($_ENV);
     echo config('app.locale');
     echo Config::set('app.locale', 'ru');
     echo Config::get('app.locale');
     echo env('APP_ENV');
     echo '<pre>';
});
Route::get('/comments', function (){
    print_r($_POST);
});
Route:get('/page',function (){
    echo "Hello!";
});