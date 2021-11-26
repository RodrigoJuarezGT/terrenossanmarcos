<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;

class PropertiesSold extends Component
{
    public function render()
    {
        $total_properties = Property::count();

        return view('livewire.properties-sold', [
            'total_properties' => $total_properties,
        ]);
    }
}
