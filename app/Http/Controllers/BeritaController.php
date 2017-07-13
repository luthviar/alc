<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Personnel;
use App\NewsReplie;
use App\Module;
use Illuminate\Http\Request;

class BeritaController extends Controller
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
        return view('test.create-berita');
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
            'id_user' => 'required',
            'can_reply' => 'required',
        ]);

        $berita = new Berita;
        $berita->id_user = $request->id_user;
        $berita->title = $request->title;
        $berita->content = $request->content;
        $berita->can_reply = $request->can_reply;
        $berita->image = $request->image;
        $berita->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id_berita)
    {
        $berita = Berita::find($id_berita);
        $berita['user'] = Personnel::where('id_user',$berita->id_user)->first();
        $replies = null;
        if ($berita->can_reply == 1) {
            $replies = NewsReplie::where('id_news',$id_berita)->get();
            if (empty($replies)) {
                # code...
            }else{
                foreach ($replies as $key => $value) {
                    $value['user'] = Personnel::where('id_user',$value->id_user)->first();
                }
            }
        }
        $module = Module::all();
        return view('view-news')->with('module',$module)->with('news',$berita)->with('replies',$replies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
