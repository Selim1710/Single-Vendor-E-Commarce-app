<?php

use App\Http\Controllers\Backend\DashBoardController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])->name('website.home');

Route::group(['prefix' => 'website'], function () {

    Route::get('/product/details', [HomeController::class, 'productDetails'])->name('website.product.details');
    
});


Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name('admin.dashboard');

});
