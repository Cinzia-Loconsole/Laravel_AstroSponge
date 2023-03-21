<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//PUBLIC CONTROLLER
Route::get('/', [PublicController::class,'home'])->name('home');
Route::get('/contact-us', [PublicController::class,'contactUs'])->name('contactUs');
Route::post('/contact-submit', [PublicController::class, 'contactSubmit'])->name('contactSubmit');

// PRODUCT CONTROLLER
Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/product-detail/{id}' , [ProductController::class, 'show'])->name('productDetails');

// ABOUT CONTROLLER
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about-detail/{id}' , [AboutController::class, 'show'])->name('aboutDetails');


// ELEMENT CONTROLLER
Route::get('/create-prod', [ElementController::class, 'create'])->name('createElement');
Route::post('/store-prod', [ElementController::class, 'store'])->name('storeElement');
Route::get('/index-prod', [ElementController::class, 'index'])->name('indexElement');
Route::get('/show-prod/{element}', [ElementController::class, 'show'])->name('showElement');


