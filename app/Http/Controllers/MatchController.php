<?php

namespace App\Http\Controllers;


use App\Offre;
use App\User;
use App\Statut;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

       
        $users=User::all();
        $statuts=Statut::all();
        $offres=Offre::all();
        return view('match.index', compact( 'users' , 'statuts' , 'offres'));
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

         
        
        // $match->users()->attach($request->user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matchs=Offre::all()->where('id',$id);
        $users=User::all();
        $offres=Offre::all();
        return view ('match.show' , compact('matchs','users' , 'offres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

            $matchs=Offre::find($id);
            $users=User::all();
            $statuts=Statut::all();
          
            return view('match.edit', compact('matchs' , 'users' , 'statuts'));
    
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        // $request->validate([
    
        //     'offre_id'=> 'required|',
        //     'match_id'=> 'required|',
         
            
        // ]);
       
            $match=Offre::find($id);
            $match->user_id=$match->user_id;
            $match->save();
            $match->matchs()->detach();
            $match->matchs()->attach($request->match);
            return redirect()->route('match.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        //
    }
}
