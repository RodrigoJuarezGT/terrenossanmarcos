<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertiesList extends Component
{
    public function render(Request $request)
    {

        $properties = Property::latest()->orwhere('property_category_id', $request->tipo)->where('price', '<=', $request->presupuesto)->paginate(9);


        return view('livewire.properties-list', compact('properties'));
    }

}
