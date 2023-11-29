<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class FrontBlogController extends Controller
{
    function link($slugs)
    {
        $blog = Blog::where('slugs', $slugs)->first();
        if (!$blog) {
            return back();
        }
        $image = asset('uploads/blog/' . $blog->thumbnail);

        //Seo details
        SEOTools::setTitle($blog->seo_title);
        SEOTools::setDescription($blog->seo_description);
        SEOMeta::addKeyword([$blog->seo_tags]);
        SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());

        OpenGraph::addImage($image);
        TwitterCard::setImage($image);

        $blogs = Blog::where('status', 1)->latest()->get()->take(4);
        $category = Category::where('status', 1)->get();
        return view('frontend.pages.blog', [
            'blog'          => $blog,
            'blogs'         => $blogs,
            'categories'    => $category,
        ]);
    }

    function list(Request $request)
    {
        $data = Blog::query();

        if ($request->has('category')) {
            if ($request->category != 'clear') {
                $data->where('category_id', $request->category);
                //Seo details
                $category = Category::find($request->category);
                SEOTools::setTitle($category->seo_title);
                SEOTools::setDescription($category->seo_description);
                SEOMeta::addKeyword([$category->seo_tags]);
                SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());
            }
        } else {
            SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());
        }

        $blogs = $data->where('status', 1)->get();
        $recentPost = Blog::where('status', 1)->latest()->get()->take(4);
        $category = Category::where('status', 1)->get();
        return view('frontend.pages.blogs', [
            'blogs'         => $blogs,
            'categories'    => $category,
            'recents'       => $recentPost,
        ]);
    }
}
