<?php

namespace App\Http\Controllers;

use App\Module;
use App\Department;
use App\JobFamily;
use App\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
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
       $module = Module::all();
       $jobs = JobFamily::all();
       $department = Department::all();
       return view('test.create-training')->with('JobFamily', $jobs)->with('module', $module)->with('department',$department);
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
            'module' => 'required',
            'title' => 'required',
        ]);
        
        if ($request->module == 3) {
            $department = Department::where('id_department',$request->department)->first();
            $job_family = $department->id_job_family;
            $training = new Training;
            $training->title = $request->title;
            $training->description = $request->desc;
            $training->id_module = $request->module;
            $training->enroll_key = $request->enroll_key;
            $training->id_department = $request->department;
            $training->id_job_family = $job_family;
            $training->save();
        }else{
            $training = new Training;
            $training->title = $request->title;
            $training->description = $request->desc;
            $training->id_module = $request->module;
            $training->enroll_key = $request->enroll_key;
            $training->id_department = $request->department;
            $training->save();
        }

        
        return redirect('module');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show($training)
    {
        $training = Training::find($training);
        return view('test.detail-training')->with('training',$training);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        //
    }
}
