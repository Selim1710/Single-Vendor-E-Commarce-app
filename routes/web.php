<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashBoardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])->name('website.home');

Route::group(['prefix' => 'website'], function () {
    Route::get('/product/details', [HomeController::class, 'productDetails'])->name('website.product.details');
});


Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/manage/category',[CategoryController::class,'manageCategory'])->name('admin.manage.category');
    Route::get('/add/category',[CategoryController::class,'addCategory'])->name('admin.add.category');
    Route::post('/store/category',[CategoryController::class,'store'])->name('admin.store.category');
    Route::get('/edit/category/{id}',[CategoryController::class,'editCategory'])->name('admin.edit.category');
    Route::post('/update/category/{id}',[CategoryController::class,'update'])->name('admin.update.category');
    Route::get('/delete/category/{id}',[CategoryController::class,'delete'])->name('admin.delete.category');

    Route::get('/manage/product',[ProductController::class,'manageProduct'])->name('admin.manage.product');
    Route::get('/add/product',[ProductController::class,'addProduct'])->name('admin.add.product');
    Route::get('/edit/product',[ProductController::class,'editProduct'])->name('admin.edit.product');

    Route::get('/manage/stock',[StockController::class,'manageStock'])->name('admin.manage.stock');
    Route::get('/add/stock',[StockController::class,'addStock'])->name('admin.add.stock');
    Route::get('/edit/stock',[StockController::class,'editStock'])->name('admin.edit.stock');

    Route::get('/manage/subCategory',[SubCategoryController::class,'manageSubCategory'])->name('admin.manage.subCategory');
    Route::get('/add/subCategory',[SubCategoryController::class,'addSubCategory'])->name('admin.add.subCategory');
    Route::get('/edit/subCategory',[SubCategoryController::class,'editSubCategory'])->name('admin.edit.subCategory');

    Route::get('/manage/order',[OrderController::class,'manageOrder'])->name('admin.manage.order');

    Route::get('/manage/customer',[CustomerController::class,'manageCustomer'])->name('admin.manage.customer');

    Route::get('/view/report',[ReportController::class,'viewReport'])->name('admin.view.report');

});
