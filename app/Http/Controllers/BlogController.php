<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Photo;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::select('id','name')->where('status',1)->get();
        
        $query = Blog::query();
        if(!$request->input('category')){
            $blog = $query->select('id','title','seo_title','seo_description','seo_tags','status','created_at')->paginate(15);
        }else{
            $blog = $query->select('id','title','seo_title','seo_description','seo_tags','status','created_at')->where('category_id',$request->category)->get();
        }
        
        return view('backend.pages.Blog.list',[
            'data'      => $blog,
            'category'  => $category,
        ]);
    }

    public function create()
    {
        $category = Category::select('id','name')->where('status',1)->get();
        return view('backend.pages.Blog.create',['category' => $category]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'category'  => 'required|integer',
            'title'     => 'required|string',
            'thumbnail' => 'required',
            'content'   => 'required',
        ]);
        
        if(Blog::where('slugs',Str::slug($request->title))->exists()){
            return back()->with('err','Title is already exits');
         } //checking slugs copy

        Photo::upload($request->thumbnail ,'uploads/blog','BLOG',['1200','900']);

        Blog::insert([
            'user_id'           => 1, //user will be added
            'category_id'       => $request->category,
            'title'             => $request->title,
            'slugs'             => Str::slug($request->title),
            'thumbnail'         => Photo::$name,
            'content'           => $request->content,
            'seo_title'         => $request->seo_title,
            'seo_description'   => $request->seo_description,
            'seo_tags'          => $request->seo_tags,
            'created_at'        => Carbon::now(),
        ]);
        return back()->with('succ','Create post successfully');
        
    }

    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $category = Category::select('id','name')->where('status',1)->get();
        return view('backend.pages.Blog.edit',[
            'category'  => $category,
            'blog'      => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //dd($request->all());
        
        $request->validate([
            'category'  => 'required|integer',
            'title'     => 'required|string',
            'content'   => 'required',
        ]);

        if (!empty($request->thumbnail)) {
            Photo::delete('uploads/blog',$blog->thumbnail);
            Photo::upload($request->thumbnail ,'uploads/blog','BLOGU',['1200','900']);
        }

        Blog::find($blog->id)->update([
            'user_id'           => 1, //user will be added
            'category_id'       => $request->category,
            'title'             => $request->title,
            'slugs'             => Str::slug($request->title),
            'thumbnail'         => !empty($request->thumbnail)?Photo::$name:$blog->thumbnail,
            'content'           => $request->content,
            'seo_title'         => $request->seo_title,
            'seo_description'   => $request->seo_description,
            'seo_tags'          => $request->seo_tags,
            'created_at'        => Carbon::now(),
        ]);
        return back()->with('succ','Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Photo::delete('uploads/blog',$blog->thumbnail);
        Blog::find($blog->id)->delete();
        return back()->with('succ','delete successfully');
    }
}
