<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Admin\AdminRepositoryInterface::class,
            \App\Repositories\Admin\AdminRepository::class
        );
        
        $this->app->bind(
            \App\Repositories\Category\CategoryRepositoryInterface::class,
            \App\Repositories\Category\CategoryRepository::class
        );
        $this->app->bind(
            \App\Repositories\Advertisement\AdvertisementRepositoryInterface::class,
            \App\Repositories\Advertisement\AdvertisementRepository::class
        );

        $this->app->bind(
            \App\Repositories\Tag\TagRepositoryInterface::class,
            \App\Repositories\Tag\TagRepository::class
        );
        $this->app->bind(
            \App\Repositories\Actor\ActorRepositoryInterface::class,
            \App\Repositories\Actor\ActorRepository::class  
        );
        $this->app->bind(
            \App\Repositories\Director\DirectorRepositoryInterface::class,
            \App\Repositories\Director\DirectorRepository::class  
        );
        $this->app->bind(
            \App\Repositories\Film\FilmRepositoryInterface::class,
            \App\Repositories\Film\FilmRepository::class  
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
