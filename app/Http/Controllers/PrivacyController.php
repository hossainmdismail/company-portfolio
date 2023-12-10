<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;

class PrivacyController extends Controller
{
    function index()
    {
        SEOMeta::setTitle('Terms & Conditions');
        SEOMeta::addMeta('title', 'Synex Digital Privacy Policy: Our Commitment to Protecting Your Data and Privacy Online');
        SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());

        return view('frontend.pages.privacy');
    }
}
