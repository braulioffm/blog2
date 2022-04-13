<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

//Crear 7 rutas de crud: php artisan make:controller Admin/CategoryController -r
Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('tags', TagController::class)->names('admin.tags');