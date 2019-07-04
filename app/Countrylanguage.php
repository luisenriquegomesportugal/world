<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countrylanguage extends Model
{
    protected $table = "Countrylanguage";

    protected $increments = false;
    protected $timestamps = false;

    public $fillable = ["CountryCode", "Language", "IsOfficial", "Percentage"];
}
