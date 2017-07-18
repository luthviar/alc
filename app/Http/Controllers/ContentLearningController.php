<?php

namespace App\Http\Controllers;

use App\Module;
use App\ContentLearning;
use App\SectionTraining;
use App\Training;
use DB;
use Illuminate\Http\Request;

class ContentLearningController extends Controller
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

    public function add_content_learning($id_training)
    {
        $section = SectionTraining::where('id_training',$id_training)->where('id_type',2)->first();
        $id_section = null;
        if (empty($section)) {
            $id_section = DB::table('section_trainings')-> insertGetId(array(
                'id_training' => $id_training,
                'id_type' => 2,
            ));
            return view('add-materi-training')->with('contents',null)->with('id_section',$id_section);
        }else{
            $id_section = $section->id;
            return view('add-materi-training')->with('contents',null)->with('id_section',$id_section);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $file = $request->file('file');
        $destinationPath = 'contents';
        $movea = $file->move($destinationPath,$file->getClientOriginalName());
        $url = "/ViewerJS/index.html#../contents/{$file->getClientOriginalName()}";
        $content = new ContentLearning;
        $content->id_section = $request->id_section;
        $content->file_name = $request->file_name;
        $content->url = $url;
        $content->save();

        return redirect()->action(
                'ContentLearningController@get_content_learning', ['id_section' => $request->id_section]
                );
        
    }

    public function get_content_learning($id_section)
    {
        
        $contents = ContentLearning::where('id_section',$id_section)->get();
        $section = SectionTraining::find($id_section);
        $id_training = $section->id_training;
        return view('add-materi-training')->with('contents',$contents)->with('id_section',$id_section)->with('id_training',$id_training);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContentLearning  $contentLearning
     * @return \Illuminate\Http\Response
     */
    public function show($id_section)
    {
        $module = Module::all();
        $content = ContentLearning::where('id_section',$id_section)->get();
        $section = SectionTraining::find($id_section);
        $training = Training::find($section->id_training);
        return view('content-learning')->with('module',$module)->with('content',$content)->with('training',$training);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContentLearning  $contentLearning
     * @return \Illuminate\Http\Response
     */
    public function edit(ContentLearning $contentLearning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContentLearning  $contentLearning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContentLearning $contentLearning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContentLearning  $contentLearning
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContentLearning $contentLearning)
    {
        //
    }
}
