<?php

namespace App\Http\Controllers;

use App\Choix;
use Illuminate\Http\Request;

class ChoixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register_form.choix');
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
     * @param  \App\Choix  $choix
     * @return \Illuminate\Http\Response
     */
    public function show(Choix $choix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Choix  $choix
     * @return \Illuminate\Http\Response
     */
    public function edit(Choix $choix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Choix  $choix
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Choix $choix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Choix  $choix
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choix $choix)
    {
        //
    }
}
