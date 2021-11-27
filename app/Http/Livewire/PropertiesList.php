<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertiesList extends Component
{
    public function render(Request $request)
    {
        $properties;

        if($request->tipo && $request->presupuesto){
            $properties = Property::latest()->where('property_category_id', $request->tipo)->where('price', '<=', $request->presupuesto)->paginate(9);

        }elseif ($request->tipo && !$request->presupuesto){
            $properties = Property::latest()->where('property_category_id', $request->tipo)->paginate(9);

        }elseif (!$request->tipo && $request->presupuesto) {
            $properties = Property::latest()->where('price', '<=', $request->presupuesto)->paginate(9);

        }elseif (!$request->tipo && !$request->presupuesto){
            $properties = Property::latest()->paginate(9);

        }



        return view('livewire.properties-list', compact('properties'));
    }

}
