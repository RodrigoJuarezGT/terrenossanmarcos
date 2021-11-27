<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{PropertyCategory, Property};
use Illuminate\Http\Request;

class Filters extends Component
{
    public function render(Request $request)
    {
        $tipo = null;
        $categories = PropertyCategory::latest()->get();
        if($request->tipo != 'all' && $request->tipo){
            $tipo = PropertyCategory::where('id', $request->tipo)->get();
        }

        return view('livewire.filters', [
            'categories' => $categories ,
            'presupuesto' => $request->presupuesto,
            'tipo' => $tipo,
        ]);
    }
}
