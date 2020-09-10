<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $exam = Exam::all();
        return view('exam.studentExam', ['exam' => $exam]);
        dd($exam);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('exam.adminExam');
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
        $request->validate([
            'qname' => ['required', 'string'],
            'op1' => ['required', 'string'],
            'op2' => ['required', 'string' /*'unique:users'*/],
            'op3' => ['required', 'string'],
            'op4' => ['required', 'string'],
            'ans' => ['required', 'string']
        ]);
        $exam = new Exam([
            'qname' => $request->get('qname'),
            'op1' => $request->get('op1'),
            'op2' => $request->get('op2'),
            'op3' => $request->get('op3'),
            'op4' => $request->get('op4'),
            'ans' => $request->get('ans'),  
        ]);
        $exam->save();
        return redirect("exam/create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
        return view('exam.edit',['exam' => $exam]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
        $request->validate([
            'qname' => ['required', 'string'],
            'op1' => ['required', 'string'],
            'op2' => ['required', 'string' /*'unique:users'*/],
            'op3' => ['required', 'string'],
            'op4' => ['required', 'string'],
            'ans' => ['required', 'string']
        ]);
        $exam->qname = $request->get('qname');
        $exam->update();
        return redirect('/exam')->with('success',"The question #$exam->id is updated" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect('/exam')->with('success',"The question #$exam->id is deleted" );
    }
}
