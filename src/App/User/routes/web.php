<?php

declare(strict_types=1);

use App\User\Controllers\CreateController;

use Illuminate\Support\Facades\Route;

Route::prefix('/user')->as('user.')->group(function () {
    Route::get('/create', CreateController::class)->name('create');
});

