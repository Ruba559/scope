<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    
    public function property()
    {
        return $this->belongsTo(Property::class , 'property_id');
    }


    public function ads()
    {
        return $this->belongsTo(Ads::class , 'ads_id');
    }


    public function office()
    {
        return $this->belongsTo(Office::class , 'office_id');
    }

}
