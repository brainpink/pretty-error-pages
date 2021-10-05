<?php

use Creativeorange\PrettyErrorPages\Http\Controllers\SubmitFormController;
use Illuminate\Support\Facades\Route;

Route::prefix('/error-pages')
    ->middleware(config('pretty-error-pages.middleware'))
    ->as('pretty-error-pages.')
    ->group(function () {
        Route::post('/submit', SubmitFormController::class)
            ->name('submit');
    });
