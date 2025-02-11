<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $product_id;

    public function deleteProduct()
    {
        $product = Product::find($this->product_id);
        unlink('assets/imgs/products/'.$product->image);
        $product->delete();
        session()->flash('message','Product has been deleted!');
    }
    public function render()
    {
        $allproducts = Product::orderBy('created_at','DESC')->paginate(10);
        $user = Auth::user();
        $products = Product::where('user_id',$user->id)->orderBy('id','desc')->get();
        return view('livewire.admin.admin-product-component',['allproducts'=>$allproducts, 'user'=> $user]);
    }
}
