<?php

namespace Creativeorange\PrettyErrorPages;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

use function config_path;
use function resource_path;

class PrettyErrorPagesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/views/errors' => resource_path('views/errors'),
            __DIR__.'/../resources/views/mails'  => resource_path('views/vendor/pretty-error-pages/mail'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../config/pretty-error-pages.php' => config_path('pretty-error-pages.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/pretty-error-pages'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'pretty-error-pages');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'pretty-error-pages');
        $this->loadRoutesFrom(__DIR__.'/../routes/pretty-error-pages.php');

        Blade::componentNamespace('Creativeorange\\PrettyErrorPages\\View\\Components', 'pretty-error-pages');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/pretty-error-pages.php', 'pretty-error-pages');
    }
}
