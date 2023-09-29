<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Illuminate\Support\Facades\File;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    function index()
    {
        $project = Project::select('slugs')->where('status', 1)->get();
        $service = Service::select('slugs')->where('status', 1)->get();

        $sitemap = Sitemap::create();
        $sitemap->add(Url::create('/')
            ->setLastModificationDate(Carbon::now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))
            ->add(Url::create('/about')
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.1))
            ->add(Url::create('/grid/portfolio')
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.1))
            ->add(Url::create('/talk')
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.1))
            ->add(Url::create('/terms-and-privacy-policy')
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.1));

        //Dynamic Project
        foreach ($project as $projects) {
            $sitemap->add(Url::create('/portfolio' . '/' . $projects->slugs)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.1));
        }
        //Dynamic Service
        foreach ($service as $services) {
            $sitemap->add(Url::create('/our-service' . '/' . $services->slugs)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.1));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        File::copy(public_path('sitemap.xml'), base_path('sitemap.xml'));

        return response()->download(public_path('sitemap.xml'), 'sitemap.xml');
    }
}
