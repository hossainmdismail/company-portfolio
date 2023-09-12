<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('backend.pages.Product.create',['data' => $product]);
    }

    public function create()
    {
        return 'create';
    }

    public function store(Request $request)
    {
        $request->validate([
            'service' => 'required|string',
        ]);

        Product::insert([
            'user_id'       => 1, //user id will be added
            'service'       => $request->service,
            'created_at'    => Carbon::now(),
        ]);
        return back()->with('succ', 'Product added');
        
    }

    public function show(Product $product)
    {
        
    }

    public function edit(Product $product)
    {
        return view('backend.pages.Product.edit',['data' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'service' => 'required|string',
        ]);
        Product::find($product->id)->update([
            'service'       => $request->service,
            'updated_at'    => Carbon::now(),
        ]);
        return redirect()->route('product.index')->with('succ',  'Product updated');
    }

    public function destroy(Product $product)
    {
        Product::find($product->id)->delete();
        return back()->with('succ', 'Remove product');
    }
}
