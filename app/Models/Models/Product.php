<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["product_name", "product_description", "product_price", "product_image", "product_type", "product_size", "product_height", "product_width", "product_length", "product_weight"];
    protected $table = "products_table";

    public static function delete_product($id)
    {
        return self::destroy($id);
    }

    public static function get_all_products()
    {
        return self::all();
    }
}
