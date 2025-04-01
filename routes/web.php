<?php

use App\Http\Controllers\BebelaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/produtos/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/produtos/criar', [ProductController::class, 'create'])->name('products.create');
Route::post('/produtos', [ProductController::class, 'store'])->name('products.store');
Route::get('/produtos/{id}/editar', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/produtos/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/produtos/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
Route::get('/usuarios/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/usuarios/criar', [UserController::class, 'create'])->name('users.create');
Route::post('/usuarios', [UserController::class, 'store'])->name('users.store');
Route::get('/usuarios/{id}/editar', [UserController::class, 'edit'])->name('users.edit');
Route::put('/usuarios/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/categorias', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categorias/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categorias/criar', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categorias', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categorias/{id}/editar', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categorias/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categorias/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/bebelas', [BebelaController::class, 'index'])->name('bebelas.index');
Route::get('/bebelas/{id}', [BebelaController::class, 'show'])->name('bebelas.show');
Route::get('/bebelas/criar', [BebelaController::class, 'create'])->name('bebelas.create');
Route::post('/bebelas', [BebelaController::class, 'store'])->name('bebelas.store');
Route::get('/bebelas/{id}/editar', [BebelaController::class, 'edit'])->name('bebelas.edit');
Route::put('/bebelas/{id}', [BebelaController::class, 'update'])->name('bebelas.update');
Route::delete('/bebelas/{id}', [BebelaController::class, 'destroy'])->name('bebelas.destroy');;;



