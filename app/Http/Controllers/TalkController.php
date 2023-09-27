<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TalkController extends Controller
{
    function index()
    {
        $product = Product::where('status', 1)->get();
        return view('frontend.pages.talk', [
            'products' => $product,
        ]);
    }

    function store(Request $request)
    {
        dd($request);
    }
}
