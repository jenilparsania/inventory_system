<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories',App\Http\Controllers\CategoryController::class);

Route::get('/categories/delete/{id}',[App\Http\Controllers\CategoryController::class,'confirmDelete'])->name('categories.confirmDelete');


