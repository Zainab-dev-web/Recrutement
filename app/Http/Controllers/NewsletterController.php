<?php

namespace App\Http\Controllers;

use App\Newsletter;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{


    public function __construct(){
        $this->middleware('isAdmin')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletter=Newsletter::all();
        return view('newsletter.index', compact('newsletter'));
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
            'newemail'=> 'required|email|unique:newsletters,email'
        ]);

        if ($validator->fails()) {
            return redirect()->to(url()->previous() . '#newsletter')
                        ->withErrors($validator)
                        ->withInput();
        }


        $newsletter = new Newsletter();
        $newsletter->email = $request->newemail;
        $newsletter->save();

        Mail::to($request->newemail)->send(new NewsletterMail($newsletter));
        return redirect()->to(url()->previous() . '#newsletter')->with('new', 'Vous êtes bien abonné à la newsletter !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsletter=Newsletter::find($id);
        $newsletter->delete();
        return redirect()->route('newsletter.index');

    }
}
