<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    
    public $stock_status = 'instock';
    public $featured = 0;
    public $user_id ;
    public $quantity;
    public $image;
    public $category_id;
    public $phone;


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addProduct()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'short_description' => 'required',
            'description' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
            
            'featured' => 'required',
            'quantity' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'phone' => 'required'
        ]);
        
        $standardRegularPrice = $this->convertArabicToStandard($this->regular_price);
        $standardSalePrice = $this->convertArabicToStandard($this->sale_price);
        $standardQuantity = $this->convertArabicToStandard($this->quantity);
        $standardPhone = $this->convertArabicToStandard($this->phone);
        
        $product = new Product();
        $product->name =$this->name ;
        $product->slug =$this->slug ;
        $product->short_description =$this->short_description ;
        $product->description =$this->description ;
        $product->regular_price =$standardRegularPrice ;
        $product->sale_price =$standardSalePrice ;
        
        $product->stock_status =$this->stock_status ;
        $product->featured =$this->featured ;
        $product->quantity =$standardQuantity;
        $user = Auth::user();
        $product->user_id =  $user->id;
        $product->phone =  $standardPhone;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image =$imageName;
        $product->category_id =$this->category_id ;
        $product->save();
        session()->flash('message','Product has been added!');
        return redirect()->route('admin.products');
    }
    
    protected function convertArabicToStandard($arabicNumeral)
    {
        // Define an array mapping Arabic numerals to their standard counterparts
        $arabicToStandard = [
            '١' => '1',
            '٢' => '2',
            '٣' => '3',
            '٤' => '4',
            '٥' => '5',
            '٦' => '6',
            '٧' => '7',
            '٨' => '8',
            '٩' => '9',
            '٠' => '0'
        ];
        return strtr($arabicNumeral, $arabicToStandard);
    }

    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories]);
    }
}
