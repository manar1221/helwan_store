<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // ✅ استيراد Validator

class ProductsController extends BaseController
{
    public function getProductsByCategory(Request $request)
    {
        // التحقق من صحة البيانات
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // جلب المنتجات بناءً على الفئة
        $products = Product::where('category_id', $request->category_id)->get();

        if ($products->isEmpty()) {
            return $this->sendError('No products found for this category.', []);
        }

        return $this->sendResponse($products, 'Products retrieved successfully.');
    }

    public function searchProduct(Request $request)
    {
        // التحقق من صحة البيانات
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // البحث عن المنتجات التي تحتوي على الاسم المدخل
        $products = Product::where('name', 'LIKE', "%{$request->name}%")->get();

        if ($products->isEmpty()) {
            return $this->sendError('No products found.', []);
        }

        return $this->sendResponse($products, 'Products retrieved successfully.');
    }
}
