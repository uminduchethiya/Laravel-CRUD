<?php

use App\Http\Controllers\ProductControllers;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product',[ProductControllers::class,'index'])->name('product.index');
Route::get('/product/create',[ProductControllers::class,'create'])->name('product.create');
Route::post('/product',[ProductControllers::class,'store'])->name('product.store');
Route::get('/product/{product}/edit',[ProductControllers::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update',[ProductControllers::class,'update'])->name('product.update');
Route::delete('/product/{product}/destroy',[ProductControllers::class,'destroy'])->name('product.destroy');