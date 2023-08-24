<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UserActivateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {

    Route::middleware(['guest'])->group(function () {
        Route::get('login', [LoginController::class, 'loginView'])->name('login-view');
        Route::post('login', [LoginController::class, 'loginAction'])->name('login-action');
        Route::get('register-member', [RegisterController::class, 'memberRegisterView'])->name('register-member-view');
        Route::post('register-member', [RegisterController::class, 'memberRegisterAction'])->name('register-member.action');
        Route::get('register-customer', [RegisterController::class, 'customerRegisterView'])->name('register-customer-view');
        Route::post('register-customer', [RegisterController::class, 'customerRegisterAction'])->name('register-customer.action');

        Route::get('{token}/{user_id}/activate', [UserActivateController::class, 'userActivation'])->name('user-activation');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('logout', [LogoutController::class, 'logoutAction'])->name('logout-action');
    });

});
