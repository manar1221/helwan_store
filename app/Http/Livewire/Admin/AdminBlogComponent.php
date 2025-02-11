<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;

class AdminBlogComponent extends Component
{
    public $blog_id;

    public function deleteBlog()
    {
        $blog = Blog::find($this->blog_id);
        unlink('assets/imgs/blogs/'.$blog->image);
        $blog->delete();
        session()->flash('message','blog has been deleted!');
    }
    use WithPagination;
    public function render()
    {

        $blogs = Blog::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-blog-component',['blogs'=>$blogs]);
    }
}
