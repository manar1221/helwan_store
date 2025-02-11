<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseController;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    public function index(){
        $products = Product::get();
        if($products)
        {
            return $this->sendResponse($products, 'Displaying all products');
        }
        else {
        return $this->sendError('null.', ['error'=>'null']);
        }
    }

}
