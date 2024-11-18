<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories',App\Http\Controllers\CategoryController::class);

Route::resource('items',ItemController::class);

// writing all the paths for the categories 

Route::get('/categories/delete/{id}',[App\Http\Controllers\CategoryController::class,'confirmDelete'])->name('categories.confirmDelete');
// Route::post('/categories',[CategoryController::class,'store'])->name('categories.store'); 
// Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');    when I uncommented this it ran hahahah
// Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/{id}/edit',[CategoryController::class,'edit'])->name('categories.edit');
Route::patch('/categories/{id}',[CategoryController::class,'update'])->name('categories.update');



