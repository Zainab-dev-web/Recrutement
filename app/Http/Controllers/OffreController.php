<?php

namespace App\Http\Controllers;

use App\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::orderby('id', 'asc')->paginate(3);
        return view('PageOffres.pageOffres', compact('offres'));
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
        $offre = new Offre();
        $offre->entreprise_id = Auth::id();
        $offre->statut_id = $request->input('statut_id');
        $offre->poste = $request->input('poste');
        $offre->lieu = $request->input('lieu');
        $offre->description = $request->input('description');
        $offre->save();
        return  redirect()->route('#');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $offre = Offre::find($id);
        $offre->entreprise_id = $offre->entreprise_id;
        $offre->statut_id = $request->input('statut_id');
        $offre->poste = $request->input('poste');
        $offre->lieu = $request->input('lieu');
        $offre->description = $request->input('description');
        $offre->save();
        return  redirect()->route('#');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offre = Offre::find($id);
       
	    $offre->delete();
	    return redirect()->route('/');
    }
}
