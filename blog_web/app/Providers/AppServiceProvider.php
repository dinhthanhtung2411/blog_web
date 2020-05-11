<?php

namespace App\Providers;

use App\Contract\Blog\BlogRepositoryInterface;
use App\Contract\Blog\BlogServiceInterface;
use App\Http\Repository\BlogRepository;
use App\Http\Service\BlogService;
use Illuminate\Support\ServiceProvider;

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
        $this->app->singleton(BlogRepositoryInterface::class,BlogRepository::class);
        $this->app->singleton(BlogServiceInterface::class,BlogService::class);
    }
}
