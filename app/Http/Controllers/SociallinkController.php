<?php

namespace App\Http\Controllers;

use App\Models\Social_links;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $social_links = Social_links::all();
        return view('backend.pages.Sociallink.create', [
            'social_links'=>$social_links,
        ]);
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
        $request->validate([
            '*'=>'required',
        ]);

        Social_links::insert([
            'name'           =>  $request->name,
            'title'          =>  $request->title,
            'created_at'     =>  Carbon::now(),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Social_links $social_links)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $social_links = Social_links::where('id', $id)->first();
        return view('backend.pages.Sociallink.edit', [
            'social_links'  =>$social_links,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Social_links::find($id)->update([
            'name'           =>  $request->name,
            'title'          =>  $request->title,
            'status'         =>  $request->status,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Social_links::find($id)->delete();
        return back();
    }
}
