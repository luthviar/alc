<?php

namespace App\Http\Controllers;

use App\Module;
use DB;
use Auth;
use App\Department;
use App\JobFamily;
use App\Question;
use App\OpsiJawaban;
use App\Training;
use App\ContentLearning;
use App\Personnel;
use App\Test;
use App\Employee;
use App\UserTrainingAuth;
use App\StrukturOrganisasi;
use App\SectionTraining;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

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

        $id_user = Auth::user()->id;
        $personnel = Personnel::where('id_user',$id_user)->first();
        $employee = Employee::where('id_personnel',$personnel->id)->first();
        $job_family_user = null;
        if (empty($employee)) {
            
        }else{
            $struktur = StrukturOrganisasi::find($employee->struktur);
            $department_user = Department::where('id_department',$struktur->id_department)->first();
            $job_family_user = JobFamily::find($department_user->id_job_family);
        }
        
        if (empty($training->id_job_family)) {
            $user_auth = UserTrainingAuth::where('id_training',$training->id)->where('id_user',$id_user)->first();
            if ($training->id_module == 4 ) {
                if ($employee->level_position >= 6) {
                    $training['open'] = 1;
                }else{
                    if (empty($user_auth)) {
                        $training['open'] = 0;
                    }else{
                        if($user_auth->auth == 1){
                            $training['open'] = 1;
                        }else{
                            $training['open'] = 2;
                        }
                    }
                }
            }elseif ($training->id_module == 5) {
                
                if (empty($user_auth)) {
                    $training['open'] = 0;
                }else{
                    if($user_auth->auth == 1){
                        $training['open'] = 1;
                    }else{
                        $training['open'] = 2;
                    }
                }
            }else{
                $training['open'] = 1;
            }
            
        }else {
            if ($training->id_module ==3 and $training->id_job_family == $job_family_user->id) {
                $training['open'] = 1;
            }elseif ($training->id_module ==3 and $training->id_job_family != $job_family_user->id) {
                $user_auth = UserTrainingAuth::where('id_training',$training->id)->where('id_user',$id_user)->first();
                if (empty($user_auth)) {
                    $training['open'] = 0;
                }else{
                    if($user_auth->auth == 1){
                        $training['open'] = 1;
                    }else{
                        $training['open'] = 2;
                    }
                    
                }
            }
        }
        
        return view('training')->with('training',$training)->with('module',$module)->with('next_section',$section);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit( $id_training )
    {
        $training = Training::find($id_training);
        $module = Module::all();
        $department = Department::all();

        return view('edit-training-info')->with('module',$module)->with('department',$department)->with('training',$training);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $training = Training::find($request->id_training);
        $training->title        = $request->title;
        $training->description  = $request->description;
        $training->id_module    = $request->module;
        if ($request->module == 3) {
            $training->id_department = $request->department;
            $department = Department::where('id_department',$request->department)->first();
            $training->id_job_family = $department->id_job_family;
        }
        $training->save();

        return redirect()->action(
                'TrainingController@view', ['id' => $training->id]
            );
    }

    public function view( $id_training ){

        $training = Training::find($id_training);
        $training['module'] = Module::find($training->id_module);
        if (!empty($training->id_department)) {
            $training['department'] = Department::where('id_department',$training->id_department)->first();
        }
        $section = SectionTraining::where('id_training',$id_training)->get();
        foreach ($section as $key => $value) {
            if ($value->id_type == 1) {
                $training['pretest'] = Test::where('id_section_training', $value->id)->first();
                $training['pretest-question'] = Question::where('id_test', $training['pretest']->id)->get();
                foreach ($training['pretest-question'] as $key => $ques) {
                    $ques['opsi'] = OpsiJawaban::where('id_question', $ques->id)->get();
                }
            }elseif ($value->id_type == 2) {
                $training['content'] = ContentLearning::where('id_section', $value->id)->get();
            }elseif ($value->id_type == 3) {
                $training['posttest'] = Test::where('id_section_training', $value->id)->first();
                $training['posttest-question'] = Question::where('id_test', $training['posttest']->id)->get();
                foreach ($training['posttest-question'] as $key => $ques) {
                    $ques['opsi'] = OpsiJawaban::where('id_question', $ques->id)->get();
                }
            }
        }

        return view('view-training')->with('training', $training);
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

    public function publish ($id_training){
        $training = Training::find($id_training);
        $training->is_publish = 1;
        $training->save();
        return redirect('/training');
    }

    public function deactive ($id_training){
        $training = Training::find($id_training);
        $training->is_publish = 0;
        $training->save();
        return redirect('/training');
    }
}
