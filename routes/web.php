<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengadaanController;

Route::get('/', [IndexController::class, 'index'])->name('home');

// Halaman Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
// route CRUD buku
Route::get('/admin/buku/create', [AdminController::class, 'createBook'])->name('admin.book.create');
Route::post('/admin/buku/store', [AdminController::class, 'storeBook'])->name('admin.book.store');
Route::post('/admin/buku/update/{id}', [AdminController::class, 'updateBook'])->name('admin.book.update');
Route::get('/admin/buku/destroy/{id}', [AdminController::class, 'destroyBook'])->name('admin.book.destroy');
Route::get('/admin/book/{id}/edit', [AdminController::class, 'edit'])->name('admin.book.edit');
Route::put('/admin/book/{id}', [AdminController::class, 'update'])->name('admin.book.update');

// Halaman Tambah Penerbit
Route::get('/admin/penerbit/create', [AdminController::class, 'createPublisher'])->name('admin.publisher.create');
Route::post('/admin/penerbit/store', [AdminController::class, 'storePublisher'])->name('admin.publisher.store');
Route::get('/admin/penerbit/edit/{id}', [AdminController::class, 'editPublisher'])->name('admin.publisher.edit');
Route::post('/admin/penerbit/update/{id}', [AdminController::class, 'updatePublisher'])->name('admin.publisher.update');
Route::get('/admin/penerbit/destroy/{id}', [AdminController::class, 'destroyPublisher'])->name('admin.publisher.destroy');
Route::get('/admin/publisher/{id}/edit', [AdminController::class, 'editPublisher'])->name('admin.publisher.edit');
Route::put('/admin/publisher/{id}', [AdminController::class, 'updatePublisher'])->name('admin.publisher.update');


// Halaman Pengadaan
Route::get('/pengadaan', [PengadaanController::class, 'index'])->name('pengadaan.index');
