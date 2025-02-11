<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditBlogComponent extends Component
{
    use WithFileUploads;
    public $blog_id;
    public $short_description;
    public $description;
    public $image;
    public $name='blog';
    public $slug='blog';
    public $newimage;

    public function mount($blog_id)
    {
        $blog = blog::find($blog_id);
        $this->blog_id = $blog->id;
        $this->name = $blog->name;
        $this->slug = $blog->slug;
        $this->short_description = $blog->short_description;
        $this->description = $blog->description;
        $this->image = $blog->image;
    }

    public function updateBlog()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        $blog = Blog::find($this->blog_id);
        $blog->name =$this->name ;
        $blog->slug =$this->slug ;
        $blog->short_description =$this->short_description ;
        $blog->description =$this->description ;
        if($this->newimage)
        {
            unlink('assets/imgs/blogs/'.$blog->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('blogs',$imageName);
            $blog->image =$imageName;
        }
        $blog->save();
        session()->flash('message','blog has been updated!');
        return redirect()->route('admin.blogs');
    }
    public function render()
    {
        $bcategories = BlogCategory::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-edit-blog-component',['bcategories'=>$bcategories]);
    }
}
