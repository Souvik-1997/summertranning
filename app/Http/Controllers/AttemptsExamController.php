<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Student;
use App\Admin;
use App\Attempts;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AttemptsExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
    // $result_info = Attempts::where('id',$id)->get()->first();
    // print_r($result_info);
    // return view('attempt.result');


   
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

        $yes_ans=0;
        $no_ans=0;
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
                $yes_ans++;
            }
            else
            {
                $result[$data['qname'.$i]]='NO'; 
                $no_ans++;
            }
        }
    }
    // echo "<pre>";
    // print_r($result);
    $res = new Attempts();
    $res->name=Session::get('name');
    $res->yes_ans=$yes_ans;
    $res->no_ans=$no_ans;
    $res->result=json_encode($result);
    $res->save();
    return redirect(url('attempt/show_result/'.$res->id));
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
    public function show_result($id)
    {
            $data['result_info'] = Attempts::where('id',$id)->get()->first();
            return view('attempt.result',$data);
           
    }

}
