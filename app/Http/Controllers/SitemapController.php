<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Illuminate\Support\Facades\File;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    function index()
    {
        $project = Project::select('slugs')->where('status', 1)->get();

        $sitemap = Sitemap::create();
        $sitemap->add(Url::create('/')
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1))
            ->add(Url::create('/about')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1))
            ->add(Url::create('/grid/portfolio')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1))
            ->add(Url::create('/talk')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1))
            ->add(Url::create('/terms-and-privacy-policy')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1))
            ->add(Url::create('/portfolio')
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));

        foreach ($project as $projects) {
            $sitemap->add(Url::create('/portfolio' . '/' . $projects->slugs)
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        // Optionally, you can also copy the sitemap to the root directory
        File::copy(public_path('sitemap.xml'), base_path('sitemap.xml'));

        return response()->download(public_path('sitemap.xml'), 'sitemap.xml');
    }
}
