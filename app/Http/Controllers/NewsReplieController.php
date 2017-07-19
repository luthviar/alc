<?php

namespace App\Http\Controllers;

use App\NewsReplie;
use Illuminate\Http\Request;

class NewsReplieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        
    }
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
        $reply = new NewsReplie;
        $reply->id_news = $request->id_news;
        $reply->id_user = $request->id_user;
        $reply->title = $request->title;
        $reply->content = $request->content;
        $reply->save();


        return redirect()->action(
            'BeritaController@show', ['id' => $request->id_news]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsReplie  $newsReplie
     * @return \Illuminate\Http\Response
     */
    public function show(NewsReplie $newsReplie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsReplie  $newsReplie
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsReplie $newsReplie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsReplie  $newsReplie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsReplie $newsReplie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsReplie  $newsReplie
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsReplie $newsReplie)
    {
        //
    }
}
