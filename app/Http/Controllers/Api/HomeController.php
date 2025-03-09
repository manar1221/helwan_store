<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseController;
use App\Models\Category;
use App\Models\Product;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function getHomeData(Request $request)
    {
        $slides = HomeSlider::all();
        $categories = Category::all();
        $products = Product::all();

        return $this->sendResponse([
            'slides' => $slides,
            'categories' => $categories,
            'products' => $products,
        ], 'Home data retrieved successfully.');
    }
}
