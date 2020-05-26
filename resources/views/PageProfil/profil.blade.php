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
                    <a class="menu-box-tab" href="#6"><span class="icon scnd-font-color"><i class="fas fa-star"></i></span>Vos notes</a>                            
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
                @if(count($offr)==0)
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
        <p>{{$user->statut->statut}} <a data-toggle="modal" data-target="#exampleModalLong"><u>Modifier</u></a></p>
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
                        <a class="menu-box-tab" href="#"><span class="icon entypo-paper-plane scnd-font-color"></span>Vos candidatures</span></a>              
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
            <h4 class="widget_title mb-3">Candidatures en cours ...</h4>
            <ul class="list cat-list">
                @foreach ($candidats as $candidat)
                    @if ($candidat->user_id == Auth::user()->id)
                        <li>
                        <a href="#" class="d-flex">
                        <p>{{$candidat->offre->poste}} chez </p>
                    
                        <p><b> {{$candidat->offre->user->nom}}</b></p>
                    </a>
                </li> 
                    @else
                   
                    @endif
                @endforeach
            </ul>
            @if(count($candid)==0)
            <div class="alert alert-info" role="alert">
                Vous n'avez pas encore de candidatures !
            </div>
            @endif
        </div>
    </div>
    <div class="my-5" id="match">
        <div class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title mb-3 text-center"><i class="fas fa-heart text-danger fa-1x"></i> Vos matches</h4>
            <div class="row">
                @foreach ($offr as $item)
                
                <div class="col-4 border border-secondary rounded p-3 m-3">
                    
                    <ul class="list cat-list">
                        <li> <p><b>Poste: </b>{{$item->poste}}.</p></li>
                        <li><p><i class="fas fa-map-marker-alt"></i> <b>Lieu: </b>{{$item->lieu}}.</p></li>
                        <li><p><b>Il faut être: </b>{{$item->qualite}}.</p></li>
                        <li><p><b>Description de l'offre: </b>{{$item->description}}</p></li>
                        <li><p><b>Statut recherché:</b> {{$item->statut->statut}}</p></li>
                        <li><b>Entreprise : </b><p class='text-uppercase'>{{$item->user->nom}}</p></li>
                        
                    </ul>
                
                </div>
                				
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@else
    
@endif
<!-- Modal -->
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

                        <button class="btn btn-white" type="submit">Valider</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <a href="{{route('profil.index')}}"><button type="button" class="btn btn-primary">Retour</button></a>
            </div>
        </div>
    </div>
</div>

@endforeach
@endcan