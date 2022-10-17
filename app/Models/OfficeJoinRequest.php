<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class OfficeJoinRequest extends Model
{
    use HasFactory;

    protected $guarded = [];

    use Translatable;

    protected $translatable = ['full_name' , 'office_name' , 'office_address'];

}
