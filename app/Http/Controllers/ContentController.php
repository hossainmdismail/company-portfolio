<?php

namespace App\Http\Controllers;

use App\Models\Contents;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'content_title' => 'required',
            'content_description' => 'required',
        ]);
        $content = new Contents();
        $content->service_id = $request->service_id;
        $content->content_title = $request->content_title;
        $content->content_description = $request->content_description;
        $content->slugs = Str::slug($request->content_title);
        $content->save();
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $content = Contents::find($id);
        return view('backend.pages.contents.edit',[
            'content' => $content,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'content_title' => 'required',
            'content_description' => 'required',
        ]);
        $content = Contents::find($id);
        $content->content_title = $request->content_title;
        $content->content_description = $request->content_description;
        $content->slugs = Str::slug($request->content_title);
        $content->save();
        return redirect(route('service-contents.show',$content->service_id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contents::find($id)->delete();
        return back();
    }
}
