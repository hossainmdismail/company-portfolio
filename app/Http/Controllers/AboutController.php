<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use Artesaos\SEOTools\Facades\SEOTools;


class AboutController extends Controller
{
    function link()
    {
        SEOTools::setTitle('Synex Digital - About');
        $service = Service::where('status', 1)->get()->take(8);
        $testimonial = Testimonial::where('status', 1)->get();
        return view('frontend.pages.about', [
            'services'      => $service,
            'testimonials'  => $testimonial,
        ]);
    }
}
