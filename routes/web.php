<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProductCategoryController;
use App\Http\Controllers\User\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

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

//Admin auth
Route::get('/admin/login', function () {
    return view('admin.auth.login');
})->name('admin.login')->middleware('block.admin.login');
Route::post('/admin/login/authenticate', [LoginController::class,'login'])->name('admin.login.authenticate');
Route::get('/admin/logout', [LogoutController::class,'logoutAdmin'])->name('admin.logout');

//User auth
Route::get('/login', function () {
    return view('user.auth.login');
})->name('user.login');
Route::get('/register', function () {
    return view('user.auth.register');
})->name('user.register');
Route::post('/login/authenticate', [LoginController::class,'loginUser'])->name('user.login.authenticate');
Route::post('/register/authenticate', [RegisterController::class,'registerUser'])->name('user.register.authenticate');


//Admin
Route::group([
    'namespace'=>'Admin',
    'prefix'=>'admin',
    'middleware' =>['admin','preventBackHistory'],
],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    //Danh mục
    Route::prefix('categories')->name('admin.categories.')->group(function () {
        Route::get('/',[CategoryController::class,'index'])->name('list');
        Route::get('/create',[CategoryController::class,'create'])->name('create');
        Route::post('/store',[CategoryController::class,'store'])->name('store');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('update');
        Route::delete('/{id}',[CategoryController::class,'delete'])->name('delete');
    });

    //Nhãn hiệu
    Route::prefix('brands')->name('admin.brands.')->group(function () {
        Route::get('/',[BrandController::class,'index'])->name('list');
        Route::get('/create',[BrandController::class,'create'])->name('create');
        Route::post('/store',[BrandController::class,'store'])->name('store');
        Route::get('/edit/{id}',[BrandController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[BrandController::class,'update'])->name('update');
        Route::delete('/{id}',[BrandController::class,'delete'])->name('delete');
    });
});


//User
Route::group([
    'namespace'=>'User',
],function(){
    Route::get('/',[HomeController::class,'index'])->name('user.home');
    Route::get('/product-category',[ProductCategoryController::class,'index'])->name('user.category');
    Route::get('/product-detail',[ProductController::class,'detail'])->name('user.product.detail');
    Route::get('/checkout',[CheckoutController::class,'index'])->name('user.checkout');
    Route::get('/card',[CartController::class,'index'])->name('user.cart');
    Route::get('/contact',function () {
        return view('user.contact.contact');
    })->name('user.contact');
});
