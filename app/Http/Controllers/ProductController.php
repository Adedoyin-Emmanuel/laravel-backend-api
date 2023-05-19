<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_type' => 'required',
            'product_size' => '',
            'product_height' => '',
            'product_width' => '',
            'product_length' => '',
            'product_weight' => ''
        ]);

        $product = Product::create($validatedData);

        return response()->json(['message' => 'Product created successfully', 'data' => $product], 201);
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete_product($id);

        return response()->json(['message' => 'Product deleted successfully'], 200);
    }

    public function getAllProducts()
    {
        $products = Product::get_all_products();

        return response()->json(['data' => $products], 200);
    }
}
