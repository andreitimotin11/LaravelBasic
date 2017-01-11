<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show(){
      //  return view('default.template', ['title'=>'Hello World!']);
        $view = view('default.template');

        $view->with('title','Hello World2!');
        $view->with('title2','Hello World3!');

        return $view;
    }
}
