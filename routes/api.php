<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusinessUserController;


Route::controller(AuthController::class)->group(function () {
    Route::post('ProcessLogin', 'ProcessLogin')->name('ProcessLogin');
    Route::post('ProcessSignup', 'ProcessSignup')->name('ProcessSignup');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(BusinessUserController::class)->group(function () {
        Route::get('test', 'test')->name('test');
    });

});