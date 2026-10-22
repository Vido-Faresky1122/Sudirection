<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('landing')->middleware('auth');

Route::middleware('auth')->prefix('places')->name('places.')->group(function () {
    Route::get('/', [PlaceController::class, 'index'])->name('index');

    Route::get('/create', [PlaceController::class, 'create'])->name('create')->middleware('role:admin');

    Route::post('/store', [PlaceController::class, 'store'])->name('store')->middleware('role:admin');

    Route::get('/{id}', [PlaceController::class, 'show'])->name('show')->whereNumber('id');

    Route::get('/{id}/edit', [PlaceController::class, 'edit'])->name('edit')->whereNumber('id')->middleware('role:admin');

    Route::put('/{id}', [PlaceController::class, 'update'])->name('update')->whereNumber('id')->middleware('role:admin');

    Route::delete('/{id}', [PlaceController::class, 'destroy'])->name('destroy')->whereNumber('id')->middleware('role:admin');
});

Route::middleware('auth')->prefix('accommodations')->name('accommodations.')->group(function () {
    Route::get('/', [AccommodationController::class, 'index'])->name('index');

    Route::get('/create', [AccommodationController::class, 'create'])->name('create')->middleware('role:admin');

    Route::post('/store', [AccommodationController::class, 'store'])->name('store')->middleware('role:admin');

    Route::get('/{id}', [AccommodationController::class, 'show'])->name('show')->whereNumber('id');

    Route::get('/{id}/edit', [AccommodationController::class, 'edit'])->name('edit')->whereNumber('id')->middleware('role:admin');

    Route::put('/{id}', [AccommodationController::class, 'update'])->name('update')->whereNumber('id')->middleware('role:admin');

    Route::delete('/{id}', [AccommodationController::class, 'destroy'])->name('destroy')->whereNumber('id')->middleware('role:admin');
});

Route::middleware('auth')->get('/profile/user/{id}', [UserController::class, 'show'])->name('profile.users.index')->middleware('role:user');

Route::middleware('auth')->get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::middleware('auth')->get('/profile/admin', [AdminController::class, 'index'])->name('profile.admin')->middleware('role:admin');

Route::middleware('guest')->prefix('login')->name('login.')->group(function () {
    Route::get('/', [AuthController::class, 'loginView'])->name('view');

    Route::post('/', [AuthController::class, 'loginPost'])->name('post');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('guest')->prefix('register')->name('register.')->group(function () {
    Route::get('/', [AuthController::class, 'registerView'])->name('view');

    Route::post('/', [AuthController::class, 'registerPost'])->name('post');
});

Route::middleware('auth')->prefix('chat')->name('chat.')->group(function () {
    Route::get('/', [ChatController::class, 'index'])->name('index');

    Route::post('/send', [ChatController::class, 'sendMessage'])->name('send');
});