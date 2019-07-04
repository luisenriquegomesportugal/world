<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "country";
    protected $primaryKey = "Code";

    public $incrementing = false;
    public $timestamps = false;
    public $fillable = ["Code", "Name", "Continent", "Region", "SurfaceArea", "IndepYear", "Population", "LifeExpectancy", "GNP", "GNPOld", "LocalName", "GovernmentForm", "HeadOfState", "Capital", "Code2"];

    public function cities()
    {
        return $this->hasMany(City::class, "CountryCode", "Code");
    }

    public function countrieslanguage()
    {
        return $this->hasMany(Countrylanguage::class, "CountryCode", "Code");
    }
}
