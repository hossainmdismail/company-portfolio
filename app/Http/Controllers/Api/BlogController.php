<?php

namespace App\Http\Controllers\Api;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blogs():JsonResponse
    {
        $blogs = Blog::where('status',1)->get();

        if($blogs){
            return response()->json([
                'status'=> 1,
                'services' => $blogs,
            ]);
        }
        else{
            return response()->json([
                'status'=> 0,
            ]);
        }
    }
    public function blogs_view($slugs):JsonResponse
    {
        $blogs_view = Blog::where('slugs',$slugs)->first();
        if($blogs_view){
            return response()->json([
                'status'=> 1,
                'blogs_view' => $blogs_view,
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
