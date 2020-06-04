<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Offre;
use App\Role;
use App\Statut;
use App\Candidat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ProfilController extends Controller
{

    public  function  __construct() {
        $this->middleware('isValid')->only('index');
    }
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
        $match=Offre::all();
        // $match = Offre::where('user_id', Auth::user()->id)->get();
        return view('PageProfil.pageProfil', compact('users', 'offres', 'candidats' , 'match'));
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
        $statuts=Statut::all();
       
        return view ('PageProfil.show' , compact('users','roles', 'statuts'));
    }


   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::find($id);
        $roles=Role::all();
        $statuts=Statut::all();

        return view('PageProfil.edit', compact('users' , 'roles', 'statuts'));
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
