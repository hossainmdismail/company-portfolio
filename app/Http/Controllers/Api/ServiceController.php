<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services():JsonResponse
    {
        $services = Service::where('status',1)->get();

        if($services){
            return response()->json([
                'status'=> 1,
                'services' => $services,
            ]);
        }
        else{
            return response()->json([
                'status'=> 0,
            ]);
        }

    }
    public function services_view($slugs):JsonResponse
    {
        $services_view = Service::with('serviceContent','content','content.contentItem')->where('slugs',$slugs)->first();

        if($services_view){
            return response()->json([
                'status'=> 1,
                'services_view' => $services_view,
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
