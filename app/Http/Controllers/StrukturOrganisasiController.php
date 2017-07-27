<?php

namespace App\Http\Controllers;

use App\StrukturOrganisasi;
use App\Department;
use App\Section;
use App\Unit;
use App\Divisi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('checkRole');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktur = StrukturOrganisasi::all();
        foreach ($struktur as $key => $value) {

            $value['department']    = Department::where('id_department',$value->id_department)->first();
            $value['divisi']        = Divisi::where('id_divisi',$value->id_divisi)->first();
            $value['unit']          = Unit::where('id_unit', $value->id_unit)->first();
            $value['section']       = Section::where('id_section',$value->id_section)->first();
            
        }
        return view('list-struktur')->with('struktur',$struktur);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisi     = Divisi::all();
        $unit       = Unit::all();
        $department = Department::all();
        $section    = Section::all();

        return view('add-struktur')->with('divisi', $divisi)->with('unit',$unit)->with('department',$department)->with('section', $section);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $struktur = StrukturOrganisasi::where('id_divisi', $request->id_divisi)->where('id_unit', $request->id_unit)->where('id_department', $request->id_department)->where('id_section', $request->id_section)->first();
        if (empty($struktur)) {
            $new_struktur               = new StrukturOrganisasi;
            $new_struktur->id_divisi    = $request->id_divisi;
            $new_struktur->id_unit      = $request->id_unit;
            $new_struktur->id_department= $request->id_department;
            $new_struktur->id_section   = $request->id_section;
            $new_struktur->save();
        }
        return redirect('struktur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StrukturOrganisasi  $strukturOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function show(StrukturOrganisasi $strukturOrganisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StrukturOrganisasi  $strukturOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(StrukturOrganisasi $strukturOrganisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StrukturOrganisasi  $strukturOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StrukturOrganisasi $strukturOrganisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StrukturOrganisasi  $strukturOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(StrukturOrganisasi $strukturOrganisasi)
    {
        //
    }
}
