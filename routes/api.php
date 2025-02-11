<?php
use App\Http\Controllers\Api\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\SlidesController;

/** ---------Register and Login ----------- */
Route::controller(RegisterController::class)->group(function()
{
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('verify-email', 'verifyEmail'); // ✅ إضافة API التحقق من البريد الإلكتروني
});

/** -----------Users --------------------- */
Route::middleware('auth:sanctum')->group(function() {
    Route::get('/users',[RegisterController::class,'index'])->name('index');
});

/** -----------Products, Categories, and Slides --------------------- */
Route::group(['middleware' => 'api'],function(){
    Route::get('get-all-products',[ProductsController::class,'index']);
    Route::get('get-all-categories',[CategoriesController::class,'index']);
    Route::get('get-all-slides',[SlidesController::class,'index']);
});
