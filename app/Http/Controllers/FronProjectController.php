<?php

namespace App\Http\Controllers;

use App\Models\Project;

class FronProjectController extends Controller
{
    function link($slugs){
        $project = Project::where('slugs',$slugs)->first();
        return view('frontend.pages.project',['project' => $project]);
    }
}
