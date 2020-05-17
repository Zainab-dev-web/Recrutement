@extends('layouts.app')

@section('content')
@if ($choix->valid == 1)
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
                                <select name="statut_id" id="statut_id" class="form-control @error('statut_id') is-invalid @enderror" value={{ old('statut_id')}} required autocomplete="statut_id">
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
                                <button type="submit" class="btn btn-primary">
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
@elseif ($choix->valid == 2)

 {{-- formulaire entreprise --}}

<div class="container">
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
                  <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __("Logo de l'entreprise") }}</label>

                  <div class="col-md-6">
                      <input id="logo" type="file" class="form-control" name="logo" value="{{ old('logo') }}" required autocomplete="logo">

                      
                  </div>
              </div>

                
              <label for="logo" class="col-form-label">{{ __("Informations personne de contact") }}</label>

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
                                <button type="submit" class="btn btn-primary">
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

@endsection
