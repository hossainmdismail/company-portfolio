<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use App\Models\Social_links;
use App\Models\Team;
use App\Models\Testimonial;
use Artesaos\SEOTools\Facades\SEOTools;
//use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Synex Digital');

        $project = Project::select('id', 'slugs', 'product_id', 'title', 'thumbnail', 'seo_description')->where('status', 1)->get()->take(6);
        $team    = Team::where('status', 1)->get();
        $social  = Social_links::where('status', 1)->get();
        $service = Service::where('status', 1)->get()->take(8);
        $testimonial = Testimonial::where('status', 1)->get();

        $singleBlog = Blog::where('status', 1)->first();
        $blog = Blog::where('status', 1)->whereNotIn('id', [$singleBlog->id])->get();

        return view('frontend.pages.home', [
            'projects'      => $project,
            'teams'         => $team,
            'socials'       => $social,
            'services'      => $service,
            'testimonials'  => $testimonial,
            'singleBlog'    => $singleBlog,
            'blogs'         => $blog,
        ]);
    }
}
