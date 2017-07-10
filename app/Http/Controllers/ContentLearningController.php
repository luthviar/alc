<?php

namespace App\Http\Controllers;

use App\Module;
use App\ContentLearning;
use App\SectionTraining;
use App\Training;
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
