<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre'=> 'required',
            'icone'=> 'required',
            'description'=> 'required',
        ]);
            
        $service= new Service();
            
           
            $service->titre=$request->titre;
            $service->icone = $request->icone;
            $service->description=$request->description;
            $service->save();
            return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
         $icone=Service::all();
        return view('service.edit', compact('service', 'icone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre'=> 'required|',
            'description'=> 'required|',
            'icone'=> 'required|',
        ]);
        $service=Service::find($id);
        $service->titre=$request->titre;
        $service->icone = $request->icone;
        $service->description=$request->description;
        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id);
        $service->delete();
        return redirect()->route('service.index');
    }
}
