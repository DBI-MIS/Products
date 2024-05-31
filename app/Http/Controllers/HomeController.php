<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    
    {

        // $featuredProducts = Cache::remember('featuredProducts', now()->addDay(), function () {
        //     return Product::where('status', true)->where('featured',true)->latest('date_posted')->take(6)->get();
        // });
        return view('home', [
            // 'featuredProducts' => $featuredProducts,
            'featuredProducts' => Product::where('status', true)->where('featured',true)->latest('date_posted')->take(8)->get(),

        ]);
    }
}
