<?php

namespace App\Http\Controllers;

use App\Module;
use DB;
use App\Department;
use App\JobFamily;
use App\Training;
use App\SectionTraining;
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
        $training = Training::all();
        foreach ($training as $key => $value) {
            $value['module'] = Module::find($value->id_module);
            $value['department'] = null;
            if ($value->id_module == 3) {
                $value['department'] = Department::where('id_department',$value->id_department)->first();
            }
        }
        return view('list-training')->with('training',$training);
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
       return view('add-training')->with('JobFamily', $jobs)->with('module', $module)->with('department',$department);
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
        $id_training = null;
        if ($request->module == 3) {
            $department = Department::where('id_department',$request->department)->first();
            $job_family = $department->id_job_family;
            $id_training = DB::table('trainings')-> insertGetId(array(
                'title' => $request->title,
                'description' => $request->description,
                'id_module' => $request->module,
                'is_publish' => 0,
                'id_department' => $request->department,
                'id_job_family' => $job_family,
            ));
        }else{
            $id_training = DB::table('trainings')-> insertGetId(array(
                'title' => $request->title,
                'description' => $request->description,
                'id_module' => $request->module,
                'is_publish' => 0,
                'id_department' => $request->department,
            ));
        }

        
        return view('add-question')->with('id_training',$id_training)->with('time',0)->with('questions',null);
    }

    public function add_post_test($id_training)
    {
        
        return view('add-question-post-test')->with('id_training',$id_training)->with('time',0)->with('questions',null);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module = Module::all();
        $training = Training::find($id);
        $section = SectionTraining::where('id_training',$id)->where('id_type','1')->first();
        return view('training')->with('training',$training)->with('module',$module)->with('next_section',$section);
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
