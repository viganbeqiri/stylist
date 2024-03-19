<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\FrontendController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index']);
Route::get('/product-{product_id}', [FrontendController::class, 'productView'])->name('product-details');
Route::get('/products', [FrontendController::class, 'productIndex'])->name('products');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('customer.dashboard')->middleware('user');
Route::middleware('auth')->group(function () {

    Route::get('/cart-list', [CartController::class, 'cartList'])->name('cart-list');
    Route::post('/cart', [CartController::class, 'addToCart'])->name('add-to-cart');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::post('/create-order', [CartController::class, 'createOrder'])->name('create-order');
    Route::post('/update-cart/{id}', [CartController::class, 'updateCart'])->name('update-cart');
    Route::get('/cart/delete/{id}', [CartController::class, 'deleteCart'])->name('delete-cart');
});


Route::prefix('admin')->middleware('is_admin')->group(function () {
    Route::get('home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/{id}/update', [ProductController::class, 'update'])->name('product.update');
        Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::post('/{id}/update', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });

    Route::group(['prefix' => 'tag'], function () {
        Route::get('/', [TagController::class, 'index'])->name('tag.index');
        Route::get('/create', [TagController::class, 'create'])->name('tag.create');
        Route::post('/store', [TagController::class, 'store'])->name('tag.store');
        Route::get('/show/{id}', [TagController::class, 'edit'])->name('tag.show');
        Route::post('/{id}/update', [TagController::class, 'update'])->name('tag.update');
        Route::get('/destroy/{id}', [TagController::class, 'destroy'])->name('tag.destroy');
    });

    Route::group(['prifix' => 'slider'], function () {
        Route::get('/', [SliderController::class, 'index'])->name('slider.index');
        Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/show/{id}', [SliderController::class, 'edit'])->name('slider.show');
        Route::post('/{id}/update', [SliderController::class, 'update'])->name('slider.update');
        Route::get('/destroy/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');
    });

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/show/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::get('/order-list', [CartController::class, 'orderList'])->name('order-list');
});
