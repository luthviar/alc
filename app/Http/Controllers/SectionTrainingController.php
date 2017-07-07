<?php

namespace App\Http\Controllers;

use DB;
use App\Module;
use App\SectionTraining;
use App\SectionTrainingType;
use App\Test;
use App\Question;
use App\OpsiJawaban;
use Illuminate\Http\Request;

class SectionTrainingController extends Controller
{
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SectionTraining  $sectionTraining
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module  = Module::all();
        $section = SectionTraining::find($id);
        $type = SectionTrainingType::find($section->id_type);
        if ($type->id == 1) {
            $test = Test::where('id_section_training',$section->id)->first();
            $questions = Question::where('id_test',$test->id)->get();
            foreach ($questions as $key => $value) {
                $opsi = OpsiJawaban::where('id_question',$value->id)->get();
                $value['opsi'] = $opsi;

            }
            return view('test-quiz')->with('section',$section)->with('type',$type)->with('test',$test)->with('module',$module)->with('questions',$questions);
        }else{

        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SectionTraining  $sectionTraining
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionTraining $sectionTraining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SectionTraining  $sectionTraining
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionTraining $sectionTraining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SectionTraining  $sectionTraining
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionTraining $sectionTraining)
    {
        //
    }
}
