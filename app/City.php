<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "city";
    protected $primaryKey = "ID";

    public $incrementing = false;
    public $timestamps = false;
    public $fillable = ["ID", "Name", "CountryCode", "District", "Population"];

    public function country()
    {
        return $this->belongsTo(Country::class, "CountryCode", "Code");
    }
}
