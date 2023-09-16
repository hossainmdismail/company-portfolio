<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function link(){
        return view('frontend.pages.about');
    }
}
