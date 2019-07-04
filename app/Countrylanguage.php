<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countrylanguage extends Model
{
    protected $table = "countrylanguage";
    protected $primaryKey = "Language";

    public $incrementing = false;
    public $timestamps = false;
    public $fillable = ["CountryCode", "Language", "IsOfficial", "Percentage"];

    public function country()
    {
        return $this->belongsTo(Country::class, "CountryCode", "Code");
    }
}
