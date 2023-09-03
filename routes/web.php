<?php

use App\Http\Controllers\AccountPagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\Backend\ProductController;

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

// Product Route
Route::group(['prefix' => '/product'], function(){
    Route::get('/manage', [ProductController::class, 'index'])->name('product.manage');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update{id}', [ProductController::class, 'update'])->name('product.update');
    Route::post('/destroy/{id}',[ProductController::class, 'destroy'])->name('product.destroy');
});
Route::get('/index-2', function () {
    return view('pages.index-2');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/cart', function () {
    return view('pages.cart');
});
Route::get('/grocery', function () {
    return view('pages.grocery');
});
Route::get('/shop', function () {
    return view('pages.shop');
});
Route::get('/checkout', function () {
    return view('pages.checkout');
});
Route::get('/shop-details', function () {
    return view('pages.shop-details');
});

Route::get('/terms-conditions', function () {
    return view('pages.terms-conditions');
});
Route::get('/404', function () {
    return view('pages.404');
});


Route::get('/admin/dashboard',[MainPagesController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/account',[AccountPagesController::class, 'account'])->name('admin.account');
Route::post('/process-register',[AccountPagesController::class, 'processRegistration'])->name('account.processRegistration');
Route::get('admin/register/list', [AccountPagesController::class, 'list'])->name('admin.register.list');
Route::post('admin/register/store', [AccountPagesController::class, 'store'])->name('admin.register.store');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
