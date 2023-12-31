<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;

class FronProjectController extends Controller
{
    function link($slugs)
    {
        $project = Project::where('slugs', $slugs)->first();
        $image = asset('uploads/project/' . $project->thumbnail);

        //Seo details
        SEOMeta::setTitle('Project');
        SEOMeta::addMeta('title', $project->seo_title);
        SEOTools::setDescription($project->seo_description);
        SEOMeta::addKeyword([$project->seo_tags]);
        SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());

        OpenGraph::addImage($image);
        TwitterCard::setImage($image);

        return view('frontend.pages.project', ['project' => $project]);
    }

    function portfolio(Request $request)
    {
        SEOTools::setTitle('Projects');
        SEOTools::setDescription("Discover Our Success Stories: Synex Digital's Impressive Portfolio of Innovative Projects");
        SEOMeta::addKeyword(['portfolio', 'web development', 'web applications', 'design projects', 'Synex Digital', 'showcase, creative work', 'innovation', 'web design', 'application development']);
        SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());

        $data = Project::query();
        if ($request->has('category')) {
            if ($request->category != 'clear') {
                $data->where('product_id', $request->category);
            }
        }

        $portfolio = Product::where('status', 1)->get();

        $project = $data->where('status', 1)->get();
        return view('frontend.pages.projects', [
            'projects' => $project,
            'categories' => $portfolio,
        ]);
    }
}
