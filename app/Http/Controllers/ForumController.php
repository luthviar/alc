<?php

namespace App\Http\Controllers;

use App\Forum;
use Auth;
use DB;
use App\Module;
use App\Personnel;
use App\JobFamily;
use App\Employee;
use App\Replie;
use App\StrukturOrganisasi;
use App\Department;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //user information
        $id_user = Auth::user()->id;
        $personnel = Personnel::where('id_user',$id_user)->first();
        $employee = Employee::where('id_personnel',$personnel->id)->first();
        $struktur = StrukturOrganisasi::find($employee->struktur);
        $department = Department::where('id_department', $struktur->id_department)->first();
        $job_family = JobFamily::find($department->id_job_family);

        $forum_umum = Forum::where('id_department', null)->where('id_job_family', null)->get();
        foreach ($forum_umum as $key => $value) {
            $value['personnel'] = Personnel::where('id_user',$value->id_user)->first();
            $value['replie'] = Replie::where('id_forum',$value->id)->get();
            if(empty($value['replie'][0])){
                $value['last_reply'] = null;
            }else{
                $value['last_reply'] = DB::table('replies')->where('id_forum',$value->id)->orderBy('id', 'desc')->take(1)->get();
                $value['last_reply_personnel'] = Personnel::where('id_user', $value['last_reply'][0]->id_user)->first();
            }
        }
        $forum_department = Forum::where('id_department',$department->id_department)->get();
        foreach ($forum_department as $key => $value) {
            $value['personnel'] = Personnel::where('id_user',$value->id_user)->first();
            $value['replie'] = Replie::where('id_forum',$value->id)->get();
            if(empty($value['replie'][0])){
                $value['last_reply'] = null;
            }else{
                $value['last_reply'] = DB::table('replies')->where('id_forum',$value->id)->orderBy('id', 'desc')->take(1)->get();
                $value['last_reply_personnel'] = Personnel::where('id_user', $value['last_reply'][0]->id_user)->first();
            }
        }
        $forum_job_family = Forum::where('id_job_family',$department->id_job_family)->get();
        foreach ($forum_job_family as $key => $value) {
            $value['personnel'] = Personnel::where('id_user',$value->id_user)->first();
            $value['replie'] = Replie::where('id_forum',$value->id)->get();
            if(empty($value['replie'][0])){
                $value['last_reply'] = null;
            }else{
                $value['last_reply'] = DB::table('replies')->where('id_forum',$value->id)->orderBy('id', 'desc')->take(1)->get();

                $value['last_reply_personnel'] = Personnel::where('id_user', $value['last_reply'][0]->id_user)->first();

            }
        }

        $module = Module::all();
        return view('view-forum')->with('module',$module)->with('forum_umum', $forum_umum)->with('forum_department',$forum_department)->with('forum_job_family',$forum_job_family)->with('department',$department)->with('job_family',$job_family);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module = Module::all();
        return view('Admin/edit-forum')->with('module',$module);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user = Auth::user()->id;
        $new_forum = new Forum;
        $new_forum->id_user = $id_user;
        $new_forum->can_reply = $request->can_reply;
        $new_forum->title = $request->title;
        $new_forum->content = $request->content;
        $new_forum->id_department = $request->id_department;
        $new_forum->id_job_family = $request->id_job_family;
        $new_forum->save();

        return redirect('forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show($id_forum)
    {
        $forum = Forum::find($id_forum);
        $forum['personnel'] = Personnel::where('id_user',$forum->id_user)->first();
        $forum['replie'] = Replie::where('id_forum',$id_forum)->get();
        foreach ($forum['replie'] as $key => $value) {
            $value['personnel'] = Personnel::where('id_user',$value->id_user)->first();
        }
        $recent = DB::table('forums')->where('id_department',$forum->id_department)->where('id_job_family',$forum->id_job_family)->orderBy('id', 'desc')->take(6)->get();
        $module = Module::all();
        return view('detail-forum')->with('forum',$forum)->with('recent',$recent)->with('module',$module);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
