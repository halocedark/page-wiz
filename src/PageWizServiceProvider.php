<?php

namespace Halocedark\PageWiz;

use Illuminate\Support\ServiceProvider;

class PageWizServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/../routes/web.php");
        $this->loadViewsFrom(__DIR__."/../resources/views", 'PageWiz');
    }

    public function register()
    {
        $this->app->bind('page-wiz', function () {
            return new PageWiz;
        });
    }

    public function provides()
    {
        return ['page-wiz'];
    }

}
