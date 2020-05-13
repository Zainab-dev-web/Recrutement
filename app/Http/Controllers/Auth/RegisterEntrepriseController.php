<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Entreprise;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RegisterEntrepriseController extends Controller
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
        $storage=Storage::disk('public')->put('', $data['logo']);

        return Entreprise::create([
            'nom' => $data['nom'],
            'date' => $data['date'],
            'tva' => $data['tva'],
            'domaine' => $data['domaine'],
            'numero' => $data['numero'],
            'adresse' => $data['adresse'],
            'logo' => $storage,
            'pNom' => $data['pNom'],
            'pEmail' => $data['pEmail'],
            'pTel' => $data['pTel'],
            'email' => $data['email'],
            'valid' => 0,
            'role_id' => 5,
            'password' => Hash::make($data['password']),
        ]);

        
    }
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function showRegistrationForm()
    {

        return view('auth.registerentreprise');
    }
}
