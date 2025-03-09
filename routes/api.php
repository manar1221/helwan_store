<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\CategoriesController;

/** ---------Register and Login ----------- */
Route::controller(RegisterController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('verify-email', 'verifyEmail');
    Route::post('resend-verification-code', [RegisterController::class, 'resendVerificationCode']);
});
// -----------Forgot Password -----------
Route::controller(ForgotPasswordController::class)->group(function () {
    Route::post('forgot-password', 'sendResetCode');
    Route::post('verify-reset-code', 'verifyResetCode');
    Route::post('reset-password', 'resetPassword');
});

/** -----------Users --------------------- */
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [RegisterController::class, 'index'])->name('index');
});

/** -----------Products, Categories, and Slides --------------------- */
Route::post('get-all-categories', [CategoriesController::class, 'getAllCategories']);
Route::post('search-product', [ProductsController::class, 'searchProduct']);
Route::post('get-products-by-category', [ProductsController::class, 'getProductsByCategory']);
// -----------Home Data ---------------------
Route::post('home-data', [HomeController::class, 'getHomeData']);
