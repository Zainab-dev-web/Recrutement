<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Talent;
use App\Choix;
use App\Entreprise;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

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
        $choix = Choix::find(1);
        if ($choix->valid == 1) {
            return Validator::make($data, [
                'nom' => ['required', 'string', 'max:255'],
                'prénom' => ['required', 'string', 'max:255'],
                'photo' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'numéro' => ['required'],
                'adresse' => ['required', 'string'],
                'dispo' => ['required'],
                'domaine' => ['required'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            return redirect()->route('/');
        } elseif ($choix->valid == 2) {
            return Validator::make($data, [
                'nom' => ['required', 'string', 'max:255'],
                'tva' => ['required'],
                'domaine' => ['required'],
                'date' => ['required'],
                'logo' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'numero' => ['required'],
                'adresse' => ['required', 'string'],
                'pNom' => ['required'],
                'pTel' => ['required'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $choix = Choix::find(1);

        if ($choix->valid == 1) { //talent

            $storagephoto=Storage::disk('public')->put('', $data['photo']);
            $storagecv=Storage::disk('public')->put('', $data['cv']);

            return Talent::create([
            'nom' => $data['nom'],
            'prénom' => $data['prénom'],
            'photo' => $storagephoto,
            'email' => $data['email'],
            'numéro' => $data['numéro'],
            'adresse' => $data['adresse'],
            'statut_id' => $data['statut_id'],
            'véhicule' => $data['véhicule'],
            'dispo' => $data['dispo'],
            'domaine' => $data['domaine'],
            'cv' => $storagecv,
            'valid' => 0,
            'role_id' => 4,
            'password' => Hash::make($data['password']),
        ]);
        } elseif ($choix->valid == 2) { // entreprise

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
            'pTel' => $data['pTel'],
            'email' => $data['email'],
            'valid' => 0,
            'role_id' => 5,
            'password' => Hash::make($data['password']),
        ]);
        }
        
        
    }
}
