<?php

namespace App\Http\Controllers\API;

use App\City;
use App\Http\Requests\CityRequest;
use App\Http\Resources\CityResource;
use App\Http\Resources\CityResourceCollection;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Http\Resources\CityResourceCollection
     */
    public function index()
    {
        return new CityResourceCollection(City::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CityRequest  $request
     * @return \App\Http\Resources\CityResource
     */
    public function store(CityRequest $request)
    {
        $city = City::create($request->all());
        return new CityResource($city);
    }

    /**
     * Display the specified resource.
     *
     * @param  City  $city
     * @return \App\Http\Resources\CityResource
     */
    public function show(City $city, $relation = null)
    {
        if ($relation) {
            return $city->$relation;
        }

        return new CityResource($city);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CityRequest  $request
     * @param  City  $city
     * @return \App\Http\Resources\CityResource
     */
    public function update(CityRequest $request, City $city)
    {
        $city = $city
            ->fill($request->all())
            ->save();
        return new CityResource($city);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  City  $city
     * @return \App\Http\Resources\CityResource
     */
    public function destroy(City $city)
    {
        return new CityResource($city->delete());
    }
}
