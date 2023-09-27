<?php

namespace App\Http\Controllers;

use App\Models\Service;

class OurServiceController extends Controller
{
    function index($slugs)
    {
        $service = Service::where('slugs', $slugs)->first();

        return view('frontend.pages.service', ['service' => $service]);
    }
}
