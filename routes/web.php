<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use\Http\Controllers\CustomerController;
use\Http\Controllers\FactoryControllers;
use\Http\Controllers\ArticleControllers;
use\Http\Controllers\ShippingAdressControllers;
use\Http\Controllers\OrderControllers;
use\Http\Controllers\OrderLIneControllers;
use\Http\Controllers\FactoryArticleControllers;





Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified', 'prevent-back-history'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::resource('customer', customerController::class);

Route::resource('factory', factoryController::class);

Route::resource('article', articleController::class);

Route::resource('shippingaddress', shippingaddressController::class);

Route::resource('order', orderController::class);

Route::resource('orderline', orderlineController::class);

Route::resource('factoryarticle', factoryarticleController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
