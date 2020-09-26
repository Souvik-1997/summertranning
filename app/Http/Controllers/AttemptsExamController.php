<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Attempt;
use App\Student;
use App\Admin;
use Illuminate\Http\Request;

class AttemptsExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $attempt = Attempt::all();
    // return view('attempt.result' /*['attempt' => $attempt]*/);

   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $exam = Exam::all();
        return view('attempt.attemptsExam', ['exam' => $exam]);
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // //
        // $request->validate([
        //     'qname' => ['required', 'string'],
        //     'op1' => ['required', 'string'],
        //     'op2' => ['required', 'string' /*'unique:users'*/],
        //     'op3' => ['required', 'string'],
        //     'op4' => ['required', 'string']
        // ]);

        // $attempt = new Attempt([
        //     'qname' => $request->get('qname'),
        //     'op1' => $request->get('op1'),
        //     'op2' => $request->get('op2'),
        //     'op3' => $request->get('op3'),
        //     'op4' => $request->get('op4')
        // ]);
        // $attempt->save();
    //    echo "<pre>";
    //    print_r($request->all());
        $data = $request->all();
        $result = array();
    for ($i=1; $i <=$request->index ; $i++) 
    { 
        if (isset($data['qname'.$i])) 
        {
            $exam=Exam::where('id',$data['qname'.$i])->get()->first();
            if($exam->ans == $data['ans'.$i] )
            {
                $result[$data['qname'.$i]]='YES';
            }
            else
            {
                $result[$data['qname'.$i]]='NO'; 
            }
        }
    }
    echo "<pre>";
    print_r($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
