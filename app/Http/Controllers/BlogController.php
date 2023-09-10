<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Photo;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.Blog.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::select('id','name')->where('status',1)->get();
        return view('backend.pages.Blog.create',['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'category'  => 'required|integer',
        //     'title'     => 'required|string',
        //     'thumbnail' => 'required',
        //     'content'   => 'required',
        // ]);
        Photo::upload($request->thumbnail ,'uploads/blog','BLOG');
        dd(Photo::$name);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
