<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function show() {
        return "<h1>Hello This IS controller</h1>";
    }
    // function showView($id) {
    //     return view("ctl",["id"=>$id]); 
    // }
    function showView($id=1) {
        return view("ctl",compact("id")); //jyare key  
    }
}
