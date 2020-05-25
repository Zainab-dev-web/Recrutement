<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Event;
use App\User;
use App\Presence;
use App\Resultat;
use App\Note;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $evals = Evaluation::all();
        return view ('PageProfil.evaluation.evaluation', compact('events', 'evals'));
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
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        $presences = Presence::all();
        $notes = Note::all();
        $resultats = Resultat::all();
        return view ('PageProfil.evaluation.formEvaluation', compact('event', 'presences', 'notes', 'resultats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
     {
    //     $request->validate([
    //         'presence_id'=> 'required',
    //         'event_id'=>'required',
    //         'user_id'=> 'required',
    //         'impression'=>'required',
    //         'savoir' => 'required',
    //         'capacite' => 'required',
    //         'serieux' => 'required',
    //         'note_id' => 'required'
    //     ]);

        $event = Event::find($id);
        $eval = new Evaluation();
        $eval->presence_id = $request->input('presence_id');
        $eval->impression = $request->input('impression');
        $eval->savoir = $request->input('savoir');
        $eval->capacite = $request->input('capacite');
        $eval->serieux = $request->input('serieux');
        $eval->note_id = $request->input('note_id');
        $eval->resultat_id = $request->input('resultat_id');
        $eval->event_id = $event->id;
        $eval->user_id = $event->user->id;
        $eval->save();
        //
        $eventresult = $event->user;
        $eventresult->resultat_id = $request->input('resultat_id');
        $eventresult->save();

        $event2 = Event::where('offre_id', $event->offre->id);
        dd($event2);
        $event2->delete();
        return redirect()->route('evaluation.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        //
    }
}
