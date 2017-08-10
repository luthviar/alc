<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Module;
use App\SectionTraining;
use App\SectionTrainingType;
use App\ContentLearning;
use App\Test;
use App\Training;
use App\Question;
use App\OpsiJawaban;
use App\UserTest;
use Illuminate\Http\Request;

class SectionTrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
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

        //get all section training
        $all_section = SectionTraining::where('id_training', $section->id_training)->get();
        foreach ($all_section as $key => $value) {
            $value['type'] = SectionTrainingType::find($value->id_type);
        }
        //check user jika pernah masuk training ini
        $user = Auth::user()->id;
        $check_user = UserTest::where('id_user',$user)->where('id_training',$section->id_training)->first();
        if(empty($check_user) or  empty($check_user->id_post_test) or $type->id ==2){
            if ($type->id == 1) {
                $test = Test::where('id_section_training',$section->id)->first();
                $questions = Question::where('id_test',$test->id)->get();
                foreach ($questions as $key => $value) {
                    $opsi = OpsiJawaban::where('id_question',$value->id)->get();
                    $value['opsi'] = $opsi;

                }
                $next_section = SectionTraining::where('id_training',$section->id_training)->where('id_type',$type->id+1)->first();
                return view('test-quiz')->with('section',$section)->with('type',$type)->with('test',$test)->with('module',$module)->with('questions',$questions)->with('next_section',$next_section)->with('all_section',$all_section);
            }elseif($type->id == 2){
                $module = Module::all();
                $content = ContentLearning::where('id_section',$id)->get();
                $section = SectionTraining::find($id);
                $training = Training::find($section->id_training);
                $next_section = SectionTraining::where('id_training',$section->id_training)->where('id_type',$type->id+1)->first();
                if (empty($check_user->id_post_test)) {
                    return view('content-learning')->with('module',$module)->with('content',$content)->with('training',$training)->with('next_section',$next_section)->with('all_section',$all_section);
                }else{
                    return view('content-learning')->with('module',$module)->with('content',$content)->with('training',$training)->with('next_section',$next_section)->with('logout',true)->with('all_section',$all_section);
                }
                
            }else{
                $test = Test::where('id_section_training',$section->id)->first();
                $questions = Question::where('id_test',$test->id)->get();
                foreach ($questions as $key => $value) {
                    $opsi = OpsiJawaban::where('id_question',$value->id)->get();
                    $value['opsi'] = $opsi;
                }
                return view('test-quiz')->with('section',$section)->with('type',$type)->with('test',$test)->with('module',$module)->with('questions',$questions)->with('all_section',$all_section);
            }
        }else{
            $module = Module::all();
            $training = Training::find($section->id_training);
            $next_section = SectionTraining::where('id_training',$section->id_training)->where('id_type',2)->first();
            
            return view('test-result')->with('module',$module)->with('training',$training)->with('skor_post_test',$check_user->post_test_score)->with('skor_pre_test',$check_user->pre_test_score)->with('next_section', $next_section)->with('all_section',$all_section);;
        
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
