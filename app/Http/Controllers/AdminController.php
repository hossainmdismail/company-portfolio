<?php

namespace App\Http\Controllers;

use App\Models\OrderNotification;

//use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        $newsletter = OrderNotification::where('notification', 1)->paginate(10);
        $total = OrderNotification::all()->count();
        return view('backend.pages.Dashboard.index', [
            'notifications' => $newsletter,
            'total' => $total,
        ]);
    }
    function check($id)
    {
        OrderNotification::find($id)->update([
            'notification' => 0
        ]);
        return back()->with('succ', 'Mark as read');
    }
}
