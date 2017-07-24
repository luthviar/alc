<?php

namespace App\Http\Controllers;

use App\ContentSlider;
use App\Module;
use Illuminate\Http\Request;

class ContentSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'show'
        ]]);

        $this->middleware('checkRole', ['except' => [
            'show'
        ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = ContentSlider::all();
        $module = Module::all();
        return view('list-slider')->with('sliders',$slider)->with('module',$module);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-slider');
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
        ]);
        if (empty($file = $request->file('image'))) {
            $slider = new ContentSlider;
            $slider->is_activ = 0;
            $slider->title = $request->title;
            $slider->content = $request->content;
            $slider->save();
        }else{
            $file = $request->file('image');
            $destinationPath = 'uploads';
            $movea = $file->move($destinationPath,$file->getClientOriginalName());
            $url = "uploads/{$file->getClientOriginalName()}";
            $slider = new ContentSlider;
            $slider->is_activ = 0;
            $slider->title = $request->title;
            $slider->content = $request->content;
            $slider->image = $url;
            $slider->save();
        }

        return redirect('slider');
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
    public function edit($id)
    {
        $slider = ContentSlider::find($id);
        return view('edit-slider')->with('slider',$slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContentSlider  $contentSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $file = $request->file('image');
        if (empty($file)) {
            $slider = ContentSlider::find($request->id_slider);
            $slider->is_activ = $request->is_activ;
            $slider->title = $request->title;
            $slider->content = $request->content;
            $slider->save();    
        }else{
            $destinationPath = 'uploads';
            $movea = $file->move($destinationPath,$file->getClientOriginalName());
            $url = "uploads/{$file->getClientOriginalName()}";
            
            $slider = ContentSlider::find($request->id_slider);
            $slider->is_activ = $request->is_activ;
            $slider->title = $request->title;
            $slider->content = $request->content;
            $slider->image = $url;
            $slider->save();    
        }
        

        return redirect('slider');
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

    public function active($id){
        $slider = ContentSlider::find($id);
        $slider->is_activ = 1;
        $slider->save();

        return redirect('slider');
    }

    public function nonactive($id){
        $slider = ContentSlider::find($id);
        $slider->is_activ = 0;
        $slider->save();

        return redirect('slider');
    }
}
