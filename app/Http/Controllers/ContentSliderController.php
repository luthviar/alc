<?php

namespace App\Http\Controllers;

use App\ContentSlider;
use App\Module;
use Illuminate\Http\Request;

class ContentSliderController extends Controller
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
        return view('test.create-slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required',
            'content' => 'required',
            'is_active' => 'required',
        ]);

        $slider = new ContentSlider;
        $slider->is_activ = $request->is_active;
        $slider->title = $request->title;
        $slider->content = $request->content;
        $slider->image = $request->image;
        $slider->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContentSlider  $contentSlider
     * @return \Illuminate\Http\Response
     */
    public function show($id_contentSlider)
    {
        $slider = ContentSlider::find($id_contentSlider);
        $module = Module::all();
        return view('view-slider')->with('slider', $slider)->with('module',$module);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContentSlider  $contentSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(ContentSlider $contentSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContentSlider  $contentSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContentSlider $contentSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContentSlider  $contentSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContentSlider $contentSlider)
    {
        //
    }
}
