<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Ads extends Model
{
    use HasFactory;
    use Translatable;
  
    protected $translatable = ['name' , 'description' , 'seo_title' , 'seo_description'];

    
    protected $guarded = [];


    public function ScopeAdsByCategoryId($querry , $category_id)
    {
      return $querry->where('category_id' , $category_id)->get();
    }

    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }
    

    public function comments()
    {
        return $this->hasMany(Comment::class , 'comment_id' , 'id');
    }

    
    public function ratings()
    {
        return $this->hasMany(Rating::class , 'rating_id' , 'id');
    }
}
