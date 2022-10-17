<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Place extends Model
{
    use HasFactory;
    use Translatable;

    protected $translatable = ['name' ];

    protected $guarded = [];

    
    public function city()
    {
        return $this->belongsTo(City::class , 'city_id');
    }

    public function properties()
    {
        return $this->hasMany(Property::class , 'city_id' , 'id');
    }
}
