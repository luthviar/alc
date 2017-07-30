<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Employee;
use App\ScoreSummary;
use App\Personnel;
use App\Department;
use App\Section;
use App\Divisi;
use App\UserTest;
use App\Unit;
use App\Training;
use App\LevelPosition;
use App\Module;
use App\StrukturOrganisasi;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('checkRole', ['except' => [
            'reset_password' , 'reset'
        ]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = Personnel::all();
        $position =  LevelPosition::all();
        $divisi = Divisi::all();
        foreach ($personnels as $key => $personnel) {
            $employee = Employee::where('id_personnel',$personnel->id)->first();
            $personnel['employee'] = $employee;
            $personnel['user'] = User::find($personnel->id_user);
            if (empty($employee)) {
                $personnel['position'] = "-";
                $personnel['divisi'] = "-";
                $personnel['department'] = "-";
            }else{
                foreach ($position as $key => $value) {
                    if ($value->id == $employee->level_position) {
                        $personnel['position'] = $value->nama_level;
                    }
                }
                $struktur = StrukturOrganisasi::find($employee->struktur);
                if (empty($struktur->id_divisi)) {
                    $personnel['divisi'] = "-";
                }else{
                    foreach ($divisi as $key => $value) {
                        if ($value->id_divisi == $struktur->id_divisi) {
                            $personnel['divisi'] = $value->nama_divisi;
                        }
                    }    
                }
                $personnel['department'] = Department::where('id_department',$struktur->id_department)->first();
            }
        }
        return view('list-user')->with('personnels',$personnels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        $section = Section::all();
        $unit = Unit::all();
        $divisi = Divisi::all();
        $level = LevelPosition::all();
        $struktur = StrukturOrganisasi::all();
        return view('ajax')->with('department',$department)->with('section',$section)->with('unit',$unit)->with('divisi',$divisi)->with('level',$level)->with('struktur',$struktur);
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
            'username' => 'required',
            'password' => 'required',
            'is_admin' => 'required',
        ]);

        $id_user = DB::table('users')-> insertGetId(array(
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'is_admin' => $request->is_admin,
            'is_aktif' => 1,
        ));

        

        $id_personnel = DB::table('personnels')-> insertGetId(array(
            'id_user' => $id_user,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tanggal_lahir' => $request->tanggal_lahir,
        ));
        if (empty($request->id_divisi) and empty($request->id_department) and empty($request->id_unit) and empty($request->id_section)) {
            if (empty($request->nik) and empty($request->level_position)) {
                # code...
            }else{
                $id_employee = DB::table('employees')-> insertGetId(array(
                    'id_personnel' => $id_personnel,
                    'nip' => $request->nik,
                    'level_position' => $request->level_position,
                ));    
            }
        }else{
            $id_struktur = null;
            $struktur = StrukturOrganisasi::where('id_divisi',$request->id_divisi)->where('id_department',$request->id_department)->where('id_unit',$request->id_unit)->where('id_section',$request->id_section)->first();
            if (empty($struktur)) {
                
            }else{
                $id_struktur = $struktur->id;
            }
            $id_employee = DB::table('employees')-> insertGetId(array(
                'id_personnel' => $id_personnel,
                'nip' => $request->nik,
                'struktur' => $id_struktur,
                'level_position' => $request->level_position,
            ));
        }


        return redirect('personnel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function show($id_personnel)
    {
        $personnel = Personnel::find($id_personnel);
        $user = User::find($personnel->id_user);
        $personnel['user'] = $user;
        $employee = Employee::where('id_personnel',$id_personnel)->first();
        $personnel['employee'] = $employee;
        if (empty($employee)) {
            $personnel['struktur'] = null;
        }else{
            $struktur = StrukturOrganisasi::find($employee->struktur);
            $personnel['struktur'] = $struktur;
            $personnel['level'] = LevelPosition::find($employee->level_position);
            $personnel['divisi'] = Divisi::where('id_divisi',$struktur->id_divisi)->first();
            $personnel['section'] = Section::where('id_section',$struktur->id_section)->first();
            $personnel['department'] = Department::where('id_department',$struktur->id_department)->first();
            $personnel['unit'] = Unit::where('id_unit',$struktur->id_unit)->first();
        }
        $personnel['score'] = ScoreSummary::where('id_user',$personnel->id_user)->get();
        $personnel['training'] = UserTest::where('id_user',$personnel->id_user)->get();
        foreach ($personnel['training'] as $key => $value) {
            $value['info'] = Training::find($value->id_training);
        }
        return view('view-user')->with('personnel',$personnel);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit($id_personnel)
    {
        $personnel = Personnel::find($id_personnel);
        $user = User::find($personnel->id_user);
        $personnel['user'] = $user;
        $employee = Employee::where('id_personnel',$id_personnel)->first();
        $personnel['employee'] = $employee;
        if (empty($employee)) {
            $personnel['struktur'] = null;
        }else{
            $struktur = StrukturOrganisasi::find($employee->struktur);
            $personnel['struktur'] = $struktur;
            $personnel['level'] = LevelPosition::find($employee->level_position);
            $personnel['divisi'] = Divisi::where('id_divisi',$struktur->id_divisi)->first();
            $personnel['section'] = Section::where('id_section',$struktur->id_section)->first();
            $personnel['department'] = Department::where('id_department',$struktur->id_department)->first();
            $personnel['unit'] = Unit::where('id_unit',$struktur->id_unit)->first();
        }
        $department = Department::all();
        $section = Section::all();
        $unit = Unit::all();
        $divisi = Divisi::all();
        $level = LevelPosition::all();
        return view('edit-user')->with('personnel',$personnel)->with('department',$department)->with('section',$section)->with('unit',$unit)->with('divisi',$divisi)->with('level',$level);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this -> validate($request, [
            'username' => 'required',
            'is_admin' => 'required',
        ]);

        $personnel = Personnel::find($request->id_personnel);
        $user = User::find($personnel->id_user);
        $user->username = $request->username;
        $user->is_admin = $request->is_admin;
        $user->save();

        $personnel->fname = $request->fname;
        $personnel->lname = $request->lname;
        $personnel->jenis_kelamin = $request->jenis_kelamin;
        $personnel->email = $request->email;
        $personnel->alamat = $request->alamat;
        $personnel->no_hp = $request->no_hp;
        $personnel->tanggal_lahir = $request->tanggal_lahir;
        $personnel->save();
        
        if (empty($request->divisi) and empty($request->department) and empty($request->unit) and empty($request->section)) {
            if (empty($request->nik) and empty($request->level_position)) {
                # code...
            }else{
                if (empty($employee)) {
                    $id_employee = DB::table('employees')-> insertGetId(array(
                        'id_personnel' => $id_personnel,
                        'nip' => $request->nik,
                        'level_position' => $request->level_position,
                    ));   
                }else{
                    $employee = Employee::where('id_personnel',$personnel->id)->first();
                    $employee->nip = $request->nik;
                    $employee->level_position = $request->level_position;
                    $employee->save();
                }
            }
        }else{
            $id_struktur = null;
            $struktur = StrukturOrganisasi::where('id_divisi',$request->divisi)->where('id_department',$request->department)->where('id_unit',$request->unit)->where('id_section',$request->section)->first();
            if (empty($struktur)) {
                $id = DB::table('struktur_organisasis')-> insertGetId(array(
                    'id_divisi' => $request->divisi,
                    'id_department' => $request->department,
                    'id_unit' => $request->unit,
                    'id_section' => $request->section,
                ));
                $id_struktur = $id;
            }else{
                $id_struktur = $struktur->id;
            }
            $employee = Employee::where('id_personnel',$personnel->id)->first();
            if (empty($employee)) {
                $id_employee = DB::table('employees')-> insertGetId(array(
                    'id_personnel' => $request->id_personnel,
                    'nip' => $request->nik,
                    'struktur' => $id_struktur,
                    'level_position' => $request->level_position,
                ));
            }else{
                $employee->nip = $request->nik;
                $employee->struktur = $id_struktur;
                $employee->level_position = $request->level_position;
                $employee->save();
            }
        }


        return redirect('personnel');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnel $personnel)
    {
        //
    }

    public function nonactive($id){
        $personnel = Personnel::find($id);
        $user = User::find($personnel->id_user);
        $user->is_aktif = 0;
        $user->save();

        return redirect('/personnel');
    }

    public function active($id){
        $personnel = Personnel::find($id);
        $user = User::find($personnel->id_user);
        $user->is_aktif = 1;
        $user->save();

        return redirect('/personnel');
    }

    public function reset_password(Request $request){
        $user = User::find($request->id_user);
        $user->password = bcrypt($request->newpassword);
        $user->save();
        Auth::logout();
        return redirect('/login');
    }

    public function reset(){
        $module = Module::all();

        return view('reset-password')->with('module',$module);
    }
}
