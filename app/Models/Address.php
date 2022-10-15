<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;
    public $timestamps = false;

    // turn off only updated_at
    const UPDATED_AT = false;

    protected $fillable = [
        'street', 'country_id', 'city_id', 'postal_code', 'phone', 'village', 'user_id'
    ];
    public function addressable()
    {
        return $this->morphTo();
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
