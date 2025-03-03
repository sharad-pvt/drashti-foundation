<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\formController;

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/', '/home', 301);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::view("/home","home",["name"=>"Sharad","std"=>"12th","city"=>"Bhopal"]);

Route::get("/home", function () {
    return view("pages.home"); 
});
Route::view("/service","pages.service")->name("service");
Route::view("/blogs","pages.blog");
Route::view("/contact","pages.contact");
Route::view("/projects","pages.projects");

// Learning Controller

Route::get("/ctl",[pageController::class,"show"]);
Route::get("/ctl2/{id?}",[pageController::class,"showView"]); //jyare key value pair hoy to compact use karvu

// group try
Route::prefix('post')->group(function () {
    Route::get("/one",function(){
        return "This is one";
    })->name("one");
    Route::get("/two",function(){
        return "This is two";
    })->name("two");
    Route::get("/three",function(){
        return "This is three";
    })->name("three");
});

Route::get("/form",[formController::class,"formPage"]);
Route::post("/form-data",[formController::class,"formData"]);
// Route::prefix('projects')
    
