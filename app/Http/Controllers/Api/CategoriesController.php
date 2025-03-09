<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends BaseController
{
    /**
     * جلب جميع الفئات
     */
    public function getAllCategories(Request $request)
    {
        $categories = Category::all();

        if ($categories->isEmpty()) {
            return $this->sendError('No categories found.', []);
        }

        return $this->sendResponse($categories, 'Categories retrieved successfully.');
    }
}
