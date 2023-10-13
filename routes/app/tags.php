<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\HowTo\Http\Controllers\Tag\Destroy;
use LaravelLiberu\HowTo\Http\Controllers\Tag\Index;
use LaravelLiberu\HowTo\Http\Controllers\Tag\Store;
use LaravelLiberu\HowTo\Http\Controllers\Tag\Update;

Route::prefix('tags')
    ->as('tags.')
    ->group(function () {
        Route::get('', Index::class)->name('index');
        Route::post('', Store::class)->name('store');
        Route::delete('{tag}', Destroy::class)->name('destroy');
        Route::patch('{tag}', Update::class)->name('update');
    });
