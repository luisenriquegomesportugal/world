<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')
    ->group(function () {
        Route::get('/user', function (Request $request) {
            return $request->user();
        });

        Route::get('city', "API\CityController@index")->name("city.index");
        Route::post('city', "API\CityController@store")->name("city.store");
        Route::get('city/{city}/{relation?}', "API\CityController@show")->name("city.show");
        Route::post('city/{city}', "API\CityController@update")->name("city.update");
        Route::get('city/{city}', "API\CityController@delete")->name("city.delete");

        Route::get('country', "API\CountryController@index")->name("country.index");
        Route::post('country', "API\CountryController@store")->name("country.store");
        Route::get('country/{country}/{relation?}', "API\CountryController@show")->name("country.show");
        Route::post('country/{country}', "API\CountryController@update")->name("country.update");
        Route::get('country/{country}', "API\CountryController@delete")->name("country.delete");

        Route::get('countrylanguage', "API\CountrylanguageController@index")->name("countrylanguage.index");
        Route::post('countrylanguage', "API\CountrylanguageController@store")->name("countrylanguage.store");
        Route::get('countrylanguage/{countrylanguage}/{relation?}', "API\CountrylanguageController@show")->name("countrylanguage.show");
        Route::post('countrylanguage/{countrylanguage}', "API\CountrylanguageController@update")->name("countrylanguage.update");
        Route::get('countrylanguage/{countrylanguage}', "API\CountrylanguageController@delete")->name("countrylanguage.delete");
    });
