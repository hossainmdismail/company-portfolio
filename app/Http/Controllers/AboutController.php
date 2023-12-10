<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use Artesaos\SEOTools\Facades\SEOMeta;

class AboutController extends Controller
{
    function link()
    {
        SEOMeta::setTitle('About');
        SEOMeta::addMeta('title', 'Synex Digital: Empowering Your Online Presence with Expert Web Development Solutions');
        SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());

        $service = Service::where('status', 1)->get()->take(8);
        $testimonial = Testimonial::where('status', 1)->get();
        return view('frontend.pages.about', [
            'services'      => $service,
            'testimonials'  => $testimonial,
        ]);
    }
}
