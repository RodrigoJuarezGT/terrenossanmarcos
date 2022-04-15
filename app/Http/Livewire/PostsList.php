<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Posts;

class PostsList extends Component
{
    public function render()
    {
        $posts = Posts::latest()->get();
        return view('livewire.posts-list', compact('posts'));
    }
}
