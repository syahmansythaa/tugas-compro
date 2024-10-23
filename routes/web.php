<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\backend\BlogController as BackendBlogController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\backend\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'blogdetail'])->name('blogdetail');
//backend
Route::get('backend/login',[LoginController::class,'index'])->name('backend.login');
Route::get('backend/blog',[BackendBlogController::class,'index'])->name('backend.blog');
Route::get('backend/slider',[SliderController::class,'index'])->name('backend.slider');
Route::get('backend/layanan',[ServicesController::class,'index'])->name('backend.service');

Route::get('backend/services/tambah',[ServiceController::class,'tambah'])->name('backend.services.tambah');
Route::get('backend/blog/tambah',[BackendBlogController::class,'tambah'])->name('backend.blog.tambah');
Route::post('backend/blog/aksi_tambah',[BackendBlogController::class,'aksi_tambah'])->name('backend.blog.aksi_tambah');
 // route edit blog
Route::get('backend/blog/edit/{id}',[BackendBlogController::class,'edit'])->name('backend.blog.edit');
Route::post('backend/blog/aksi_edit/{id}',[BackendBlogController::class,'aksi_edit'])->name('backend.blog.aksi_edit');

Route::get('backend/sliders/tambah',[SliderController::class,'tambah'])->name('backend.sliders.tambah');