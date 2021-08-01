<?php

namespace Project\Apps\Backoffice\Backend\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapRoutes();
    }

    protected function mapRoutes()
    {
        Route::middleware('api')
            ->namespace('\Project\Apps\Backoffice\Backend\Http\Controllers')
            ->group(base_path('routes/api.php'));
    }
}
