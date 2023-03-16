<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\storeController;
use App\Models\category;
use App\Http\Controllers\SocialController;

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

// ---------------------------------- >users routes<-------------------------------------//


route::get('/',[userController::class ,'index'])->name('home');
route::get('/trending_items',[userController::class ,'trending_item'])->name('trending_item');
Route::resource('store',userController::class);
route::get('/redirect',[userController::class ,'redicert'])->name('redirect');
route::get('/product_details/{id}',[userController::class ,'product_detail'])->name('product_details');
route::get('/search',[userController::class ,'search'])->name('search');

Route::middleware('auth')->group(function () {

    route::post('/add_cart/{product}',[userController::class ,'add_cart'])->name('add_cart');
    route::post('/delete_cart/{cart}',[userController::class ,'delete_cart'])->name('delete_cart');
    route::get('/my_cart',[userController::class ,'show_cart'])->name('show_cart');

    route::get('/add_watchlist/{product}',[userController::class ,'add_watchlist'])->name('add_watchlist');
    route::get('/show_watchlist',[userController::class ,'show_watchlist'])->name('show_watchlist');
    route::post('/delete_watchlist/{cart}',[userController::class ,'delete_cart'])->name('delete_watchlist');

    route::get('/cheakout',[userController::class ,'cheakout'])->name('cheakout');
    route::get('/get_order',[userController::class ,'cheakout'])->name('get_order');
    route::post('/add_order',[userController::class ,'add_order'])->name('add_order');
    route::get('/view_order/{order}',[userController::class ,'view_order'])->name('view_order');
    route::get('/show_orders',[userController::class ,'show_orders'])->name('show_orders');

});

// ---------------------------------- >admin routes<-------------------------------------//
Route::middleware(['auth', 'authadmin'])->group(function () {

    Route::get('/dashboard',[AdminController::class ,'dashboard'])->name('dashboard');
    route::get('dashborad/all_orders',[AdminController::class ,'all_orders'])->name('all_orders');
    Route::get('dashborad/change_to_delevary/{id}',[AdminController::class ,'update_orders'])->name('update_orders');
    Route::get('dashborad/category',[AdminController::class ,'view_category'])->name('view_category');
    Route::get('dashborad/users',[AdminController::class ,'get_users'])->name('view_users');
    Route::post('dashborad/add_user',[AdminController::class ,'add_user'])->name('add_user');
    Route::post('dashborad/edit_user',[AdminController::class ,'edit_user'])->name('edit_user');
    Route::post('dashborad/delete_user',[AdminController::class ,'delete_user'])->name('delete_user');
    Route::post('dashborad/add_category',[AdminController::class ,'add_category'])->name('add_category');
    Route::get('dashborad/delete_category/{id}',[AdminController::class ,'delete_category'])->name('delete_category');
    Route::post('dashborad/add_product',[AdminController::class ,'add_product'])->name('add_product');
    Route::get('dashborad/add_product',[AdminController::class ,'view_product'])->name('add_product_view');
    Route::get('dashborad/show_product',[AdminController::class ,'show_product'])->name('showProduct');
    Route::get('dashborad/show_product',[AdminController::class ,'show_product'])->name('showProduct');
    Route::get('dashborad/delete_product/{id}',[AdminController::class ,'delete_product'])->name('delete_product');
    Route::get('dashborad/update_product/{id}',[AdminController::class ,'update_product'])->name('update_product');
    Route::post('dashborad/confirm_edit_product/{id}',[AdminController::class ,'confirm_edit_product'])->name('confirm_edit_product');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
});

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('facebookRedirect');
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook'])->name('loginWithFacebook');




