<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;

class PropertiesList extends Component
{
    public function render()
    {
        $properties = Property::latest()->paginate(9);

        return view('livewire.properties-list', compact('properties'));
    }
}
