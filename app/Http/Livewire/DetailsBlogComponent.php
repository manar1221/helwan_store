<?php

namespace App\Http\Livewire;

use  App\Models\Blog;
use Livewire\Component;

class DetailsBlogComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug=$slug;
    }
    public function render()
    {
        $blog = Blog::where('slug',$this->slug)->first();
        $lblogs = Blog::orderBy('created_at','DESC')->get()->take(8);
        return view('livewire.details-blog-component',['blog'=>$blog,'lblogs'=>$lblogs]);
    }
}
