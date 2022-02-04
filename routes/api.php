<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// get all stocks
Route::get('/stocks', [StockController::class, 'index']);
// create new stock item
Route::post('/stocks/create', [StockController::class, 'store']);

// get all orders
Route::get('/orders', [OrderController::class, 'index']);
//create new order input
Route::post('/orders/create', [OrderController::class, 'store']);
