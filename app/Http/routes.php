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


Route::get('/page/{id_cat?}/{id}', function ($id_cat = 50,$id) {
     echo '<pre>';
     //echo $id;
     //echo $id_cat;
     echo $id_cat . '|' . $id ;
    // echo config('app.locale');
    // echo env('APP_ENV');
});
Route::get('/comments', function (){
    print_r($_POST);
});