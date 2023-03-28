<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LoginController;
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
})->name('login');
Route::post('/admin/login/authenticate', [LoginController::class,'login'])->name('admin.login.authenticate');

//Admin
Route::group([
    'namespace'=>'Admin',
    'prefix'=>'admin'
],function(){
Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
Route::get('/categories',[CategoryController::class, 'index'])->name('admin.categories.list');
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
