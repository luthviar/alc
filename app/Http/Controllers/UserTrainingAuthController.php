<?php

namespace App\Http\Controllers;

use App\UserTrainingAuth;
use App\Personnel;
use App\Employee;
use App\StrukturOrganisasi;
use App\Department;
use App\Training;
use Illuminate\Http\Request;

class UserTrainingAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_auth = UserTrainingAuth::all();
        foreach ($user_auth as $key => $value) {
            //get personnel and departmen
            $user_auth['personnel'] = Personnel::where('id_user',$value->id_user)->first();
            $employee = Employee::where('id_personnel', $user_auth['personnel']->id)->first();
            $struktur = StrukturOrganisasi::find($employee->struktur);
            $user_auth['personnel-department'] = Department::where('id_department',$struktur->id_department)->first();
            //get training
            $user_auth['training'] = Training::find($value->id_training);
            $user_auth['training-department'] = Department::where('id_department',$user_auth['training']->id_department);
        }
        return view('user-training-auth')->with('user_auth',$user_auth);
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
     * @param  \App\UserTrainingAuth  $userTrainingAuth
     * @return \Illuminate\Http\Response
     */
    public function show(UserTrainingAuth $userTrainingAuth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserTrainingAuth  $userTrainingAuth
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTrainingAuth $userTrainingAuth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserTrainingAuth  $userTrainingAuth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTrainingAuth $userTrainingAuth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserTrainingAuth  $userTrainingAuth
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTrainingAuth $userTrainingAuth)
    {
        //
    }

    public function active($id){
        $user_auth = UserTrainingAuth::find($id);
        $user_auth->auth = 1;
        $user_auth->save();

        return redirect('access');
    }

    public function nonactive($id){
        $user_auth = UserTrainingAuth::find($id);
        $user_auth->auth = 0;
        $user_auth->save();

        return redirect('access');
    }
}
