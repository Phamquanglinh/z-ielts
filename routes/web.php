<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\IndexController::class,'render'])->name('index');
Route::get('/about',[\App\Http\Controllers\About::class,'render'])->name('about');
Route::get('/course',[\App\Http\Controllers\Frontend\ProductController::class,'index'])->name('course');
Route::get('/detail/{slug}',[\App\Http\Controllers\Frontend\DetailController::class,'index','slug'])->where(['slug'])->name('detail');
Route::get('/page/{slug}',[\App\Http\Controllers\PageController::class,'index','slug'])->where(['slug'])->name('page');
