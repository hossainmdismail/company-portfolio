<?php

namespace App\Http\Controllers;

use App\Models\Contents;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServiceContents;

class ServiceContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


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
            'sub_title' => 'required',
            'sub_description' => 'required',
        ]);

        ServiceContents::insert([
            'service_id' => $request->service_id,
            'sub_title' => $request->sub_title,
            'sub_description' => $request->sub_description,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service_contents = ServiceContents::where('service_id',$id)->get();
        $contents = Contents::where('service_id',$id)->get();
        return view('backend.pages.serviceContents.index',[
            'id' => $id,
            'service_contents' => $service_contents,
            'contents' => $contents,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $service_content = ServiceContents::find($id);
       return view('backend.pages.serviceContents.edit',[
        'service_content' => $service_content,
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'sub_title' => 'required',
            'sub_description' => 'required',
        ]);

    $service_id = ServiceContents::find($id);
    $data = $request->only(['sub_title', 'sub_description']);
    ServiceContents::where('id', $id)->update($data);
    return redirect(route('service-contents.show',$service_id->service_id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ServiceContents::find($id)->delete();
        return back();
    }
}
