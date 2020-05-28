<?php

namespace App\Http\Controllers;

use App\Candidat;
use App\Offre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::all();
        $candidats = Candidat::where('accept', 0)->get();
        $allcandidats = Candidat::all();
        return view ('PageProfil.candidature.candidat', compact('offres', 'candidats', 'allcandidats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidats = Candidat::where('user_id', Auth::user()->id)->get();
        return view ('PageProfil.candidature.voscandidat', compact('candidats'));
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
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidat $candidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */

     // POSTULER
    public function update(Request $request, $id)
    {
        
        $offre = Offre::find($id);
        $candidat = new Candidat();
        $candidat->offre_id = $offre->id;
        $candidat->user_id = Auth::id();
        $candidat->date_id = null;
        $candidat->accept = 0;
        $candidat->save();
        return redirect()->back();
    }

    // ACCEPTER
    public function accepter(Request $request, $id)
    {   
        $candidat = Candidat::find($id);
        $candidat->offre_id = $candidat->offre_id;
        $candidat->user_id = $candidat->user_id;
        $candidat->accept = 1;
        $candidat->save();
        return view ('PageProfil.candidature.formCandidat', compact('candidat'));
    }

       // REFUSER
       public function refuser(Request $request, $id)
       {
        $candidat = Candidat::find($id);
        $candidat->offre_id = $candidat->offre_id;
        $candidat->user_id = $candidat->user_id;
        $candidat->accept = 2;
        $candidat->save();
        return redirect()->route('candidat.index');
       }

       


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat)
    {
        //
    }
}
