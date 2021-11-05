<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PropertyCategory;

class LastProperties extends Component
{
    public function render()
    {
        $propertycategories = PropertyCategory::latest()->get();

        return view('livewire.last-properties', compact('propertycategories'));
    }
}
