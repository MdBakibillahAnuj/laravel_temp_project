<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Font\HomeController;
use App\Http\Controllers\Font\ContactController;
use App\Http\Controllers\Font\ProductsController;
use App\Http\Controllers\Font\SingleProductController;
use App\Http\Controllers\Font\AboutController;


Route::get( '/',[HomeController::class, 'index'])->name('index');
Route::get( '/about',[AboutController::class, 'about'])->name('about');
Route::get( '/contact',[ContactController::class, 'contact'])->name('contact');
Route::get( '/products',[ProductsController::class, 'products'])->name('products');
Route::get( '/single-product',[SingleProductController::class, 'single-product']);

