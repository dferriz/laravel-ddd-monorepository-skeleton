<?php

namespace App\Providers;

use App\Services\Storage\LocalFileManager;
use App\Services\Storage\FileManagerContract;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Netflix\Backoffice\Movies\Application\Create\MovieCreator;
use Netflix\Backoffice\Movies\Domain\Repository\MovieRepository;
use Netflix\Backoffice\Movies\Infrastructure\Persistance\Eloquent\MovieEloquentRepository;

class AppServiceProvider extends ServiceProvider
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
