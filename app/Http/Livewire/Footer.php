<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;

class Footer extends Component
{
    public function render()
    {
        $company = Company::get()->where('id','1');

        return view('livewire.footer', compact('company'));
    }
}
