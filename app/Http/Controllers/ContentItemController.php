<?php

namespace App\Http\Controllers;

use App\Models\ContentItem;
use Illuminate\Http\Request;

class ContentItemController extends Controller
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
            'item_title' => 'required',
            'item_description' => 'required',
        ]);
        ContentItem::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $content_id = $id;
        $items = ContentItem::where('content_id',$id)->get();
        return view('backend.pages.contentItem.index',[
            'content_id' => $content_id,
            'items' => $items,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = ContentItem::find($id);
        return view('backend.pages.contentItem.edit',[
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'item_title' => 'required',
            'item_description' => 'required',
        ]);
        $item = ContentItem::find($id);
        $item->item_title = $request->item_title;
        $item->item_description = $request->item_description;
        $item->save();
        return redirect(route('content-item.show',$item->content_id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ContentItem::find($id)->delete();
        return back();
    }
}
