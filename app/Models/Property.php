<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Property extends Model
{
    use HasFactory;
    use Translatable;

    protected $translatable = ['name' , 'type' , 'title' , 'description' , 'adress' , 'floor' , 'divider' , 'seo_title' , 'seo_description'];

    
   
    protected $table = 'properties';

    
    protected $primaryKey = 'id';

    protected $guarded = [];


    public function cladding()
    {
        return $this->belongsTo(Cladding::class);
    }


    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }


    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

     
    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class , 'propery_type_id');
    }


    public function office()
    {
        return $this->belongsTo(Office::class , 'office_id');
    }


    public function stories()
    {
        return $this->hasMany(Story::class , 'property_id' , 'id');
    }


    public function comments()
    {
        return $this->hasMany(Comment::class , 'comment_id' , 'id');
    }


    public function ratings()
    {
        return $this->hasMany(Rating::class , 'rating_id' , 'id');
    }


    public function ScopePropertyHasFeature($querry)
    {
      return $querry->where('is_feature' , '1')->get();
    }

    public function ScopePropertyByOfficeId($querry , $office_id)
    {
      return $querry->where('office_id' , $office_id)->get();
    }

    public function ScopePropertyByCityId($querry , $city_id)
    {
      return $querry->where('city_id' , $city_id)->get();
    }

}
