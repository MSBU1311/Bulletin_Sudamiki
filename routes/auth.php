<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Login\LoginController;


Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('registerView');

    Route::post('register', [RegisteredUserController::class, 'store'])->name('registerPost');

    Route::get('/auth/login', [LoginController::class, 'create'])
            ->name('loginView');

    Route::post('/auth/login', [LoginController::class, 'store'])->name('loginPost');
});
