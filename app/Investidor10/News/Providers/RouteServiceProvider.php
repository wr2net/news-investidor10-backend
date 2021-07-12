<?php

namespace App\Investidor10\News\Providers;

use App\Investidor10\Common\Traits\RouteServiceProviderTrait;
use App\Investidor10\News\Models\News;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

/**
 * Class RouteServiceProvider
 * @package App\Investidor10\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    use RouteServiceProviderTrait;

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Investidor10\News\Controllers';

    /**
     * @var string
     */
    protected $routePath = 'Investidor10\News\Routes';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        Route::bind('news', function ($value) {
            return News::withTrashed()->find($value);
        });

        parent::boot();
    }
}
