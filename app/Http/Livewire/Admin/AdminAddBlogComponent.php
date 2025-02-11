<?php

namespace App\Http\Livewire\Admin;

use App\Models\BlogCategory;
use App\Models\Blog;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddBlogComponent extends Component
{
    use WithFileUploads;
    public $short_description;
    public $description;
    public $image;
    public $name;
    public $slug;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addBlog()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        $blog = new Blog();
        $blog->name =$this->name ;
        $blog->slug =$this->slug ;
        $blog->short_description =$this->short_description ;
        $blog->description =$this->description ;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('blogs',$imageName);
        $blog->image =$imageName;
        $blog->save();
        session()->flash('message','blog has been added!');
        return redirect()->route('admin.blogs');
    }
    public function render()
    {
        $bcategories = BlogCategory::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-add-blog-component',['bcategories'=>$bcategories]);
    }
}
