<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conctat;

class FormcontactController extends Controller
{
    public function index()
    {
        $formcontacts=Conctat::all();
        return view('formcontact.index', compact('formcontacts'));
    }
    public function destroy($id){
        $formcontact=Conctat::find($id);
        $formcontact->delete();
        return redirect()->route('formcontact.index');
    }
}
