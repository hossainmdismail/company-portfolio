<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function products():JsonResponse
    {
        $products = Product::with('projects')->get();

        if($products){
            return response()->json([
                'status'=> 1,
                'products' => $products,
            ]);
        }
        else{
            return response()->json([
                'status'=> 0,
            ]);
        }
    }
}
