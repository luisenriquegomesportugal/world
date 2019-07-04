<?php

namespace App\Http\Controllers\API;

use App\Countrylanguage;
use App\Http\Requests\CountrylanguageRequest;
use App\Http\Resources\Countrylanguage as CountrylanguageResource;
use App\Http\Controllers\Controller;

class CountrylanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CountrylanguageResource::collection(Countrylanguage::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CountrylanguageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountrylanguageRequest $request)
    {
        $countrylanguage = Countrylanguage::create($request->all());
        return new CountrylanguageResource($countrylanguage);
    }

    /**
     * Display the specified resource.
     *
     * @param  Countrylanguage  $countrylanguage
     * @return \Illuminate\Http\Response
     */
    public function show(Countrylanguage $countrylanguage)
    {
        return new CountrylanguageResource($countrylanguage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CountrylanguageRequest  $request
     * @param  Countrylanguage  $countrylanguage
     * @return \Illuminate\Http\Response
     */
    public function update(CountrylanguageRequest $request, Countrylanguage $countrylanguage)
    {
        $countrylanguage = $countrylanguage
            ->fill($request->all())
            ->save();
        return new CountrylanguageResource($countrylanguage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Countrylanguage  $countrylanguage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Countrylanguage $countrylanguage)
    {
        return new CountrylanguageResource($countrylanguage->delete());
    }
}
