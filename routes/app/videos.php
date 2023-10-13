<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\HowTo\Http\Controllers\Video\Destroy;
use LaravelLiberu\HowTo\Http\Controllers\Video\Index;
use LaravelLiberu\HowTo\Http\Controllers\Video\Show;
use LaravelLiberu\HowTo\Http\Controllers\Video\Store;
use LaravelLiberu\HowTo\Http\Controllers\Video\Update;

Route::prefix('videos')
    ->as('videos.')
    ->group(function () {
        Route::get('', Index::class)->name('index');
        Route::post('', Store::class)->name('store');
        Route::patch('{video}', Update::class)->name('update');
        Route::delete('{video}', Destroy::class)->name('destroy');
        Route::get('{video}', Show::class)->name('show');
    });
