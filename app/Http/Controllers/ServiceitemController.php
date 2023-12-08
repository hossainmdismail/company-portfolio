<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Photo;

class ServiceitemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services       = Service::all();
        $serviceItem    = ServiceItem::all();
        return view('backend.pages.ServiceItems.create', [
            'services' => $services,
            'serviceItems' => $serviceItem,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 's';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_id'     =>  'required|integer',
            'title'          =>  'required|string',
            'thumbnail'      =>  'required|image',
            'description'    =>  'required|string',
        ]);

        Photo::upload($request->thumbnail, 'uploads/service', 'SER-ITEM', ['200', '200']);

        ServiceItem::insert([
            'service_id'     =>  $request->service_id,
            'image'          =>  Photo::$name,
            'title'          =>  $request->title,
            'description'    =>  $request->description,
            'created_at'     =>  Carbon::now(),
        ]);
        return back()->with('succ', 'Service item added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceItem $serviceItem)
    {
        dd($serviceItem);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $serviceItem = ServiceItem::find($id);
        $services = Service::all();
        return view('backend.pages.ServiceItems.edit', [
            'service'   =>  $serviceItem,
            'services'  =>  $services,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (!$request->has('thumbnail')) {
            ServiceItem::find($id)->update([
                'service_id'        =>  $request->service_id,
                'title'             =>  $request->title,
                'description'       =>  $request->description,
                'status'            =>  $request->status,
            ]);
        } else {
            $image = ServiceItem::where('id', $id)->first()->image;
            Photo::delete('uploads/service/', $image);

            Photo::upload($request->thumbnail, 'uploads/service', 'SER-ITEM', ['200', '200']);

            ServiceItem::find($id)->update([
                'service_id'        =>  $request->service_id,
                'title'             =>  $request->title,
                'description'       =>  $request->description,
                'status'            =>  $request->status,
                'image'             =>  Photo::$name,
                'status'            =>  $request->status,
            ]);
        }
        return redirect()->route('serviceitem.index')->with('succ', 'Service Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $image = ServiceItem::where('id', $id)->first()->image;
        Photo::delete('uploads/service/', $image);

        ServiceItem::find($id)->delete();
        return back();
    }
}
