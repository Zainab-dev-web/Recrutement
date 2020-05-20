<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=Contact::all();
        return view('contactInfo.index', compact('contact'));
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact=Contact::find($id);
        return view('contactInfo.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
    
            'adresse'=> 'required|',
            'ville'=> 'required|',
            'rue'=> 'required|',
            'code'=> 'required|',
            'numero'=> 'required|',
            'Ndispo'=> 'required|',
            'email'=> 'required|',
            'Edispo'=> 'required|',
            
        ]);
        
        $contact=Contact::find($id);
        $contact->adresse=$request->adresse;
        $contact->ville=$request->ville;
        $contact->rue=$request->rue;
        $contact->code=$request->code;
        $contact->numero=$request->numero;
        $contact->Ndispo=$request->Ndispo;
        $contact->email=$request->email;
        $contact->Edispo=$request->Edispo;
        $contact->save();
        return redirect()->route('contactInfo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
