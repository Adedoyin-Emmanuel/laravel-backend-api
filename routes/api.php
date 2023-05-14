<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/product/all', [ProductController::class, 'getAllProducts']);

Route::post("/product/create", [ProductController::class, 'create']);

Route::delete("/product/delete/{id}", [ProductController::class, 'delete']);
