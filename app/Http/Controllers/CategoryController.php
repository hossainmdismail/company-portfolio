<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return view('backend.pages.Category.create',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'          => 'required|string',
            'description'   => 'required|string',
        ]);

        Category::insert([
            'user_id'           => 1, //User ID Will be added
            'name'              => $request->name,
            'description'       => $request->description,
            'seo_title'         => $request->seo_title,
            'seo_description'   => $request->seo_description,
            'seo_tags'          => $request->seo_tags,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.pages.Category.edit',['data' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'          => 'required|string',
            'description'   => 'required|string',
        ]);
        Category::find($category->id)->update([
            'name'              => $request->name,
            'description'       => $request->description,
            'seo_title'         => $request->seo_title,
            'seo_description'   => $request->seo_description,
            'seo_tags'          => $request->seo_tags,
        ]);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::find($category->id)->delete();
        return back();
    }
}
