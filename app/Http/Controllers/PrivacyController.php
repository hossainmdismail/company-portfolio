<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class PrivacyController extends Controller
{
    function index()
    {
        SEOTools::setTitle('Synex Digital - Terms & Conditions');
        return view('frontend.pages.privacy');
    }
}
