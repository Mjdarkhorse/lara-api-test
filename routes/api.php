<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


use App\Http\Controllers\Api\ProductController;

Route::get('/products', [ProductController::class, 'index']);     // All
Route::post('/products', [ProductController::class, 'store']);    // Create
Route::get('/products/{id}', [ProductController::class, 'show']); // Single
Route::put('/products/{id}', [ProductController::class, 'update']); // Update
Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Delete

