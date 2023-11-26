<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Photo;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams  = Team::all();
        return view('backend.pages.Team.create', [
            'teams'  =>  $teams,
        ]);
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
            '*' => 'required',
        ]);

        Photo::upload($request->profile, 'uploads/team', 'TEAM', ['100', '100']);

        Team::insert([
            'user_id'        =>  Auth::user()->id,
            'profile'        =>  Photo::$name,
            'name'           =>  $request->name,
            'career_title'   =>  $request->career_title,
            'created_at'     =>  Carbon::now(),
        ]);
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
    public function edit(Team $team)
    {
        $users = User::all();
        return view('backend.pages.Team.edit', [
            'team'  => $team,
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->profile == '') {
            Team::find($id)->update([
                'user_id'        =>  Auth::user()->id, //User ID Will be added
                'name'           =>  $request->name,
                'career_title'   =>  $request->career_title,
                'status'         =>  $request->status,
            ]);
        } else {

            $image = Team::find($id)->profile;
            Photo::delete('uploads/team', $image);

            Photo::upload($request->profile, 'uploads/team', 'TEAM', ['100', '100']);

            Team::find($id)->update([
                'user_id'        =>  Auth::user()->id, //User ID Will be added
                'profile'        =>  Photo::$name,
                'name'           =>  $request->name,
                'career_title'   =>  $request->career_title,
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
        $image = Team::find($id)->profile;
        Photo::delete('uploads/team', $image);

        Team::find($id)->delete();
        return back();
    }
}
