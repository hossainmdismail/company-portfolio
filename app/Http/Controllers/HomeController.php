<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use App\Models\Social_links;
use App\Models\Team;
use App\Models\Testimonial;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;

//use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //Meta SEO
        SEOMeta::setTitle('Synex Digital');
        SEOMeta::addMeta('title', 'Synex Digital | IT Solutions For Your Business Online Presence');
        SEOTools::setDescription('We are the Synex Digital Team and are Highly Motivated to Give You The Best and effective on-time Results for Your Online Presence and Traffic Growth.');
        SEOMeta::addKeyword(['business it solutions', 'service business definition', 'business communication solution']);
        SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());

        $project = Project::select('id', 'slugs', 'product_id', 'title', 'created_at', 'thumbnail', 'seo_description')->where('status', 1)->get()->take(6);
        $team    = Team::where('status', 1)->get();
        $social  = Social_links::where('status', 1)->get();
        $service = Service::where('status', 1)->get()->take(8);
        $testimonial = Testimonial::where('status', 1)->get();

        $singleBlog = Blog::where('status', 1)->first();

        $data = Blog::query();
        if ($singleBlog) {
            $blog = $data->where('status', 1)->whereNotIn('id', [$singleBlog->id])->get();
        }

        $blog = $data->get();

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
