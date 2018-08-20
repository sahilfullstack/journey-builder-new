<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repos\Journey\JourneyRepo', 'App\Repos\Journey\EloquentJourneyRepo');
        $this->app->bind('App\Repos\Tree\TreeRepo', 'App\Repos\Tree\EloquentTreeRepo');
        $this->app->bind('App\Repos\Path\PathRepo', 'App\Repos\Path\EloquentPathRepo');
        $this->app->bind('App\Repos\User\UserRepo', 'App\Repos\User\EloquentUserRepo');
    }
}
