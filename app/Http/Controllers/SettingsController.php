<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Statut;
use App\Role;
use App\Offre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
       
        return view ('PageProfil.settingShow' , compact('users','roles', 'statuts'));
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

        return view('PageProfil.settings', compact('users' , 'roles', 'statuts'));
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
       
        if(Auth::check() && Auth::user()->role_id ==4){
            $request->validate([
        
                'nom' =>'required|string|max:15',
                'prénom' =>'required',
                'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
                'numero' => 'required',
                'adresse' => 'required', 'string',
                'domaine' => 'required',
                'password' => 'required', 'string', 'min:8', 'confirmed',
                'véhicule' =>'required',
                'dispo' =>'required',
                'cv' =>'required',
                'statut_id' =>'required',
                'photo' =>'required'
                
                
            ]);
            }
            elseif(Auth::check() && Auth::user()->role_id ==5){
                $request->validate([
            
                    'nom' =>'required|string|max:15',
                    'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
                    'numero' => 'required',
                    'adresse' => 'required', 'string',
                    'domaine' => 'required',
                    'password' => 'required', 'string', 'min:8', 'confirmed',
                    'date' =>'required',
                    'tva' =>'required',
                    'pNom' =>'required',
                    'pTel' =>'required',
                    'photo'=>'required',
                    
                ]);
                }
            
            
                $users=User::find($id);
                if(Auth::check() && Auth::user()->role_id ==4){
                $image = Storage::disk('public')->put('', $request->file('photo'));
                $users->nom=$request->nom;
                $users->email = $request->email;
                $users->password =Hash::make($request->password);
                $users->photo=$image;
                $users->numero=$request->numero;
                $users->adresse=$request->adresse;
                $cv = Storage::disk('public')->put('', $request->file('cv'));
                $users->prénom=$request->prénom;
                $users->dispo=$request->dispo;
                $users->cv=$cv;
                $users->statut_id=$request->statut_id;
                $users->véhicule=$request->véhicule;
            }elseif(Auth::check() && Auth::user()->role_id ==5){
                $image = Storage::disk('public')->put('', $request->file('photo'));
                $users=User::find($id);
                $users->nom=$request->nom;
                $users->email = $request->email;
                $users->password =Hash::make($request->password);
                $users->photo=$image;
                $users->numero=$request->numero;
                $users->adresse=$request->adresse;
                $users->date=$request->date;
                $users->tva=$request->tva;
                $users->pNom=$request->pNom;
                $users->pTel=$request->pTel;
            }
            $users->save();
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
