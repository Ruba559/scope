<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Office extends Model
{
    use HasFactory;
    use Translatable;

    protected $guarded = [];

    protected $translatable = ['name' , 'address' , 'description'];



    public function city()
    {
        return $this->belongsTo(City::class );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function storices()
    {
        return $this->hasMany(Story::class , 'office_id' , 'id');
    }

    public function properties()
    {
        return $this->hasMany(Property::class , 'office_id' , 'id');
    }


    public function comments()
    {
        return $this->hasMany(Comment::class , 'comment_id' , 'id');
    }


    public function ratings()
    {
        return $this->hasMany(Rating::class , 'rating_id' , 'id');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class , 'office_id' , 'id');
    }
}
