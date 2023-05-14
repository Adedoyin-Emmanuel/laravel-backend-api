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
            'product_description' => 'required',
            'product_price' => 'required|numeric',
            'product_image' => 'required|image',
        ]);

        $imagePath = $validatedData['product_image']->store('public/images');
        $imageUrl = url(Storage::url($imagePath));

        $product = Product::create([
            'product_name' => $validatedData['product_name'],
            'product_description' => $validatedData['product_description'],
            'product_price' => $validatedData['product_price'],
            'product_image' => $imageUrl,
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
