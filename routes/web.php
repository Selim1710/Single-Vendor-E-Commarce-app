<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashBoardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\subCategoryController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])->name('website.home');

Route::group(['prefix' => 'website'], function () {
    Route::get('/product/details', [HomeController::class, 'productDetails'])->name('website.product.details');
});


Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/manage/category',[CategoryController::class,'manageCategory'])->name('admin.manage.category');

    Route::get('/manage/subCategory',[subCategoryController::class,'manageSubCategory'])->name('admin.manage.subCategory');

    Route::get('/manage/product',[ProductController::class,'manageProduct'])->name('admin.manage.product');

    Route::get('/manage/stock',[StockController::class,'manageStock'])->name('admin.manage.stock');

});
