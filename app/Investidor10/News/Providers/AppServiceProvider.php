<?php

namespace App\Investidor10\News\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 * @package App\Investidor10\Providers
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
            'App\Investidor10\News\Models\Repositories\NewsRepositoryInterface',
            'App\Investidor10\News\Models\Repositories\NewsRepository'
        );
    }
}
