<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Offre;
use App\Role;
use App\Candidat;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $offres = Offre::all();
        $candidats = Candidat::where('accept', 0)->get();
        $candid = Candidat::where('user_id', Auth::user()->id)->get();
        $match = Offre::where('user_id', Auth::user()->id)->get();
        $offr = Offre::where('user_id', Auth::user()->id)->get();
        return view('PageProfil.pageProfil', compact('users', 'offres', 'candidats' , 'candid', 'match', 'offr'));
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

        $users=User::find($id);
        $roles=Role::all();
       
    return view ('PageProfil.show' , compact('users','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'statut_id'=> 'required',
        ]);
        $talent = User::find($id);
        $talent->statut_id = $request->input('statut_id');
        $talent->nom = $talent->nom;
        $talent->prénom = $talent->prénom;
        $talent->date = $talent->date;
        $talent->tva = $talent->tva;
        $talent->pNom = $talent->pNom;
        $talent->pTel = $talent->pTel;
        $talent->photo = $talent->photo;
        $talent->email = $talent->email;
        $talent->numero = $talent->numero;
        $talent->adresse = $talent->adresse;
        $talent->véhicule = $talent->véhicule;
        $talent->dispo = $talent->dispo;
        $talent->cv = $talent->cv;
        $talent->valid = $talent->valid;
        $talent->role_id = $talent->role_id;
        $talent->password = $talent->password;
        $talent->save();
        return redirect()->route('profil.index');
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
