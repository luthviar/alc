<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use App\Berita;
use App\Personnel;
use App\NewsReplie;
use App\Module;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'readMore', 'show'
        ]]);

        $this->middleware('checkRole', ['except' => [
            'readMore' , 'show'
        ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function readMore()
    {
        $news = Berita::all();
        $module = Module::all();
        return view('newsboard')->with('berita',$news)->with('module',$module);
    }

    public function index()
    {
        return view('list-news');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-news');
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
        if (empty($request->file('image'))) {
            $file = $request->file('image');
            $destinationPath = 'uploads';
            $movea = $file->move($destinationPath,$file->getClientOriginalName());
            $url = "uploads/{$file->getClientOriginalName()}";
            $berita = new Berita;
            $berita->id_user = $request->id_user;
            $berita->title = $request->title;
            $berita->content = $request->content;
            $berita->can_reply = $request->can_reply;
            $berita->image = $url;
            $berita->save();
        }else{
            $berita = new Berita;
            $berita->id_user = $request->id_user;
            $berita->title = $request->title;
            $berita->content = $request->content;
            $berita->can_reply = $request->can_reply;
            $berita->image = null;
            $berita->save();

        }
        
        return redirect('berita');
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
        $recent = DB::table('beritas')->orderBy('id', 'desc')->take(6)->get();
        $module = Module::all();
        return view('view-news')->with('module',$module)->with('news',$berita)->with('replies',$replies)->with('beritas',$recent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id_berita)
    {
        $berita = Berita::find($id_berita);
        return view('edit-news')->with('news',$berita);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $file = $request->file('image');
        if (empty($file)) {
            $berita = Berita::find($request->id_news);
            $berita->id_user = $request->id_user;
            $berita->title = $request->title;
            $berita->content = $request->content;
            $berita->can_reply = $request->can_reply;    
            $berita->save();
        }else{
            $destinationPath = 'uploads';
            $movea = $file->move($destinationPath,$file->getClientOriginalName());
            $url = "uploads/{$file->getClientOriginalName()}";
            
            $berita = Berita::find($request->id_news);
            $berita->id_user = $request->id_user;
            $berita->title = $request->title;
            $berita->content = $request->content;
            $berita->can_reply = $request->can_reply;
            $berita->image = $url;    
            $berita->save();    
        }
        

        return redirect('berita');
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

    public function active($id){
        $berita = Berita::find($id);
        $berita->can_reply = 1;
        $berita->save();

        return redirect('berita');
    }

    public function nonactive($id){
        $berita = Berita::find($id);
        $berita->can_reply = 0;
        $berita->save();

        return redirect('berita');
    }
}
