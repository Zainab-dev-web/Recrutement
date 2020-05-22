<?php

namespace App\Http\Controllers;

use App\Conctat;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contactmailtemp;
use Illuminate\Support\Facades\Validator;

class ConctatController extends Controller
{
    public function __construct(){
        $this->middleware('isAdmin')->except('store', 'index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $contact=Contact::find(1);
        return view('PageContact.pageContact' , compact('contact'));
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
        $validator = Validator::make($request->all(), [
            'nom'=> 'required',  
            'email'=> 'required',  
            'sujet' => 'required',
            'msg' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->to(url()->previous() . '#contactus')
                        ->withErrors($validator)
                        ->withInput();
        }

        $contactmail = new Conctat();
        $contactmail->nom = $request->input('nom');
        $contactmail->email = $request->input('email');
        $contactmail->sujet = $request->input('sujet');
        $contactmail->msg = $request->input('msg');
        $contactmail->save();
        
        Mail::to($request->input('email'))->send(new Contactmailtemp($contactmail));
        return redirect()->to(url()->previous() . '#contactus')->with('send', 'Votre message a bien été envoyé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conctat  $conctat
     * @return \Illuminate\Http\Response
     */
    public function show(Conctat $conctat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conctat  $conctat
     * @return \Illuminate\Http\Response
     */
    public function edit(Conctat $conctat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conctat  $conctat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conctat $conctat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conctat  $conctat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conctat $conctat)
    {
        //
    }
}
