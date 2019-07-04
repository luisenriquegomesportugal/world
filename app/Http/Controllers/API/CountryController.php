<?php

namespace App\Http\Controllers\API;

use App\Country;
use App\Http\Requests\CountryRequest;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CountryResourceCollection;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Http\Resources\CountryResourceCollection
     */
    public function index()
    {
        return new CountryResourceCollection(Country::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CountryRequest  $request
     * @return \App\Http\Resources\CountryResource
     */
    public function store(CountryRequest $request)
    {
        $country = Country::create($request->all());
        return new CountryResource($country);
    }

    /**
     * Display the specified resource.
     *
     * @param  Country  $country
     * @return \App\Http\Resources\CountryResource
     */
    public function show(Country $country)
    {
        return new CountryResource($country);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CountryRequest  $request
     * @param  Country  $country
     * @return \App\Http\Resources\CountryResource
     */
    public function update(CountryRequest $request, Country $country)
    {
        $country = $country
            ->fill($request->all())
            ->save();
        return new CountryResource($country);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Country  $country
     * @return \App\Http\Resources\CountryResource
     */
    public function destroy(Country $country)
    {
        return new CountryResource($country->delete());
    }
}
