<?php

declare(strict_types=1);

use App\User\Controllers\CreateController;
use App\User\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::prefix('/user')->as('user.')->group(function () {
    Route::get('/create', CreateController::class)->name('create');
    Route::post('/store', StoreController::class)->name('store');
});

