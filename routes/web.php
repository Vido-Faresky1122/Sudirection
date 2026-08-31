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

Route::get('/', function () {
    return view('landing');
});

Route::prefix('places')->name('places.')->group(function () {
    Route::get('/', [PlaceController::class, 'index'])->name('index');

    Route::get('/create', [PlaceController::class, 'create'])->name('create');

    Route::post('/store', [PlaceController::class, 'store'])->name('store');

    Route::get('/{id}', [PlaceController::class, 'show'])->name('show')->whereNumber('id');

    Route::get('/{id}/edit', [PlaceController::class, 'edit'])->name('edit')->whereNumber('id');

    Route::put('/{id}', [PlaceController::class, 'update'])->name('update')->whereNumber('id');

    Route::delete('/{id}', [PlaceController::class, 'destroy'])->name('destroy')->whereNumber('id');
});

Route::prefix('accommodations')->name('accommodations.')->group(function () {
    Route::get('/', [AccommodationController::class, 'index'])->name('index');

    Route::get('/create', [AccommodationController::class, 'create'])->name('create');

    Route::post('/store', [AccommodationController::class, 'store'])->name('store');

    Route::get('/{id}', [AccommodationController::class, 'show'])->name('show')->whereNumber('id');

    Route::get('/{id}/edit', [AccommodationController::class, 'edit'])->name('edit')->whereNumber('id');

    Route::put('/{id}', [AccommodationController::class, 'update'])->name('update')->whereNumber('id');

    Route::delete('/{id}', [AccommodationController::class, 'destroy'])->name('destroy')->whereNumber('id');
});

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');

    Route::get('/favorites/places', [UserController::class, 'showFavoritesPlaces'])->name('favorites.places');

    Route::get('/favorites/accommodations', [UserController::class, 'showFavoritesAccommodations'])->name('favorites.accommodations');

    Route::get('/histories/places', [UserController::class, 'showHistoriesPlaces'])->name('histories.places');

    Route::get('/histories/accommodations', [UserController::class, 'showHistoriesAccommodations'])->name('histories.accommodations');
});

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::get('/profile/admin', [AdminController::class, 'index'])->name('profile.admin');

Route::prefix('login')->name('login.')->group(function () {
    Route::get('/', [AuthController::class, 'loginView'])->name('view');

    Route::post('/', [AuthController::class, 'loginPost'])->name('post');
});

Route::prefix('register')->name('register.')->group(function () {
    Route::get('/', [AuthController::class, 'registerView'])->name('view');

    Route::post('/', [AuthController::class, 'registerPost'])->name('post');
});

Route::prefix('chat')->name('chat.')->group(function () {
    Route::get('/', [ChatController::class, 'index'])->name('index');

    Route::post('/send', [ChatController::class, 'sendMessage'])->name('send');
});