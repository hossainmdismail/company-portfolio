<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;

class FronProjectController extends Controller
{
    function link($slugs)
    {
        $project = Project::where('slugs', $slugs)->first();

        //Seo details
        SEOTools::setTitle($project->seo_title);
        SEOTools::setDescription($project->seo_description);
        SEOMeta::addKeyword([$project->seo_tags]);

        return view('frontend.pages.project', ['project' => $project]);
    }
    function portfolio()
    {
        SEOTools::setTitle('Synex Digital - Portfolio');
        SEOTools::setDescription('Explore our diverse portfolio featuring a range of web applications, websites, and design projects. See how Synex Digital brings creativity and innovation to life.');
        SEOMeta::addKeyword(['portfolio', 'web development', 'web applications', 'design projects', 'Synex Digital', 'showcase, creative work', 'innovation', 'web design', 'application development']);

        $project = Project::where('status', 1)->get();
        return view('frontend.pages.projects', [
            'projects' => $project,
        ]);
    }
}
