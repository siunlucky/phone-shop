<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AdminController;

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
Route::post('/admin/edit-product/update', [AdminController::class, 'update']);


Route::get('/admin/destroy/{item:id}', [AdminController::class, 'destroy']);
