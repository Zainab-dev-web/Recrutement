<?php

namespace App\Http\Controllers;

use App\Profilgestion;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfilgestionController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user();
        return view('profilGestion.index' , compact('user'));  
   
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
     * @param  \App\Profilgestion  $profilgestion
     * @return \Illuminate\Http\Response
     */
    public function show(Profilgestion $profilgestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profilgestion  $profilgestion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= Auth::user($id);
        return view('profilGestion.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profilgestion  $profilgestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom'=> 'required|',
            'email'=> 'required|',
            'photo'=> 'required|',
            'password'=> 'required|',
           
        ]);
  
            $image = Storage::disk('public')->put('', $request->file('photo'));
            $user = User::find(Auth::id());
            $user->photo =$image;
            $user->nom =$request->input('nom');
            $user->email =$request->input('email');
            $user->password =Hash::make($request->password);
            
            
            $user->save();
    
            return redirect()->route('profilGestion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profilgestion  $profilgestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profilgestion $profilgestion)
    {
        //
    }
}
