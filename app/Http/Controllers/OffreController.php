<?php

namespace App\Http\Controllers;

use App\Offre;
use App\Statut;
use App\Candidat;
use App\User;
use App\Role;
use App\Match;
use App\Entreprise;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OffreController extends Controller
{

    public  function  __construct() {
        $this->middleware('isValid')->only('create', 'store', 'update', 'destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::orderby('id', 'asc')->paginate(3);
        $entreprises = User::where('role_id', 5)->get();
        return view('PageOffres.pageOffres', compact('offres', 'entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuts = Statut::all();
        return view ('PageProfil.formOffre.formOffre', compact('statuts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'poste'=> 'required',
            'lieu'=> 'required',
            'statut_id'=> 'required',
            'description'=> 'required',
            'qualite'=> 'required',
        ]);
        $offre = new Offre();
        $offre->user_id = Auth::user()->id;
        $offre->statut_id = $request->input('statut_id');
        $offre->poste = $request->input('poste');
        $offre->lieu = $request->input('lieu');
        $offre->description = $request->input('description');
        $offre->qualite = $request->input('qualite');
        $offre->save();
        return redirect()->route('profil.index');
     
    }

    public function searchoffre($id) {
        $offres = Offre::where('user_id', $id)->orderby('id', 'asc')->paginate(3);
        $entreprises = User::where('role_id', 5)->get();
        return view('PageOffres.pageOffres', compact('offres', 'entreprises'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offre = Offre::find($id);
        $candidats = Candidat::where('accept', 0)->get();
        $candidatures = Candidat::where('user_id', Auth::user()->id)->where('offre_id', $offre->id)->get();
        return view ('PageOffres.showOffres', compact('offre', 'candidats', 'candidatures', 'offrecandidat'));
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
        $offre->qualite = $request->input('qualite');
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
	    return redirect()->route('profil.index');
    }
    public function search(Request $request){
        $searchOffre = $request->input('search');
        $offres = Offre::where('poste','LIKE', '%'.$searchOffre.'%')->paginate(3);
        $entreprises = User::where('role_id', 5)->get();
    
        return view('PageOffres.pageOffres',compact('offre','searchOffre', 'offres', 'entreprises'));
    }
}
