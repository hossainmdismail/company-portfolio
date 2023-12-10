<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;


class OurServiceController extends Controller
{
    function index($slugs)
    {
        $service = Service::where('slugs', $slugs)->first();

        //Seo details
        SEOMeta::setTitle('Service');
        SEOMeta::addMeta('title', $service->title);
        SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());
        // SEOTools::setDescription($service->seo_description);
        // SEOMeta::addKeyword([$service->seo_tags]);

        return view('frontend.pages.service', ['service' => $service]);
    }
    function services()
    {
        $service = Service::where('status', 1)->get();
        $project = Project::where('status', 1)->get()->take(4);

        SEOMeta::setTitle('Services');
        SEOMeta::addMeta('title', 'Synex Digital Services: Elevating Your Online Presence with Cutting-Edge Solutions');
        SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());
        // SEOTools::setDescription($service->seo_description);
        // SEOMeta::addKeyword([$service->seo_tags]);

        return view('frontend.pages.services', [
            'services'  => $service,
            'projects'  => $project,
        ]);
    }
}
