<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    function index()
    {
        //index
    }

    function store(Request $request)
    {
        //request
        $request->validate([
            'email' => 'required|email'
        ]);

        $lead = new Lead();
        $lead->email = $request->email;
        $lead->save();
        return back();
    }
}
