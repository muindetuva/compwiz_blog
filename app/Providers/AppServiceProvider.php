<?php

namespace App\Providers;

use App\Filament\Resources\PostResource;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationBuilder;
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
        //
        Filament::navigation(function (NavigationBuilder $builder): NavigationBuilder {
            return $builder->items([
                ...PostResource::getNavigationItems(),
            ]);
        });

    }
}
