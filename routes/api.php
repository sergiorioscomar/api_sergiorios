<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

// Rutas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);

    //Route::get('/posts', [PostController::class, 'index']);    // GET lista
    //Route::get('/posts/{id}', [PostController::class, 'show']); // GET detalle
    //Route::post('/posts', [PostController::class, 'store']);   // POST crear
    //Route::put('/posts/{id}', [PostController::class, 'update']); // PUT actualizar
    //Route::delete('/posts/{id}', [PostController::class, 'destroy']); // DELETE eliminar
    Route::apiResource('posts', PostController::class); //Este reemplaza a todos los entpoints
});
