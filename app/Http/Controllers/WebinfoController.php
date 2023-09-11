<?php

namespace App\Http\Controllers;

use App\Models\Web_info;
use Illuminate\Http\Request;

class WebInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.WebInfo.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Web_info $web_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Web_info $web_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Web_info $web_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Web_info $web_info)
    {
        //
    }
}
