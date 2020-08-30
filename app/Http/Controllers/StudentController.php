<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        return view('studentLogin');
    }

    public function login()
    {
        return view('studentLogin');
    }
    public function loginHandle(Request $request)
    {
        $request->validate([
            's_name'=>['required']

        ]);
        dd($request);

    }
}
