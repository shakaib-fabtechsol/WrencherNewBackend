<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusinessUserController;
use App\Http\Controllers\CommenController;
Route::controller(CommenController::class)->group(function () {
    Route::post('UpdateUserProfile', 'UpdateProfile')->name('UpdateUserProfile');       
});
Route::controller(AuthController::class)->group(function () {
    Route::post('UserLogin', 'ProcessLogin')->name('UserLogin');
    Route::post('UserSignup', 'ProcessSignup')->name('UserSignup');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(BusinessUserController::class)->group(function () {
        Route::get('test', 'test')->name('test');
    });

});