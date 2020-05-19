<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index(){

        $users=User::all();
        return view('user.index', compact('users'));
    }

    public function edit($id){
        $user=User::find($id);
        $roles=Role::all();
        return view('user.edit', compact('user' , 'roles'));

    }
    public function update(Request $request , $id){

        $request->validate([
    
            'nom'=> 'required|',
            'email'=> 'required|',
            'photo'=> 'required|',
            'role_id'=> 'required|',
            'password'=> 'required|',
            
        ]);
        
        $image = Storage::disk('public')->put('', $request->file('photo'));
        $user=User::find($id);
        $user->nom=$request->nom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->photo=$image;
        $user->role_id= $request->role_id;
        $user->valid=$request->valid;
        $user->save();
        return redirect()->route('user.index');

    }

    public function show($id){
        $user=User::find($id);
        $user->nom = $user->nom;
        $user->email=$user->email;
        $user->password = $user->password;
        $user->role_id=$user->role_id;
        $user->photo=$user->photo;
        $user->valid=1;
        $user->save();
        return redirect()->route('user.index');
    }
    public function search(Request $request){
        $searchUser = $request->input('search');
        $users = User::where('id','>',1)->where('nom','LIKE', '%'.$searchUser.'%')->get();
       

        return view('user.index',compact('users','searchUser'));
    }
}