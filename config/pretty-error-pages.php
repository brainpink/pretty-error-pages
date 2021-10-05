<?php

use App\Http\Middleware\EncryptCookies;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

return [
    /**
     * Which layout do you want to use for your error pages, possible options:
     * simple, form
     */
    'layout'          => 'form',

    /**
     * Want to have a different style for a specific error put it here.
     * 404 => 'form'
     */
    'layout-per-page' => [
        '402' => 'simple',
        '418' => 'simple',
        '419' => 'simple',
    ],

    /**
     * The url to use as home url.
     */
    'home'            => env('APP_URL', 'http://localhost'),

    /**
     * The logo to show on error pages
     */
    'logo'            => 'https://picsum.photos/200',

    'css' => [
        'css/app.css',
    ],
    'js'  => [

    ],

    'mail_to' => [
        'address' => '',
        'name'    => '',
    ],

    'middleware' => [
        EncryptCookies::class,
        StartSession::class,
        ShareErrorsFromSession::class,
        VerifyCsrfToken::class,
    ],
];
