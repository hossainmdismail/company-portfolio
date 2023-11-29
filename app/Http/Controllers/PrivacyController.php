<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;

class PrivacyController extends Controller
{
    function index()
    {
        SEOTools::setTitle('Synex Digital - Terms & Conditions');
        SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());

        return view('frontend.pages.privacy');
    }
}
