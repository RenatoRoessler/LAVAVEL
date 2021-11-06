<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->name('api.')->group(function(){
    Route::prefix('products')->group(function() {
        Route::get('/', [\App\Http\Controllers\Api\ProductController::class, 'index'])->name('index_products');
        Route::get('/{id}', [\App\Http\Controllers\Api\ProductController::class, 'show'])->name('single_products');
        Route::post('/', [\App\Http\Controllers\Api\ProductController::class, 'store'])->name('store_products');
        Route::put('/{id}', [\App\Http\Controllers\Api\ProductController::class, 'update'])->name('update_products');
        Route::delete('/{id}', [\App\Http\Controllers\Api\ProductController::class, 'delete'])->name('delete_products');
    });
});
