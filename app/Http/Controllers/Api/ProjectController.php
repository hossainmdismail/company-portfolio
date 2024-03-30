<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function projects():JsonResponse
    {
        $projects = Project::where('status',1)->get();

        if($projects){
            return response()->json([
                'status'=> 1,
                'projects' => $projects,
            ]);
        }
        else{
            return response()->json([
                'status'=> 0,
            ]);
        }
    }

    public function projects_view($slugs):JsonResponse
    {
        $projects_view = Project::where('slugs',$slugs)->where('status',1)->first();

        if($projects_view){
            return response()->json([
                'status'=> 1,
                'projects_view' => $projects_view,
            ],200);
        }
        else{
            return response()->json([
                'status'=> 0,
                'message' => 'service not found',
            ]);
        }
    }

}
