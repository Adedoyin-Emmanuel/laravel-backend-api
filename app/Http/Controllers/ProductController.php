<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_weight' => 'numeric',
            'product_size' => 'numeric',
            'product_height' => 'numeric',
            'product_width' => 'numeric',
            'product_type' => 'required',
            'product_length' => 'numeric'
        ]);


        $product = Product::create([
            'product_name' => $validatedData['product_name'],
            'product_price' => $validatedData['product_price'],
            'product_width' => $validatedData['product_width'],
            'product_height' => $validatedData['product_height'],
            'product_length' => $validatedData['product_length'],
            'product_weight' => $validatedData['product_weight'],
            'product_size' => $validatedData['product_size'],
            'product_type' => $validatedData['product_type']
        ]);

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
