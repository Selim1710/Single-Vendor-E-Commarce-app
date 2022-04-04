<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashBoardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Website\OfferController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\UserController;
use Illuminate\Support\Facades\Route;





// Website Part
Route::get('/', [HomeController::class, 'home'])->name('website.home');




Route::group(['prefix' => 'website'], function () {

    // login
    Route::get('/login/form', [UserController::class, 'loginForm'])->name('users.login.form');
    Route::get('/registration/form', [UserController::class, 'registrationForm'])->name('user.registration.form');

    // offers
    Route::get('/offers', [HomeController::class, 'offers'])->name('website.offers');
    Route::get('/offer/details', [HomeController::class, 'offerDetails'])->name('website.offer.details');

    // product details
    Route::get('/product/details/{id}', [HomeController::class, 'productDetails'])->name('website.product.details');
    Route::get('/user/compare/product', [HomeController::class, 'compareProduct'])->name('user.compare.product');

});



// Admin Part
Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name('admin.dashboard');

    // Category
    Route::get('/manage/category',[CategoryController::class,'manageCategory'])->name('admin.manage.category');
    Route::get('/add/category',[CategoryController::class,'addCategory'])->name('admin.add.category');
    Route::post('/store/category',[CategoryController::class,'store'])->name('admin.store.category');
    Route::get('/edit/category/{id}',[CategoryController::class,'editCategory'])->name('admin.edit.category');
    Route::post('/update/category/{id}',[CategoryController::class,'update'])->name('admin.update.category');
    Route::get('/delete/category/{id}',[CategoryController::class,'delete'])->name('admin.delete.category');

    // Sub-Category
    Route::get('/manage/subCategory',[SubCategoryController::class,'manageSubCategory'])->name('admin.manage.subCategory');
    Route::get('/add/subCategory',[SubCategoryController::class,'addSubCategory'])->name('admin.add.subCategory');
    Route::post('/store/subCategory',[SubCategoryController::class,'store'])->name('admin.store.subCategory');
    Route::get('/edit/subCategory/{id}',[SubCategoryController::class,'edit'])->name('admin.edit.subCategory');
    Route::post('/update/subCategory/{id}',[SubCategoryController::class,'update'])->name('admin.update.subCategory');
    Route::get('/delete/subCategory/{id}',[SubCategoryController::class,'delete'])->name('admin.delete.subCategory');

    // Product
    Route::get('/manage/product',[ProductController::class,'manageProduct'])->name('admin.manage.product');
    Route::get('/add/product',[ProductController::class,'add'])->name('admin.add.product');
    Route::post('/store/product',[ProductController::class,'store'])->name('admin.store.product');
    Route::get('/edit/product/{id}',[ProductController::class,'edit'])->name('admin.edit.product');
    Route::post('/update/product/{id}',[ProductController::class,'update'])->name('admin.update.product');
    Route::get('/delete/product/{id}',[ProductController::class,'delete'])->name('admin.delete.product');
    Route::get('/view/product/image/{id}',[ProductController::class,'view'])->name('admin.view.product');
    Route::post('/change/product/image/{id}',[ProductController::class,'change'])->name('admin.change.product.image');

    // Stock
    Route::get('/manage/stock',[StockController::class,'manageStock'])->name('admin.manage.stock');
    Route::get('/add/stock',[StockController::class,'add'])->name('admin.add.stock');
    Route::post('/store/stock',[StockController::class,'store'])->name('admin.store.stock');
    Route::get('/edit/stock/{id}',[StockController::class,'edit'])->name('admin.edit.stock');
    Route::post('/update/stock/{id}',[StockController::class,'update'])->name('admin.update.stock');
    Route::get('/delete/stock/{id}',[StockController::class,'delete'])->name('admin.delete.stock');
   
    // Offer
    Route::get('/manage/offer',[OfferController::class,'manageOffer'])->name('admin.manage.offer');
    Route::get('/add/offer',[OfferController::class,'add'])->name('admin.add.offer');

    // Order List
    Route::get('/manage/order',[OrderController::class,'manageOrder'])->name('admin.manage.order');

    // Customer List
    Route::get('/manage/customer',[CustomerController::class,'manageCustomer'])->name('admin.manage.customer');

    // Company Report
    Route::get('/view/report',[ReportController::class,'viewReport'])->name('admin.view.report');

});
