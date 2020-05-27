<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Profil</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

@can('post-entreprise')
@foreach ($users as $user)
@if ($user->id == Auth::user()->id)

<div class="container">
<div class="row no-gutters d-flex justify-content-center">
    <div class="col-3 no-gutters pb-5 px-5">
        <div class="text-center">
        <img class="my-5" width="200" alt="logo entreprise" src="{{asset('storage/'.$user->photo)}}">
        <h2>{{$user->nom}} - {{$user->domaine}}</h2>
        </div>
        <a href="{{route('agenda')}}" class='btn'>Voir votre agenda</a>
    </div>
    <div class="col-6 my-5 no-gutters">
        <div class="container d-flex justify-content-center">
        <div class="menu-box block"> <!-- MENU BOX (LEFT-CONTAINER) -->
            <h2 class="titular">MENU</h2>
            <ul class="menu-box-menu">
                <li>
                    <a class="menu-box-tab" href="{{route('note.index')}}"><span class="icon scnd-font-color"><i class="fas fa-star"></i></span>Vos notes</a>                            
                </li>
                <li>
                <a class="menu-box-tab" href="{{route('candidat.index')}}"><span class="icon entypo-paper-plane scnd-font-color"></span>Candidatures</span></a>              
                </li>
                <li>
                <a class="menu-box-tab" href="{{route('evaluation.index')}}"><span class="icon scnd-font-color"><i class="far fa-handshake"></i></span>Vos entretiens</a>                            
                </li>
            
                <li>
                    <a class="menu-box-tab" href="#12"><span class="icon entypo-cog scnd-font-color"></span>Account Settings</a>
                </li>         
            </ul>
        </div>
        </div>
    </div>
    
    <div class="col-3 mt-5 no-gutters px-auto">
        <div class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title mb-3">Aperçu de vos offres</h4>
            <ul class="list cat-list">
                @foreach ($offres as $offre)
                    @if ($offre->user_id == Auth::user()->id)
                        <li>
                        <a href="{{route('offres.show', $offre->id)}}" class="d-flex">
                        <p>{{$offre->poste}} chez <b>{{$offre->user->nom}}</b> pour {{$offre->statut->statut}}</p>      
                        
                    </a>
                </li>
                
                    @else
                        
                    @endif
                @endforeach
                @if(count($match)==0)
                <div class="alert alert-info" role="alert">
                    Vous n'avez pas encore d'offres !
                </div>
                @endif 
                <a class="btn btn-white" href="{{route('offres.create')}}" type="submit">Créer une offre</a>
            </ul>
        </div>
    </div>
</div>
</div>
@else
    
@endif
@endforeach
@endcan


@can('post-talent')
@foreach ($users as $user)
@if ($user->id == Auth::user()->id)
    
<div class="container">
<div class="row no-gutters d-flex justify-content-center">
    <div class="col-3 no-gutters pb-5 pr-5">
        <div class="text-center">
        <img class="my-5" width="200" alt="logo entreprise" src="{{asset('storage/'.$user->photo)}}">
        <h2>{{$user->nom}} {{$user->prénom}} - {{$user->domaine}}</h2>
     
        @if ($user->resultat == null)
        <p>{{$user->statut->statut}} <a class="btn p-3 text-white" data-toggle="modal" data-target="#exampleModalLong">Modifier</a></p> 
        @else
           <p>À trouvé un job ! <h2>☻</h2><a class="btn p-3 text-white" data-toggle="modal" data-target="#ModalActualiser">Actualiser</a></p>
        @endif
        
        </div>
        <div class="col-3 mt-5">
        <a href="{{route('agenda')}}" class='btn'>Voir votre agenda</a>
        </div>
    </div>
    <div class="col-6 mt-5 no-gutters">
        <div class="container d-flex justify-content-center">
            <div class="menu-box block"> <!-- MENU BOX (LEFT-CONTAINER) -->
                <h2 class="titular">MENU</h2>
                <ul class="menu-box-menu">
                    <li>
                    <a class="menu-box-tab" href="{{route('note.index')}}"><span class="icon scnd-font-color"><i class="fas fa-star"></i></span>Vos notes</a>                            
                    </li>
                    <li>
                    <a class="menu-box-tab" href="{{route('candidat.create')}}"><span class="icon entypo-paper-plane scnd-font-color"></span>Vos candidatures</span></a>              
                    </li>
    
    
                    <li>
                    <a class="menu-box-tab" href="{{route('date.index')}}"><span class="icon scnd-font-color"><i class="far fa-clock"></i></span>Proposition de date</span></a>              
                    </li>
                
                    <li>
                        <a class="menu-box-tab" href="#12"><span class="icon entypo-cog scnd-font-color"></span>Account Settings</a>
                    </li>
                              
                </ul>
            </div>
        </div>
    </div>
    <div class="col-3 mt-5 no-gutters">
        <div class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title mb-3">Candidatures en attente...</h4>
            <ul class="list cat-list">
                @foreach ($candidats as $candidat)
                    @if ($candidat->user_id == Auth::user()->id)
                        <li>
                        <a href="{{route('candidat.create')}}" class="d-flex">
                        <p>{{$candidat->offre->poste}} chez&nbsp;</p>
                        <p><b>{{$candidat->offre->user->nom}}</b></p>
                    </a>
                </li> 
                    @else
                   
                    @endif
                @endforeach
            </ul>
            @if(count($candidats)==0)
            <div class="alert alert-info" role="alert">
                Vous n'avez pas de candidatures en attente !
            </div>
            @endif
        </div>
    </div>
    <div class="my-5" id="match">
        <div class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title mb-3 text-center"><i class="fas fa-heart text-danger fa-1x"></i> Vos matches</h4>
            <div class="row">
                @foreach ($offres as $offre)
                @foreach ($offre->matchs as $item)
                @if ($item->pivot->user_id == Auth::user()->id)
                @if ($item->pivot->offre_id == $offre->id)
                <div class="col-4 border border-secondary rounded p-3 m-3">
                    <ul class="list cat-list">
                    <li> <p><b>Poste : </b>{{$offre->poste}}.</p></li>
                        <li><p><i class="fas fa-map-marker-alt"></i> <b>Lieu : </b>{{$offre->lieu}}.</p></li>
                        <li><p><b>Il faut être : </b>{{$offre->qualite}}.</p></li>
                        <li><p><b>Description de l'offre : </b>{{$offre->description}}</p></li>
                        <li><b>Entreprise : </b><p class='text-uppercase'>{{$offre->user->nom}}</p></li>
                    </ul>

                    {{-- button supprimer --}}
                
                </div>
                @else
                    
                @endif
                @else
                    
                @endif
										

                @endforeach	
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@else
    
@endif
<!-- Modal statut change -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
    
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-sucess" >
            <form action="{{route('profil.update', Auth::id())}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="statut_id" class="col-md-4 col-form-label text-md-right">Votre statut</label>

                    <div class="col-md-6">
                        <div class="form-check-inline">
                            <input class="statut_id" type="radio" name="statut_id" id="statut_id" value="1" checked>
                            <label class="form-check-label" for="statut_id">
                              Chercheur d'emploi
                            </label>
                          </div>
                          <div class="form-check-inline">
                            <input class="statut_id" type="radio" name="statut_id" id="statut_id" value="2">
                            <label class="form-check-label" for="statut_id">
                              Demande de stage
                            </label>
                          </div>

                        @error('statut_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <button class="btn btn-white mt-3" type="submit">Valider</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <a href="{{route('profil.index')}}" class="text-dark">Retour</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal job change -->
<div class="modal fade" id="ModalActualiser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-sucess" >
        <form action="{{route('resultat.update', Auth::id())}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <h3 class="text-center">Vous ne travaillez plus et vous désirez rechercher un emploi ?</h3>
                <div class="col-md-6">
                    <div class="form-check-inline text-center">
                        <input class="statut_id" type="radio" name="statut_id" id="statut_id" value="1" checked>
                        <label class="form-check-label" for="statut_id">
                          Chercheur d'emploi
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <input class="statut_id" type="radio" name="statut_id" id="statut_id" value="2">
                        <label class="form-check-label" for="statut_id">
                          Demande de stage
                        </label>
                      </div>

                    @error('statut_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button class="btn btn-white mt-3" type="submit">Valider</button>
                </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
            <a href="{{route('profil.index')}}" class="text-dark">Retour</a>
        </div>
    </div>
</div>
</div>
@endforeach
@endcan