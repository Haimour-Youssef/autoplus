<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Image;
use App\Observers\UserObserver;
use App\Observers\ImageObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\MenuComposer;

use App\Policies\ { ImagePolicy, UserPolicy };

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }


    protected $policies = [
        //Image::class => ImagePolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer('layouts.menu', MenuComposer::class);

        User::observe(UserObserver::class);
        Image::observe(ImageObserver::class);

    }
}
