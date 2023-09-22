<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Social_links;
use App\Models\Team;

//use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $project = Project::select('id','slugs','product_id','title','thumbnail')->where('status',1)->get();
        $team    = Team::where('status',1)->get();
        $social  = Social_links::where('status',1)->get();


        return view('frontend.pages.home',[
            'projects'  => $project,
            'teams'     => $team,
            'socials'   => $social,
        ]);
    }
}
