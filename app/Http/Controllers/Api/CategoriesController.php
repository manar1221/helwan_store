<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends BaseController
{
    public function index(){
        $categories = Category::get();
        return $this->sendResponse($categories, 'Displaying all categories');
        // return response()->json( $categories );
    }
}
