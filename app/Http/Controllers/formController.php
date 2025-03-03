<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    function formPage(){
        return view("user-form");
    }
    function formData(Request $req) {
        // return $req->input(); //returning input data
        // return $req; // return all data
        $req->validate([
            "username"=>"required|min:3|max:12",
            "name"=>"required|min:3|max:12",
            "email"=>"required|email",
            "city"=>"required|min:5|max:10"
        ]);
        return view("formData",$req); //passing data to view
    }
}
