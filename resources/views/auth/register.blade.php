<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    



    <style>


:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  /* background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF); */
  /* background-image: linear-gradient( 109.6deg,  rgba(5,85,84,1) 11.2%, rgba(64,224,208,1) 91.1% ); */
  /* background-image: linear-gradient( 109.6deg,  rgba(0,0,0,1) 11.2%, rgba(11,132,145,1) 91.1% ); */
  /* background: rgb(3,33,91);
background: linear-gradient(90deg, rgba(3,33,91,1) 0%, rgba(1,31,31,1) 0%, rgba(141,144,144,1) 100%); */
background: #4CB8C4; 
background: -webkit-linear-gradient(to right, #3CD3AD, #4CB8C4); 
background: linear-gradient(to right, #3CD3AD, #4CB8C4); 



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
  background: scroll center url('/img/register/register10.jpg');
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
  <div class="container w-100">
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
                <label for="inputnumero">Numéro de téléphone</label>
                @if ($errors->has('numero'))
                    <div class="invalid-feedback">
                        {{ $errors->first('numero') }}
                    </div>
                @endif
              </div>
              <div class="form-group row">
              <label for="véhicule" class="col-md-3 col-form-label text-md-right">Véhiculé</label>
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
              <div class="form-group row">
                <label for="statut_id" class='col-md-3 col-form-label text-md-right'>Statut</label>
                @php
                $statut = App\Statut::all();
             @endphp
            <div class="col-md-8">
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
            </div>
              </div>




              
              <div class="form-label-group">
                <input type="date" id="inputdispo" name="dispo" class="form-control {{ $errors->has('dispo') ? 'is-invalid' : '' }}" value="{{ old('dispo') }}" placeholder="{{ __('adminlte::adminlte.dispo') }}" required autofocus>
                <label for="inputdispo">Disponibilité</label>
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
     <button type="submit" data-toggle="modal" data-target="#modalregister" class="btn btn-info">
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
                <label for="inputnom">Nom de l'entreprise</label>
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
                <label for="inputdate">Création de l'entreprise</label>
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

    <button type="submit" data-toggle="modal" data-target="#modalregister" class="btn btn-info">
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


  
</body>
</html>

<!-- Modal statut change -->
<div class="modal fade" id="modalregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
         <div class="modal-body text-sucess" >
    Votre compte a bien été créé ! Il est en instance de validation.
</div>
        <div class="modal-footer">
            
        </div>
    </div>
<<<<<<< HEAD
    </div>




    
</body>
</html>
=======
</div>
</div>

>>>>>>> a610f88d81fc8cc15247f102e14d676b6e1db08f
