<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;

class PrivacyController extends Controller
{
    function index()
    {
        SEOTools::setTitle('Synex Digital - Terms & Conditions');
        SEOMeta::setCanonical(url()->current());

        return view('frontend.pages.privacy');
    }
}
