<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Illuminate\Support\Facades\File;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    function index()
    {


        Sitemap::create()

            ->add(Url::create('/home')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1))
            ->add(Url::create('/home')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1))
            ->writeToFile(public_path('sitemap.xml'));

        // Optionally, you can also copy the sitemap to the root directory
        File::copy(public_path('sitemap.xml'), base_path('sitemap.xml'));

        return response()->download(public_path('sitemap.xml'), 'sitemap.xml');
    }
}
