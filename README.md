# pretty-error-pages

App/Exceptions/Handler.php
```php
    public function render($request, Throwable $e)
    {
        if ($this->isHttpException($e)) {
            Route::any(request()->path(), function () use ($e, $request) {
                return parent::render($request, $e);
            })->middleware(config('pretty-error-pages.middleware'));
            return app()->make(Kernel::class)->handle($request);
        } else {
            return parent::render($request, $e);
        }
    }
```
