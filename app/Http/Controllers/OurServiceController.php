<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;


class OurServiceController extends Controller
{
    function index($slugs)
    {
        $service = Service::where('slugs', $slugs)->first();

        //Seo details
        SEOTools::setTitle($service->seo_title);
        SEOTools::setDescription($service->seo_description);
        SEOMeta::addKeyword([$service->seo_tags]);

        return view('frontend.pages.service', ['service' => $service]);
    }
}
