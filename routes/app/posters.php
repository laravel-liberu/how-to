<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\HowTo\Http\Controllers\Poster\Destroy;
use LaravelLiberu\HowTo\Http\Controllers\Poster\Show;
use LaravelLiberu\HowTo\Http\Controllers\Poster\Store;

Route::prefix('posters')
    ->as('posters.')
    ->group(function () {
        Route::post('', Store::class)->name('store');
        Route::delete('{poster}', Destroy::class)->name('destroy');
        Route::get('{poster}', Show::class)->name('show');
    });
