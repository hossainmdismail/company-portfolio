<?php

namespace App\Http\Controllers;

use App\Models\Project;

class FronProjectController extends Controller
{
    function link($slugs)
    {
        $project = Project::where('slugs', $slugs)->first();
        return view('frontend.pages.project', ['project' => $project]);
    }
    function portfolio()
    {
        $project = Project::where('status', 1)->get();
        return view('frontend.pages.projects', [
            'projects' => $project,
        ]);
    }
}
