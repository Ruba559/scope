<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory;
    use Translatable;

    protected $translatable = ['name'];

    protected $guarded = [];

    public function ads()
    {
        return $this->hasMany(Ads::class , 'ads_id' , 'id');
    }
}
