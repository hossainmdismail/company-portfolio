<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Photo;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backend.pages.Testimonial.create', [
            'testimonials'=>$testimonials,
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
            'profile'   => 'required',
            'name'      => 'required',
            'title'     => 'required',
            'field'     => 'required',
        ]);

        Photo::upload($request->profile, 'uploads/testimonial', 'TESTIMONIAL',);

        Testimonial::insert([
            'user_id'        =>  Auth::user()->id,
            'profile'        =>  Photo::$name,
            'name'           =>  $request->name,
            'title'          =>  $request->title,
            'field'          =>  $request->field,
            'comment'        =>  $request->comment,
            'created_at'     =>  Carbon::now(),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        $users = User::all();
        return view('backend.pages.Testimonial.edit', [
            'testimonial'   => $testimonial,
            'users'         => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->profile == ''){
            Testimonial::find($id)->update([
                'user_id'        =>  1, //User ID Will be added
                'name'           =>  $request->name,
                'title'          =>  $request->title,
                'field'          =>  $request->field,
                'comment'        =>  $request->comment,
                'status'         =>  $request->status,
            ]);
        }
        else{
            
            Photo::upload($request->profile, 'uploads/testimonial', 'TESTIMONIAL',);

            Testimonial::find($id)->update([
                'user_id'        =>  1, //User ID Will be added
                'profile'        =>  Photo::$name,
                'name'           =>  $request->name,
                'title'          =>  $request->title,
                'field'          =>  $request->field,
                'comment'        =>  $request->comment,
                'status'         =>  $request->status,
            ]);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::find($id)->delete();
        return back();
    }
}
