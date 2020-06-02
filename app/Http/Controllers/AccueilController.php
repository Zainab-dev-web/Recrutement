<?php

namespace App\Http\Controllers;
use App\Carousel;
use App\Service;
use App\Work;
use App\Info;
use App\User;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel=Carousel::all();
        $works=Work::find(1);
        $service=Service::inRandomOrder()->take(3)->get();
        $info=Info::find(1);
        $userPrincipal =User::where('role_id',1)->first();
        $UserSecondaire =User::inRandomOrder()->where('role_id','!=',1)->where('role_id','!=',5)->take(3)->get();
        return view('PageAccueil.pageAccueil' , compact('carousel', 'works' , 'service', 'info', 'userPrincipal', 'UserSecondaire'));
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
        //
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
        //
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
