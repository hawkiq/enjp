<?php

namespace Hawkiq\Enjp;

use Illuminate\Support\ServiceProvider;

class EnjpServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        if (file_exists($file = __DIR__ . '/../helpers.php')) {
            require $file;
        }
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
