<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Talent;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prénom' => ['required', 'string', 'max:255'],
            'photo' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'numéro' => ['required', 'number'],
            'adresse' => ['required', 'string'],
            'statut_id' => ['required'],
            'véhicule' => ['required'],
            'dispo' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Talent::create([
            'nom' => $data['nom'],
            'prénom' => $data['prénom'],
            'photo' => $data['photo'],
            'email' => $data['email'],
            'numéro' => $data['numéro'],
            'adresse' => $data['adresse'],
            'statut_id' => $data['statut_id'],
            'véhicule' => $data['véhicule'],
            'dispo' => $data['dispo'],
            'cv' => $data['cv'],
            'valid' => 0,
            'role_id' => 4,
            'password' => Hash::make($data['password']),
        ]);
    }
}
