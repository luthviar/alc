<?php

namespace App\Http\Controllers;

use App\ScoreSummary;
use App\Personnel;
use App\Employee;
use App\Module;
use App\User;
use Illuminate\Http\Request;

class ScoreSummaryController extends Controller
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
        $employee = Employee::all();
        foreach ($employee as $key => $value) {
            //get personnel information
            $value['personnel'] = Personnel::find($value->id_personnel);

            //get score summary of employee
            $value['score'] = ScoreSummary::where('id_user',$value['personnel']->id_user)->orderBy('id', 'desc')->first();
            
            

        }
        return view('list-score-summary')->with('employee',$employee);
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
    public function store(Request $request,$id)
    {
        

        $file = $request->file('score');
        $destinationPath = 'raports';
        $movea = $file->move($destinationPath,$file->getClientOriginalName());
        $url = "/ViewerJS/index.html#../raports/{$file->getClientOriginalName()}";

        $score = new ScoreSummary;
        $score->id_user = $id;
        $score->file_name = $file->getClientOriginalName();
        $score->url_file_pdf = $url;
        $score->save();

        return redirect('raport');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ScoreSummary  $scoreSummary
     * @return \Illuminate\Http\Response
     */
    public function show($id_user)
    {
        $raport = ScoreSummary::where('id_user',$id_user)->orderBy('id','desc')->first();
        $module = Module::all();
        return view('view-raport')->with('module',$module)->with('raport',$raport);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScoreSummary  $scoreSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(ScoreSummary $scoreSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScoreSummary  $scoreSummary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScoreSummary $scoreSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScoreSummary  $scoreSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScoreSummary $scoreSummary)
    {
        //
    }

    public function add_raport($id_user)
    {
        //
    }
}
