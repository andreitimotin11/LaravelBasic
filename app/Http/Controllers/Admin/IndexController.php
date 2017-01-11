<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show(){
        echo 1;

      //  return view('default.template', ['title'=>'Hello World!']);
        return view('default.template')->with('title','Hello World2!');
    }
}
