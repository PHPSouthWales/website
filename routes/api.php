<?php

Route::prefix('speakers')->namespace('Speakers')->group(function () {
    Route::get('/', IndexController::class);
    Route::get('/{speaker}', ShowController::class);
});
