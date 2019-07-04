<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "city";
    protected $primaryKey = "ID";
    
    protected $increments = false;
    protected $timestamps = false;

    public $fillable = ["ID", "Name", "CountryCode", "District", "Population"];
}
