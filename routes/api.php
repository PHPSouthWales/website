<?php

Route::prefix('speakers')->namespace('Speakers')->group(function () {
    Route::get('/', IndexController::class);
    Route::get('/{speaker}', ShowController::class);
});

Route::prefix('talks')->namespace('Talks')->group(function () {
    Route::get('/', IndexController::class);
    Route::get('/{talk}', ShowController::class);
});

Route::prefix('sponsors')->namespace('Sponsors')->group(function () {
    Route::get('/', IndexController::class);
    Route::get('/{sponsor}', ShowController::class);
});

Route::prefix('organisers')->namespace('Organisers')->group(function () {
    Route::get('/', IndexController::class);
    Route::get('/{organiser}', ShowController::class);
});

Route::prefix('events')->namespace('Events')->group(function () {
    Route::get('/', IndexController::class);
    Route::get('/{event}', ShowController::class);
});
