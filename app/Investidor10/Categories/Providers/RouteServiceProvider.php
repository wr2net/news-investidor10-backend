<?php

namespace App\Investidor10\Categories\Providers;

use App\Investidor10\Common\Traits\RouteServiceProviderTrait;
use App\Investidor10\Categories\Models\Category;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

/**
 * Class RouteServiceProvider
 * @package App\Investidor10\Categories\Providers
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
    protected $namespace = 'App\Investidor10\Categories\Controllers';

    /**
     * @var string
     */
    protected $routePath = 'Investidor10\Categories\Routes';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        Route::bind('category', function ($value) {
            return Category::withTrashed()->find($value);
        });

        parent::boot();
    }
}
