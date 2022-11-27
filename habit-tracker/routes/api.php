<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionsController;

//Route::resource('products', ProductController::class);

//PUBLIC ROUTES
Route::get('/products', [ProductController::class, 'index']);
Route::get('products/search/{name}', [ProductController::class, 'search']);
Route::get('/show-products/{id}', [ProductController::class, 'show']);
Route::post('/new', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/bank', [TransactionsController::class, 'getTransaction']);


//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);


});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
