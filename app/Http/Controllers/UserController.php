<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Photo;
use PhpParser\Node\Expr\New_;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('backend.pages.Users.create', ['users' => $user]);
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
            'name'      => 'required|string',
            'email'     => 'required|email',
            'role'     => 'required',
            'password'  => 'required',
        ]);

        Photo::upload($request->profile, 'uploads/users', 'USER', [500, 500]);

        User::insert([
            'profile'       => Photo::$name,
            'name'          => $request->name,
            'email'         => $request->email,
            'role'          => $request->role,
            'password'      => bcrypt($request->password),
            'created_at'    => Carbon::now(),
        ]);
        return back()->with('succ', 'Create user');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('backend.pages.Users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->name     = $request->name;
        $user->email    = $request->email;

        if ($request->has('profile')) {
            Photo::delete('uploads/users', $user->profile);
            Photo::upload($request->profile, 'uploads/users', 'user', ['100', '100']);
            $user->profile = Photo::$name;
        }

        $user->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::find($user->id)->delete();
        return back()->with('succ', 'User removed');
    }
}
