<?php

declare(strict_types=1);

use App\User\Controllers\CreateController;
use App\User\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::prefix('/user')->as('user.')->group(function () {
    Route::get(uri: '/create', action: CreateController::class)->name('create');
    Route::post(uri: '/store', action: StoreController::class)->name('store');
});

