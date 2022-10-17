<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\City;
use App\Models\PropertyType;
use App\Models\Property;

class FilterCity extends Component
{

    public $cities , $propertyTypes , $properties , $city_id , $type_id , $maximumPrice;

    public function mount()
   {
        $this->cities = City::get();
        $this->propertyTypes = PropertyType::get();
       
        if($this->city_id)
        {
        $this->properties = Property::where('status' , '1')->where('city_id' ,  $this->city_id)->get();
        }else{
            $this->properties = Property::where('status' , '1')->get();
        }
   }

   public function filter()
   {
      
     
        $this->properties = Property::where('status' , '1')->where('city_id' ,  $this->city_id)->where('propery_type_id' ,  $this->type_id)
        ->where('price' , '<' , $this->maximumPrice)->get();
        
   }

//    public function filterType()
//    {
      
//         if($this->type_id)
//         {
//         $this->properties = Property::where('status' , '1')->where('propery_type_id' ,  $this->type_id)->get();
//         }
//    }

//    public function filterMaximumPrice()
//    {
      
//         if($this->type_id)
//         {
//         $this->properties = Property::where('status' , '1')->where('price' , '<' , $this->maximumPrice)->get();
//         }
//    }

    public function render()
    {
        return view('livewire.filter-city');
    }
}
