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


    public function updateUser(Request $request, $id){
        if(Auth::check() && Auth::user()->role_id ==4){
            $validator = Validator::make($request->all(), [
    
            'nom' =>'required|string|max:15',
            'prénom' =>'required',
            'email' => 'required|string|email|max:255|unique:users',
            'numero' => 'required',
            'adresse' => 'required|string',
            'domaine' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'véhicule' =>'required',
            'dispo' =>'required',
            'cv' =>'required',
            'statut_id' =>'required',
            'photo'=>'required',
            
            
        ]);
        }
        elseif(Auth::check() && Auth::user()->role_id ==5){
            $validator = Validator::make($request->all(), [
        
                'nom' =>'required|string|max:15',
                'email' => 'required|string|email|max:255|unique:users',
                'prénom' =>'required',
                'numero' => 'required',
                'adresse' => 'required|string',
                'domaine' => 'required',
                'password' => 'required|string|min:8|confirmed',
                'date' =>'required',
                'tva' =>'required',
                'pNom' =>'required',
                'pTel' =>'required',
                'photo'=>'required',
                
            ]);
            }
        
        
        
        $image = Storage::disk('public')->put('', $request->file('photo'));
        $users=User::find($id);
        $users->photo=$image;$users->nom=$request->nom;
        $users->email = $request->email;
        $users->domaine=$request->domaine;
        $users->numero=$request->numero;
        $users->adresse=$request->adresse;
        if(Auth::check() && Auth::user()->role_id ==4){
           
            $cv = Storage::disk('public')->put('', $request->file('cv'));
            $users->dipso=$request->dipso;
            $users->prénom=$request->prénom;
            $users->cv=$cv;
            $users->statut_id=$request->statut_id;
            $users->véhicule=$request->véhicule;
        }elseif(Auth::check() && Auth::user()->role_id ==5){
            
            $users->date=$request->date;
            $users->tva=$request->tva;
            $users->pNom=$request->pNom;
            $users->pTel=$request->pTel;
        }
        $users->save();
        return redirect()->route('user.index');
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
