<?php

namespace App\Http\Controllers;

use App\Replie;
use Illuminate\Http\Request;

class ReplieController extends Controller
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
        $reply = new Replie;
        $reply->id_forum = $request->id_forum;
        $reply->id_user = $request->id_user;
        $reply->title = $request->title;
        $reply->content = $request->content;
        $reply->save();


        return redirect()->action(
            'ForumController@show', ['id' => $request->id_forum]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Replie  $replie
     * @return \Illuminate\Http\Response
     */
    public function show(Replie $replie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Replie  $replie
     * @return \Illuminate\Http\Response
     */
    public function edit(Replie $replie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Replie  $replie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Replie $replie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Replie  $replie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Replie $replie)
    {
        //
    }
}
