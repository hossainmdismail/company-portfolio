<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class TalkController extends Controller
{
    function index()
    {
        SEOTools::setTitle('Synex Digital - Talk');
        $product = Product::where('status', 1)->get();
        return view('frontend.pages.talk', [
            'products' => $product,
        ]);
    }

    function store(Request $request)
    {
        return view('frontend.pages.thankyou');
    }
}
