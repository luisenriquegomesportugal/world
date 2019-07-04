<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Resources\CityResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CountrylanguageResource;


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
        CityResource::withoutWrapping();
        CountryResource::withoutWrapping();
        CountrylanguageResource::withoutWrapping();
    }
}
