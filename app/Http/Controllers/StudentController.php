<?php

namespace App\Http\Controllers;

use App\Student;
use Dotenv\Loader\Value;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = Student::all();
        return view('student.studentAfter', ['student' => $student]);
        // dd($student);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.studentLogin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // print_r($request->input());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', /*'unique:users'*/],
            'password' => ['required', 'string', 'min:4'],
        ]);
        $student = new Student([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);
        $student->save();
        // Session::put('data',$request->name);
        // $student->session()->put('name', 'name');
     
        // Via a request instance...
        $request->session()->put('name',  $student->name);
        $request->session()->put('email',  $student->email);

        // return redirect()->route('student.studentLogin')->with('sucess','New student is added');
        return redirect("student")->with('sucess', 'New student is added');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //

        //  $student->session()->put('name', 'name');


        return view("student.studentAfter");



        // dd($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    // public function attempt()
    // {
    //     //
    //     $student = Student::all();
    //     return view('student.examAttempt', ['student' => $student]);
    //     // dd($student);
    // }




}
// {{-- Provide by sir --}}
// <h1>{{Session::get('name')}}</h1>
// <h1>{{Session::get('email')}}</h1>

// @if ($errors->any())
// <ul class="alert alert-success">
//     @foreach ($errors->all() as $error)
//         <div >{{$error}}</div>
//     @endforeach
// </ul> 
// @endif