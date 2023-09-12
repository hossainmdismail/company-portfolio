<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('backend.pages.Category.create',['data' => $data]);
    }

    public function create()
    {
        //
    }

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

        return back()->with('succ','Create category');
    }

    public function show(Category $category)
    {

    }

    public function edit(Category $category)
    {
        return view('backend.pages.Category.edit',['data' => $category]);
    }

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
        return redirect()->route('category.index')->with('succ','Update successfully');
    }

    public function destroy(Category $category)
    {
        Category::find($category->id)->delete();
        return back()->with('succ','Remove successfully');
    }
}
