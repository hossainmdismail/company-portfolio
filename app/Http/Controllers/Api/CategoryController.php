<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class CategoryController extends Controller
{
    public function categories():JsonResponse
    {
        $categories = Category::where('status',1)->get();

        if($categories){
            return response()->json([
                'status'=> 1,
                'categories' => $categories,
            ]);
        }
        else{
            return response()->json([
                'status'=> 0,
            ]);
        }
    }

    public function categories_view($id):JsonResponse
    {
        $categories_view =Category::whereHas('blogs', function($query) use ($id) {
            $query->where('category_id', $id);
        })->get();

        if($categories_view){
            return response()->json([
                'status'=> 1,
                'categories_view' => $categories_view,
            ],200);
        }
        else{
            return response()->json([
                'status'=> 0,
                'message' => 'service not found',
            ]);
        }
    }
}
