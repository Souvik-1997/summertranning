<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteDetailsController extends Controller
{
    //
    public function about()
    {
        return view('about');
    }
    // public function about1()
    // {
    //     return view('about1');
    // }
    public function online()
    {
        return view('online');
    }
    // public function contact()
    // {
    //     return view('contact');
    // }
}
