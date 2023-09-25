<?php

use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\OfficeBoyAuthController;
use App\Http\Controllers\OfficeboyController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('employee/login', [EmployeeAuthController::class, 'loginEmployee']);
Route::post('officeBoy/login', [OfficeBoyAuthController::class, 'loginOfficeBoy']);
Route::get('employee/profile', [EmployeeAuthController::class, 'EmployeeProfile']);
Route::get('officeBoy/profile', [OfficeBoyAuthController::class, 'officeBoyProfile']);


Route::get('product/getProduct/{product_id}', [ProductController::class, 'getProduct']);
Route::get('product/getAllProducts', [ProductController::class, 'getAllProducts']);
Route::get('product/getAllProductsInCategory/{category_id}', [ProductController::class, 'getAllProductsInCategory']);


