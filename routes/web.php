<?php

use App\Http\Controllers\BebelaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/produtos', [ProductController::class, 'index']);
Route::get('/produtos/{id}', [ProductController::class, 'show']);
Route::get('/produtos/criar', [ProductController::class, 'create']);
Route::post('/produtos', [ProductController::class, 'store']);
Route::get('/produtos/{id}/editar', [ProductController::class, 'edit']);
Route::put('/produtos/{id}', [ProductController::class, 'update']);
Route::delete('/produtos/{id}', [ProductController::class, 'destroy']);

Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/usuarios/{id}', [UserController::class, 'show']);
Route::get('/usuarios/criar', [UserController::class, 'create']);
Route::post('/usuarios', [UserController::class, 'store']);
Route::get('/usuarios/{id}/editar', [UserController::class, 'edit']);
Route::put('/usuarios/{id}', [UserController::class, 'update']);
Route::delete('/usuarios/{id}', [UserController::class, 'destroy']);

Route::get('/outros', [BebelaController::class, 'index']);
Route::get('/outros/{id}', [BebelaController::class, 'show']);
Route::get('/outros/criar', [BebelaController::class, 'create']);
Route::post('/outros', [BebelaController::class, 'store']);
Route::get('/outros/{id}/editar', [BebelaController::class, 'edit']);
Route::put('/outros/{id}', [BebelaController::class, 'update']);
Route::delete('/outros/{id}', [BebelaController::class, 'destroy']);

