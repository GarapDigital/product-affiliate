<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {

    Route::middleware(['guest'])->group(function () {
        Route::get('login', [LoginController::class, 'loginView'])->name('login-view');
        Route::get('register-member', [RegisterController::class, 'memberRegisterView'])->name('register-member-view');
        Route::get('register-customer', [RegisterController::class, 'customerRegisterView'])->name('register-customer-view');
    });

});
