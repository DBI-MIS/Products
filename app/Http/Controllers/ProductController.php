<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Cache::remember('product_categories', now(), function () {
            return Category::whereHas('products', function ($query) {
                $query->published();
            })->take(20)->get();
        });

        return view(
            'products.index',
            [
                'categories' => $categories,

            ]
        );
    }

  
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view(
            'products.show',
            [
                'product' => $product,
            ]
        );
    }

}
