<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ContactController;

Route::get('/', function(){
    return view('home');
});

Route::get('services', [ServiceController::class, 'show'])->name('services');
Route::get('skills', [SkillsController::class, 'show'])->name('skills');
Route::get('home', [HomeController::class, 'show'])->name('home');
Route::get('contact', [ContactController::class, 'show'])->name('contact');


 