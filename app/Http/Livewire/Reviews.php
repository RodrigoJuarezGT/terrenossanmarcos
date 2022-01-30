<?php

namespace App\Http\Livewire;

use App\Models\review;
use Livewire\Component;

class Reviews extends Component
{
    public function render()
    {
        $reviews = review::take(3)->inRandomOrder()->get();

        return view('livewire.reviews', compact('reviews'));
    }
}
