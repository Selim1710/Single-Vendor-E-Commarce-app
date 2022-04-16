<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashBoardController;
use App\Http\Controllers\Backend\LaptopDealsController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\OfferController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\UserController;
use Illuminate\Support\Facades\Route;





// Website Part
Route::get('/', [HomeController::class, 'home'])->name('website.home');

Route::group(['prefix' => 'website'], function () {

    // offers
    Route::get('/offers', [HomeController::class, 'offers'])->name('website.offers');
    Route::get('/offer/details/{id}', [HomeController::class, 'offerDetails'])->name('website.offer.details');

    // laptop deals
    Route::get('/laptop/deals', [HomeController::class, 'laptopDeals'])->name('website.laptop.deals');

    // login
    Route::get('/login/form', [UserController::class, 'loginForm'])->name('users.login.form');
    Route::post('/user/do/login', [UserController::class, 'doLogin'])->name('user.do.login');
    Route::get('/registration/form', [UserController::class, 'registrationForm'])->name('user.registration.form');
    Route::post('/user/do/registration', [UserController::class, 'doRegistration'])->name('user.do.registration');
    Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');

    // user profile
    Route::get('/user/profile/{id}', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/user/edit/profile/{id}', [UserController::class, 'edit'])->name('user.edit.profile');
    Route::post('/user/update/profile/{id}', [UserController::class, 'updateProfile'])->name('user.update.profile');

    // product details
    Route::get('/product/details/{id}', [HomeController::class, 'productDetails'])->name('website.product.details');
    Route::get('/user/compare/product', [HomeController::class, 'compareProduct'])->name('user.compare.product');

    Route::group(['middleware' => 'check_customer'], function () {
        // add to cart
        Route::get('/add/to/cart/{id}', [HomeController::class, 'cart'])->name('add.to.cart');
        Route::get('/clear/cart', [HomeController::class, 'clearCart'])->name('clear.cart');

    });

    // footer
    Route::get('/user/refund/policy', [HomeController::class, 'refundPolicy'])->name('user.refund.policy');
    Route::get('/user/terms/and/conditions', [HomeController::class, 'termsConditions'])->name('user.terms.&.conditions');
});



// Admin Part
Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name('admin.dashboard');

    // Category
    Route::get('/manage/category', [CategoryController::class, 'manageCategory'])->name('admin.manage.category');
    Route::get('/add/category', [CategoryController::class, 'addCategory'])->name('admin.add.category');
    Route::post('/store/category', [CategoryController::class, 'store'])->name('admin.store.category');
    Route::get('/edit/category/{id}', [CategoryController::class, 'editCategory'])->name('admin.edit.category');
    Route::post('/update/category/{id}', [CategoryController::class, 'update'])->name('admin.update.category');
    Route::get('/delete/category/{id}', [CategoryController::class, 'delete'])->name('admin.delete.category');

    // Sub-Category
    Route::get('/manage/subCategory', [SubCategoryController::class, 'manageSubCategory'])->name('admin.manage.subCategory');
    Route::get('/add/subCategory', [SubCategoryController::class, 'addSubCategory'])->name('admin.add.subCategory');
    Route::post('/store/subCategory', [SubCategoryController::class, 'store'])->name('admin.store.subCategory');
    Route::get('/edit/subCategory/{id}', [SubCategoryController::class, 'edit'])->name('admin.edit.subCategory');
    Route::post('/update/subCategory/{id}', [SubCategoryController::class, 'update'])->name('admin.update.subCategory');
    Route::get('/delete/subCategory/{id}', [SubCategoryController::class, 'delete'])->name('admin.delete.subCategory');

    // Product
    Route::get('/manage/product', [ProductController::class, 'manageProduct'])->name('admin.manage.product');
    Route::get('/add/product', [ProductController::class, 'add'])->name('admin.add.product');
    Route::post('/store/product', [ProductController::class, 'store'])->name('admin.store.product');
    Route::get('/edit/product/{id}', [ProductController::class, 'edit'])->name('admin.edit.product');
    Route::post('/update/product/{id}', [ProductController::class, 'update'])->name('admin.update.product');
    Route::get('/delete/product/{id}', [ProductController::class, 'delete'])->name('admin.delete.product');
    Route::get('/view/product/image/{id}', [ProductController::class, 'view'])->name('admin.view.product');
    Route::post('/change/product/image/{id}', [ProductController::class, 'change'])->name('admin.change.product.image');

    // Stock
    Route::get('/manage/stock', [StockController::class, 'manageStock'])->name('admin.manage.stock');
    Route::get('/add/stock', [StockController::class, 'add'])->name('admin.add.stock');
    Route::post('/store/stock', [StockController::class, 'store'])->name('admin.store.stock');
    Route::get('/edit/stock/{id}', [StockController::class, 'edit'])->name('admin.edit.stock');
    Route::post('/update/stock/{id}', [StockController::class, 'update'])->name('admin.update.stock');
    Route::get('/delete/stock/{id}', [StockController::class, 'delete'])->name('admin.delete.stock');

    // Offer
    Route::get('/manage/offer', [OfferController::class, 'manageOffer'])->name('admin.manage.offer');
    Route::get('/add/offer', [OfferController::class, 'add'])->name('admin.add.offer');
    Route::post('/store/offer', [OfferController::class, 'store'])->name('admin.store.offer');
    Route::get('/view/offer/{id}', [OfferController::class, 'viewOffer'])->name('admin.view.offer');
    Route::post('/change/offer/image/{id}', [OfferController::class, 'change'])->name('admin.change.offer.image');
    Route::get('/edit/offer/{id}', [OfferController::class, 'edit'])->name('admin.edit.offer');
    Route::post('/update/offer/{id}', [OfferController::class, 'update'])->name('admin.update.offer');
    Route::get('/delete/offer/{id}', [OfferController::class, 'delete'])->name('admin.delete.offer');

    // laptop deals
    Route::get('/manage/laptop/deals', [LaptopDealsController::class, 'manageLaptopDeal'])->name('admin.manage.laptop.deals');
    Route::get('/add/laptop/deals', [LaptopDealsController::class, 'add'])->name('admin.add.deals');
    Route::post('/store/deals', [LaptopDealsController::class, 'store'])->name('admin.store.deals');
    Route::get('/edit/deals/{id}', [LaptopDealsController::class, 'edit'])->name('admin.edit.deals');
    Route::post('/update/deals/{id}', [LaptopDealsController::class, 'update'])->name('admin.update.deals');
    Route::get('/delete/deals/{id}', [LaptopDealsController::class, 'delete'])->name('admin.delete.deals');
    Route::get('/view/deals/image/{id}', [LaptopDealsController::class, 'view'])->name('admin.view.deals.image');
    Route::post('/change/deals/image/{id}', [LaptopDealsController::class, 'change'])->name('admin.change.deals.image');



    // Order List
    Route::get('/manage/order', [OrderController::class, 'manageOrder'])->name('admin.manage.order');

    // Customer List
    Route::get('/manage/customer', [CustomerController::class, 'manageCustomer'])->name('admin.manage.customer');

    // Company Report
    Route::get('/view/report', [ReportController::class, 'viewReport'])->name('admin.view.report');
});
