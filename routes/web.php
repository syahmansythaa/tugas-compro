<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/blog',[BlogController::class,'index'])->name('blog'); 
Route::get('/blog/detail',[BlogController::class,'detail'])->name('blogdetail');
Route::get('/slider',[HomeController::class,'index'])->name('slider');
Route::get('/service',[HomeController::class,'index'])->name('service');

Route::get('/blogdetail',[BlogDetailController::class,'index'])->name('BlogDetail.index');
