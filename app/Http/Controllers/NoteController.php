<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluation;
use App\Note;
use App\Presence;
use App\Resultat;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evals = Evaluation::where('user_id', Auth::user()->id)->get();
        return view ('PageProfil.note.note', compact('evals'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eval = Evaluation::find($id);
        $notes = Note::all();
        $presences = Presence::all();
        $resultats = Resultat::all();
        return view ('PageProfil.note.formEvaluation', compact('presences', 'eval', 'notes', 'resultats'));
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
    
            'presence_id'=> 'required|',
            'impression'=> 'required|',
            'savoir'=> 'required|',
            'capacite'=> 'required|',
            'serieux'=> 'required|',
            'note_id'=> 'required|',
            'resultat_id'=> 'required|',
            
        ]);
        $event = Evaluation::find($id);
        $eval = new Evaluation();
        $eval->presence_id = $request->input('presence_id');
        $eval->impression = $request->input('impression');
        $eval->savoir = $request->input('savoir');
        $eval->capacite = $request->input('capacite');
        $eval->serieux = $request->input('serieux');
        $eval->note_id = $request->input('note_id');
        $eval->resultat_id = $request->input('resultat_id');
        $eval->offre_id = $event->offre->id;
        $eval->user_id = $event->offre->user->id;
        $eval->save();

        $event->termine = 1;
        $event->save();

        $resultat = Auth::user();
        $resultat->resultat_id = $request->input('resultat_id');
        $resultat->save();

        return redirect()->route('note.index');
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
