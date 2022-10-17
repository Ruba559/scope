<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Story;
use App\Models\City;
use App\Models\PropertyType;

class HomeController extends Controller
{
   
    public function index()
    { 

       // $cities = City::get();
        $properties = Property::where('status' , '1')->orderBy('created_at' , 'desc')->get();
        //$propertyTypes = PropertyType::get();

        return view('welcome' , [ 'properties' => $properties ,
         ]);
    }
}
