<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentController extends Controller
{
    //

    public function save(Request $request)
    {
        print_r($request->input());
        $student = new Students();
        $student->name= $request-> name;
        $student->password= $request-> password;
       echo  $student->save();


    }

    public function index()
    {
        return view('studentLogin');
    }

    // public function login()
    // {
    //     return view('studentLogin');
    // }
    // public function loginHandle(Request $request)
    // {
    //     $request->validate([
    //         's_name' => ['required']

    //     ]);
    //     dd($request);
    // }
}
