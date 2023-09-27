<?php

namespace App\Http\Controllers;

class ContactCotroller extends Controller
{
    function index()
    {
        return view('frontend.pages.contact');
    }
}
