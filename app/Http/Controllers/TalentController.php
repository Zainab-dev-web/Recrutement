<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct(){
    //     $this->middleware('isConnect')->except('index', 'show');
    // }
    public function index()
    {
        $talents = User::orderby('id', 'asc')->where('role_id', 4)->paginate(3);
        return view('PageTalents.pageTalents', compact('talents'));
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
     * @param  \App\User  $talent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $talent = User::find($id);
        
        return view ('PageTalents.pageperso.pageperso', compact('talent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $talent
     * @return \Illuminate\Http\Response
     */
    public function edit(Talent $talent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $talent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $talent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talent $talent)
    {
        //
    }
    public function search(Request $request){
        $searchDomaine = $request->input('search');
        $talents = User::where('domaine','LIKE', '%'.$searchDomaine.'%')->where('role_id', 4)->paginate(3);
       
    
        return view('PageTalents.pageTalents',compact('searchDomaine', 'talents'));
    }
    public function download($id)
    {
        $cv = User::find($id);
        return Storage::disk('public')->download($cv->cv, $cv->nom);
    }
}
