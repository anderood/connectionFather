<?php

namespace App\Providers;

use App\Repositories\Home\HomeRepository;
use App\Repositories\Home\HomeRepositoryInterface;
use App\Services\Home\HomeService;
use App\Services\Home\HomeServiceInterface;
use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            HomeServiceInterface::class,
            HomeService::class
        );

        $this->app->bind(
            HomeRepositoryInterface::class,
            HomeRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
