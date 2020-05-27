<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;
use App\Candidat;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidats = Candidat::all();
        return view ('PageProfil.propoDate.propoDate', compact('candidats'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    // REFUSER
    public function refuser(Request $request, $id)
    {
     $candidat = Candidat::find($id);
     $candidat->offre_id = $candidat->offre_id;
     $candidat->user_id = $candidat->user_id;
     $candidat->accept = 2;
     $candidat->save();
     return redirect()->route('date.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidat = Candidat::find($id);
        return view ('PageProfil.propoDate.formDate', compact('candidat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $candidat = Candidat::find($id);
        $date= new Date();
        $date->date1 = $request->input('date1');
        $date->date2 = $request->input('date2');
        $date->date3 = $request->input('date3');
        $date->save();
        $candidat->date_id = $date->id;
        $candidat->save();
        return redirect()->route('candidat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
