<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;


class AboutController extends Controller
{
    function link()
    {
        SEOTools::setTitle('Synex Digital - About');
        return view('frontend.pages.about');
    }
}
