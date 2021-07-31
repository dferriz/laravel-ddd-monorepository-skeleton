<?php

declare(strict_types=1);

namespace Netflix\Apps\Backoffice\Backend\Providers;

use Illuminate\Support\ServiceProvider;
use Netflix\Backoffice\Movies\Domain\Repository\MovieRepository;
use Netflix\Backoffice\Movies\Infrastructure\Persistance\Eloquent\MovieEloquentRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
