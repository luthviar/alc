<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Employee;
use App\ScoreSummary;
use App\Personnel;
use App\Department;
use App\Section;
use App\Divisi;
use App\Unit;
use App\LevelPosition;
use App\StrukturOrganisasi;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
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
            if (empty($employee)) {
                $personnel['position'] = "-";
                $personnel['divisi'] = "-";
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
        return view('add-user')->with('department',$department)->with('section',$section)->with('unit',$unit)->with('divisi',$divisi)->with('level',$level);
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
        if (empty($request->divisi) and empty($request->department) and empty($request->unit) and empty($request->section)) {
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
            $id_employee = DB::table('employees')-> insertGetId(array(
                'id_personnel' => $id_personnel,
                'nip' => $request->nik,
                'struktur' => $id_struktur,
                'level_position' => $request->level_position,
            ));
        }


        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function show(Personnel $personnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnel $personnel)
    {
        //
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
}
