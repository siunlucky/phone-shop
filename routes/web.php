<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


Route::get('/', [ItemController::class, 'index']);
Route::get('/detail/{item:id}', [ItemController::class, 'show']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/form-product', [AdminController::class, 'create']);
Route::post('/admin/form-product/store', [AdminController::class, 'store']);

Route::get('/admin/edit-product/{item:id}', [AdminController::class, 'edit']);
Route::post('/admin/edit-product/update/{item:id}', [AdminController::class, 'update']);

Route::get('/admin/destroy/{item:id}', [AdminController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register/store', [RegisterController::class, 'store']);

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
