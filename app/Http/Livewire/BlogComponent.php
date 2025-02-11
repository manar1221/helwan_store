<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $blogs = Blog::paginate(12);
        return view('livewire.blog-component',['blogs'=>$blogs]);
    }
}
