<?php

namespace App\Http\Controllers\API;

use App\City;
use App\Http\Requests\CityRequest;
use App\Http\Resources\City as CityResource;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CityResource::collection(City::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CityRequest  $request
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return new CityResource($city);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CityRequest  $request
     * @param  City  $city
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        return new CityResource($city->delete());
    }
}
