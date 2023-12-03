<?php

namespace App\Http\Controllers;

use App\Models\Web_info;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webInfo = Web_info::all();
        return view('backend.pages.WebInfo.create', [
            'webInfo' => $webInfo,
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
            'name'              =>  'required',
            'address'           =>  'required',
            'number'            =>  'required',
        ]);

        Web_info::insert([
            'name'              =>  $request->name,
            'address'           =>  $request->address,
            'number'            =>  $request->number,
            'created_at'        =>  Carbon::now(),
        ]);
        return back();
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
    public function edit(string $id)
    {
        $web_info = Web_info::where('id', $id)->first();
        return view('backend.pages.WebInfo.edit', [
            'web_info'  => $web_info,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Web_info::find($id)->update([
            'name'           =>  $request->name,
            'address'        =>  $request->address,
            'number'         =>  $request->number,
            'status'         =>  $request->status,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Web_info::find($id)->delete();
        return back();
    }
}
