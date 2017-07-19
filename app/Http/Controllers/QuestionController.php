<?php

namespace App\Http\Controllers;

use App\Question;
use App\OpsiJawaban;
use App\SectionTraining;
use App\Test;
use DB;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('checkRole');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_test = $request->id_test;
        $id_question = DB::table('questions')-> insertGetId(array(
            'id_test' => $request->id_test,
            'pertanyaan' => $request->question,
        ));
        $count= 0;
        foreach ($request->opsi as $key => $value) {
            if ($count == $request->isTrue) {
                $opsi = new OpsiJawaban;
                $opsi->id_question = $id_question;
                $opsi->isi_opsi = $value;
                $opsi->is_true = 1;
                $opsi->save();
            }else{
                $opsi = new OpsiJawaban;
                $opsi->id_question = $id_question;
                $opsi->isi_opsi = $value;
                $opsi->is_true = 0;
                $opsi->save();
            }
            $count +=1;
        }
        $test = Test::find($request->id_test);
        $test->jumlah_soal +=  1;
        $test->save(); 

        $question = Question::where('id_test',$request->id_test)->get();
        foreach ($question as $key => $value) {
            $value['opsi'] = OpsiJawaban::where('id_question',$value->id)->get();
        }
        $section = SectionTraining::find($test->id_section_training);
        if ($section->id_type == 1) {
            return view('add-question')->with('id_test', $id_test)->with('questions',$question)->with('time',$request->time)->with('id_training',$request->id_training);
        }else{
            return view('add-question-post-test')->with('id_test', $id_test)->with('questions',$question)->with('time',$request->time)->with('id_training',$request->id_training);
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
