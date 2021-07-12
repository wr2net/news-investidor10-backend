<?php

namespace App\Investidor10\Categories\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 * @package App\Investidor10\Categories\Providers
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Investidor10\Categories\Models\Repositories\CategoryRepositoryInterface',
            'App\Investidor10\Categories\Models\Repositories\CategoryRepository'
        );
    }
}
