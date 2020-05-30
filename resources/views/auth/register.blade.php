@extends('layouts.app')

@section('content')


{{-- @if ($choix->valid == 1)
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prénom" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="prénom" type="text" class="form-control @error('prénom') is-invalid @enderror" name="prénom" value="{{ old('prénom') }}" required autocomplete="prénom" autofocus>

                                @error('prénom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo de profil</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo">

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __("Numéro de téléphone") }}</label>
      
                            <div class="col-md-6">
                                <input id="numero" type="number" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero">
      
                                @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">Adresse</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse">

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="domaine" class="col-md-4 col-form-label text-md-right">Domaine</label>

                            <div class="col-md-6">
                                <input id="domaine" type="text" class="form-control @error('domaine') is-invalid @enderror" name="domaine" value="{{ old('domaine') }}" required autocomplete="domaine">

                                @error('domaine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="statut_id" class="col-md-4 col-form-label text-md-right">Statut</label>
                            @php
                                $statut = App\Statut::all();
                            @endphp
                            <div class="col-md-6">
                                <select name="statut_id" id="statut_id" class="form-control @error('statut_id') is-invalid @enderror" >
                                    @foreach ($statut as $item)
                                        <option value="{{$item->id}}">{{$item->statut}}</option>   
                                    @endforeach
                                </select>
                                @error('statut_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="véhicule" class="col-md-4 col-form-label text-md-right">Véhiculé</label>

                            <div class="col-md-6">
                                <div class="form-check-inline">
                                    <input class="véhicule" type="radio" name="véhicule" id="véhicule" value="Oui" checked>
                                    <label class="form-check-label" for="véhicule">
                                      Oui
                                    </label>
                                  </div>
                                  <div class="form-check-inline">
                                    <input class="véhicule" type="radio" name="véhicule" id="véhicule" value="Non">
                                    <label class="form-check-label" for="véhicule">
                                      Non
                                    </label>
                                  </div>

                                @error('véhicule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dispo" class="col-md-4 col-form-label text-md-right">Disponible à partir de</label>

                            <div class="col-md-6">
                                <input id="adresse" type="date" class="form-control @error('dispo') is-invalid @enderror" name="dispo" value="{{ old('dispo') }}" required autocomplete="dispo">

                                @error('dispo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cv" class="col-md-4 col-form-label text-md-right">CV</label>

                            <div class="col-md-6">
                                <input id="cv" type="file" class="form-control @error('cv') is-invalid @enderror" name="cv" value="{{ old('cv') }}" required autocomplete="cv">

                                @error('cv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@elseif ($choix->valid == 2) --}}

 {{-- formulaire entreprise --}}

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">Nom de l'entreprise</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
          
                          <div class="col-md-6">
                              <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __("Création de l'entreprise") }}</label>

                            <div class="col-md-6">
                                <input id="date" type="number" min="1900" max="2099" step="1" placeholder="2020" class="form-control" name="date" value="{{ old('date') }}" required autocomplete="date">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="tva" class="col-md-4 col-form-label text-md-right">{{ __("Numéro TVA") }}</label>

                          <div class="col-md-6">
                              <input id="tva" type="text" class="form-control" name="tva" value="{{ old('tva') }}" required autocomplete="tva">

                             
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="domaine" class="col-md-4 col-form-label text-md-right">{{ __("Domaine") }}</label>

                        <div class="col-md-6">
                            <input id="domaine" type="text" class="form-control @error('domaine') is-invalid @enderror" name="domaine" value="{{ old('domaine') }}" required autocomplete="domaine">

                            @error('domaine')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __("Numéro de téléphone") }}</label>

                      <div class="col-md-6">
                          <input id="numero" type="number" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero">

                          @error('numero')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __("Adresse") }}</label>

                    <div class="col-md-6">
                        <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse">

                        @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                  <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __("Logo de l'entreprise") }}</label>

                  <div class="col-md-6">
                      <input id="photo" type="file" class="form-control" name="photo" value="{{ old('photo') }}" required autocomplete="photo">

                      
                  </div>
              </div>

                
              <label for="photo" class="col-form-label">{{ __("Informations personne de contact") }}</label>

                  <div class="form-group row">
                    <label for="pNom" class="col-md-4 col-form-label text-md-right">Nom</label>

                    <div class="col-md-6">
                        <input id="pNom" type="text" class="form-control" name="pNom" value="{{ old('pNom') }}" required autocomplete="pNom" autofocus>

                       
                    </div>
                </div>

                <div class="form-group row">
                  <label for="pTel" class="col-md-4 col-form-label text-md-right">Téléphone</label>

                  <div class="col-md-6">
                      <input id="pTel" type="text" class="form-control" name="pTel" value="{{ old('pTel') }}" required autocomplete="pTel" autofocus>

                    
                  </div>
              </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endif



    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body text-sucess" >
            Votre compte a bien été créé ! Il est en instance de validation.
        </div>
        <div class="modal-footer">
          
        </div>
        </div>
    </div>
    </div>








 

    @if ($choix->valid == 1) --}}


    <style>


:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  /* background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF); */
  /* background-image: linear-gradient( 109.6deg,  rgba(5,85,84,1) 11.2%, rgba(64,224,208,1) 91.1% ); */
  background-image: linear-gradient( 109.6deg,  rgba(0,0,0,1) 11.2%, rgb(4, 219, 237) 91.1% );
  /* background: rgb(3,33,91);
background: linear-gradient(90deg, rgba(3,33,91,1) 0%, rgba(1,31,31,1) 0%, rgba(141,144,144,1) 100%); */
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('/img/register/register3.jpg');
  background-size: cover;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}
    </style>
    @if ($choix->valid == 1)
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Inscription</h5>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
             
              <div class="form-label-group">
                <input type="text" id="inputnom" name="nom" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" value="{{ old('nom') }}" placeholder="{{ __('adminlte::adminlte.nom') }}" required autofocus>
                <label for="inputnom">Nom</label>
                @if ($errors->has('nom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </div>
                @endif
              </div>
              <div class="form-label-group">
                <input type="text" id="inputprénom" name="prénom" class="form-control {{ $errors->has('prénom') ? 'is-invalid' : '' }}" value="{{ old('prénom') }}" placeholder="{{ __('adminlte::adminlte.prénom') }}" required autofocus>
                <label for="inputprénom">Prénom</label>
                @if ($errors->has('prénom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('prénom') }}
                    </div>
                @endif
              </div>
              <div class="form-label-group">
                <input type="email" id="inputemail" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" required autofocus>
                <label for="inputemail">Email</label>
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
              </div>
             
              <div class="form-label-group">
                  <input type="file" id="inputphoto" name="photo" class="form-control {{ $errors->has('photo') ? 'is-invalid' : '' }}" value="{{ old('photo') }}" placeholder="{{ __('adminlte::adminlte.photo') }}" required autofocus>
                  <label for="inputphoto">Photo de Profil</label>
                  @if ($errors->has('photo'))
                  <div class="invalid-feedback">
                      {{ $errors->first('photo') }}
                    </div>
                    @endif
                </div>
                <div class="form-label-group">
                  <input type="text" id="inputadresse" name="adresse" class="form-control {{ $errors->has('adresse') ? 'is-invalid' : '' }}" value="{{ old('adresse') }}" placeholder="{{ __('adminlte::adminlte.adresse') }}" required autofocus>
                  <label for="inputadresse">Adresse</label>
                  @if ($errors->has('adresse'))
                      <div class="invalid-feedback">
                          {{ $errors->first('adresse') }}
                      </div>
                  @endif
                </div>
                <div class="form-label-group">
                <input type="integer" id="inputnumero" name="numero" class="form-control {{ $errors->has('numero') ? 'is-invalid' : '' }}" value="{{ old('numero') }}" placeholder="{{ __('adminlte::adminlte.numero') }}" required autofocus>
                <label for="inputnumero">Numéro de téléphone:</label>
                @if ($errors->has('numero'))
                    <div class="invalid-feedback">
                        {{ $errors->first('numero') }}
                    </div>
                @endif
              </div>
              <div class="form-group row">
              <label for="véhicule" class="col-md-3 col-form-label text-md-right">Véhiculé: </label>
              <div class="form-label-group">
                <div class="form-check-inline">

                    <input class="véhicule" type="radio" name="véhicule" id="véhicule" value="Oui" checked>
                    <label class="form-check-label" for="véhicule">
                      Oui
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="véhicule" type="radio" name="véhicule" id="véhicule" value="Non">
                    <label class="form-check-label" for="véhicule">
                      Non
                    </label>
                  </div>
                @if ($errors->has('véhicule'))
                    <div class="invalid-feedback">
                        {{ $errors->first('véhicule') }}
                    </div>
                @endif
              </div>
            </div>
            <div class="form-label-group">
                <input type="text" id="inputdomaine" name="domaine" class="form-control {{ $errors->has('domaine') ? 'is-invalid' : '' }}" value="{{ old('domaine') }}" placeholder="{{ __('adminlte::adminlte.domaine') }}" required autofocus>
                <label for="inputdomaine">Domaine</label>
                @if ($errors->has('domaine'))
                    <div class="invalid-feedback">
                        {{ $errors->first('domaine') }}
                    </div>
                @endif
              </div>
              {{-- <div class="form-label-group">
                @php
                $statut = App\Statut::all();
             @endphp
            
                <select name="statut_id" id="statut_id" class="form-control @error('statut_id') is-invalid @enderror" >
                    
                    @foreach ($statut as $item)
                        <option value="{{$item->id}}">{{$item->statut}}</option>   
                    @endforeach
                </select>
              
                @if ($errors->has('statut_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('statut_id') }}
                    </div>
                @endif
             
              </div> --}}




              <div class="form-label-group">
                
                @php
                    $statut = App\Statut::all();
                @endphp
            
                    <select name="statut_id" id="statut_id" class="form-control mb-4 @error('statut_id') is-invalid @enderror" >
                        <option value="">-- Statut --</option>
                        @foreach ($statut as $item)
                            <option value="{{$item->id}}">{{$item->statut}}</option>   
                        @endforeach
                    </select>
                    <label for="statut_id" class="col-md-6 col-form-label">Statut</label>
                    @error('statut_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               
            </div>
              <div class="form-label-group my-5">
                <p>Disponibilité</p>
                <input type="date" id="inputdispo" name="dispo" class="form-control {{ $errors->has('dispo') ? 'is-invalid' : '' }}" value="{{ old('dispo') }}" placeholder="{{ __('adminlte::adminlte.dispo') }}" required autofocus>
                
                @if ($errors->has('dispo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dispo') }}
                    </div>
                @endif
              </div>
              <div class="form-label-group">
                <input type="file" id="inputcv" name="cv" class="form-control {{ $errors->has('cv') ? 'is-invalid' : '' }}" value="{{ old('cv') }}" placeholder="{{ __('adminlte::adminlte.cv') }}" required autofocus>
                <label for="inputcv">CV</label>
                @if ($errors->has('cv'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cv') }}
                    </div>
                @endif
              </div>
              <div class="form-label-group">
                <input type="password" id="inputpassword" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') }}" placeholder="{{ __('adminlte::adminlte.password') }}" required autofocus>
                <label for="inputpassword">Mot de passe</label>
                @if ($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
              </div>
              <div class="form-label-group">
                <input type="password" id="password-confirm" name="password_confirmation" class="form-control "placeholder="{{ __('adminlte::adminlte.email') }}" required autofocus autocomplete="new-password">
                <label for="password-confirm">Confirmation du mot de passe</label>
               
              </div>
<div class='text-center'>
     <button type="submit" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-primary">
                {{ __("S'enregistrer") }}
            </button>
        </div>
             
             
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @elseif ($choix->valid == 2) 

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h4 class="card-title text-center">Inscription</h4>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
             
              <div class="form-label-group">
                <input type="text" id="inputnom" name="nom" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" value="{{ old('nom') }}" placeholder="{{ __('adminlte::adminlte.nom') }}" required autofocus>
                <label for="inputnom">Nom</label>
                @if ($errors->has('nom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </div>
                @endif
              </div>
       
              <div class="form-label-group">
                <input type="email" id="inputemail" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" required autofocus>
                <label for="inputemail">Email</label>
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
              </div>
             
              <div class="form-label-group">
                  <input type="file" id="inputphoto" name="photo" class="form-control {{ $errors->has('photo') ? 'is-invalid' : '' }}" value="{{ old('photo') }}" placeholder="{{ __('adminlte::adminlte.photo') }}" required autofocus>
                  <label for="inputphoto">Logo de l'entreprise</label>
                  @if ($errors->has('photo'))
                  <div class="invalid-feedback">
                      {{ $errors->first('photo') }}
                    </div>
                    @endif
                </div>
                <div class="form-label-group">
                  <input type="text" id="inputadresse" name="adresse" class="form-control {{ $errors->has('adresse') ? 'is-invalid' : '' }}" value="{{ old('adresse') }}" placeholder="{{ __('adminlte::adminlte.adresse') }}" required autofocus>
                  <label for="inputadresse">Adresse</label>
                  @if ($errors->has('adresse'))
                      <div class="invalid-feedback">
                          {{ $errors->first('adresse') }}
                      </div>
                  @endif
                </div>
                <div class="form-label-group">
                <input type="integer" id="inputnumero" name="numero" class="form-control {{ $errors->has('numero') ? 'is-invalid' : '' }}" value="{{ old('numero') }}" placeholder="{{ __('adminlte::adminlte.numero') }}" required autofocus>
                <label for="inputnumero">Numéro de téléphone</label>
                @if ($errors->has('numero'))
                    <div class="invalid-feedback">
                        {{ $errors->first('numero') }}
                    </div>
                @endif
              </div>
              
                  
            <div class="form-label-group">
                <input type="text" id="inputdomaine" name="domaine" class="form-control {{ $errors->has('domaine') ? 'is-invalid' : '' }}" value="{{ old('domaine') }}" placeholder="{{ __('adminlte::adminlte.domaine') }}" required autofocus>
                <label for="inputdomaine">Domaine</label>
                @if ($errors->has('domaine'))
                    <div class="invalid-feedback">
                        {{ $errors->first('domaine') }}
                    </div>
                @endif
              </div>
             
              <div class="form-label-group">
                <input type="number" id="inputdate" name="date" class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}" value="{{ old('date') }}" placeholder="{{ __('adminlte::adminlte.date') }}"  min="1900" max="2099" step="1" placeholder="2020" required autofocus>
                <label for="inputdate">Date de création de l'entreprise</label>
                @if ($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
              </div>
              <div class="form-label-group">
                <input type="text" id="inputtva" name="tva" class="form-control {{ $errors->has('tva') ? 'is-invalid' : '' }}" value="{{ old('tva') }}" placeholder="{{ __('adminlte::adminlte.tva') }}" required autofocus>
                <label for="inputtva">Numéro de TVA</label>
                @if ($errors->has('tva'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tva') }}
                    </div>
                @endif
              </div>
              <div class="form-label-group">
                <input type="text" id="inputpNom" name="pNom" class="form-control {{ $errors->has('pNom') ? 'is-invalid' : '' }}" value="{{ old('pNom') }}" placeholder="{{ __('adminlte::adminlte.pNom') }}" required autofocus>
                <label for="inputpNom">Nom de contact</label>
                @if ($errors->has('pNom'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pNom') }}
                    </div>
                @endif
              </div>
              <div class="form-label-group">
                <input type="text" id="inputpTel" name="pTel" class="form-control {{ $errors->has('pTel') ? 'is-invalid' : '' }}" value="{{ old('pTel') }}" placeholder="{{ __('adminlte::adminlte.pTel') }}" required autofocus>
                <label for="inputpTel">Numéro de contact</label>
                @if ($errors->has('pTel'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pTel') }}
                    </div>
                @endif
              </div>
              <div class="form-label-group">
                <input type="password" id="inputpassword" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') }}" placeholder="{{ __('adminlte::adminlte.password') }}" required autofocus>
                <label for="inputpassword">Mot de passe</label>
                @if ($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
              </div>
              <div class="form-label-group">
                <input type="password" id="password-confirm" name="password_confirmation" class="form-control "placeholder="{{ __('adminlte::adminlte.email') }}" required autofocus autocomplete="new-password">
                <label for="password-confirm">Confirmation du mot de passe</label>
                {{-- @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif --}}
              </div>
<div class='text-center'>

    <button type="submit" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-primary">
      {{ __("S'enregistrer") }}
  </button>
</div>
             
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endif

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body text-sucess" >
            Votre compte a bien été créé ! Il est en instance de validation.
        </div>
        <div class="modal-footer">
          
        </div>
        </div>
    </div>
    </div>
@endsection
