<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('auth/login');
})->name('home');

Route::middleware(['auth'])->group(function () {

    Route::resource('users', UserController::class);

    Route::resource('customers', CustomerController::class)->only('index');

    Route::get('categories/checkDuplicate', [CategoryController::class, 'checkDuplicate']);
    Route::resource('categories', CategoryController::class);

    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    // Route::resource('/api/roles', RoleController::class)->only('index');
});


require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
