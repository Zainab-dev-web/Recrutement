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

<div class="container blog_area section-padding">
<div class="row no-gutters d-flex justify-content-center">
    <div class="col-4" id='bg-offre' >
        <div class="blog_right_sidebar">
            <aside class="single_sidebar_widget post_category_widget bg-transparent">
                <div class="bg-white p-3">
                <h4 class="widget_title text-center">MENU</h4>
                <ul class="list">
                    <li>
                    <a class="menu-box-tab text-dark" href="{{route('note.index')}}"><span class="icon scnd-font-color"><i class="fas fa-star pr-3"></i></span>Vos notes</a>                            
                    </li>
                    <li>
                    <a class="menu-box-tab text-dark" href="{{route('candidat.index')}}"><span class="icon entypo-paper-plane scnd-font-color pr-3"></span>Candidatures</span></a>              
                    </li>
                    <li>
                    <a class="menu-box-tab text-dark" href="{{route('evaluation.index')}}"><span class="icon scnd-font-color"><i class="far fa-handshake pr-3"></i></span>Vos entretiens</a>                            
                    </li>
                
                    <li>
                    <a class="menu-box-tab text-dark" href="{{route('vosOffres.index', $user)}}"><span class="icon scnd-font-color"><i class="far fa-newspaper pr-3"></i></span>Vos offres</a>
                    </li> 
                    <li>
                    <a class="menu-box-tab text-dark" href="{{route('settings.show', $user)}}"><span class="icon scnd-font-color"><i class="fas fa-lock pr-3"></i></span>Données personnelles</a>
                    </li>        
                </ul>
                </div>
                <div class="text-center my-3">
                    <a href="{{route('agenda')}}" class="btn btn-dark mt-5">Voir votre agenda</a>
                </div>
            </aside>
        </div>
    </div>
    <div class="col-4 no-gutters pb-5 px-5">
        <div class="text-center">
        <img class="my-5 rounded-circle border" width="200" alt="logo entreprise" src="{{asset('storage/'.$user->photo)}}">
        <h2>{{$user->nom}}<br>{{$user->domaine}}</h2>
        </div>
   
    </div>
    <div class="col-4 mt-100 soitcentre">
        <div class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title mb-3">Aperçu de vos offres</h4>
            <ul class="list cat-list">
                @foreach ($offres as $offre)
                    @if ($offre->user_id == Auth::user()->id)
                    <li>
                        <a href="{{route('offres.show', $offre->id)}}">
                        <p>{{$offre->poste}} chez <b>{{$offre->user->nom}}</b> <br> pour {{$offre->statut->statut}}</p>
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
                <a class="btn2 p-3" href="{{route('offres.create')}}" type="submit">Créer une offre</a>
            </ul>
        </div>
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
    
<div class="container blog_area section-padding">
<div class="row no-gutters d-flex justify-content-center">
    <div class="col-lg-4" id='bg-offre' >
        <div class="blog_right_sidebar">
            <aside class="single_sidebar_widget post_category_widget bg-transparent">
                <div class="bg-white p-3">
                <h4 class="widget_title text-center">MENU</h4>
                <ul class="list">
                    <li>
                    <a class="menu-box-tab text-dark" href="{{route('note.index')}}"><span class="icon scnd-font-color"><i class="fas fa-star pr-3"></i></span>Vos notes</a>                            
                    </li>
                    <li>
                    <a class="menu-box-tab text-dark" href="{{route('candidat.create')}}"><span class="icon entypo-paper-plane scnd-font-color pr-3"></span>Vos candidatures</span></a>              
                    </li>
                    <li>
                    <a class="menu-box-tab text-dark" href="{{route('match.create')}}"><span class="icon entypo-heart scnd-font-color pr-3"></span>Vos matchs</span></a>              
                    </li>
                    <li>
                    <a class="menu-box-tab text-dark" href="{{route('date.index')}}"><span class="icon scnd-font-color"><i class="far fa-clock pr-3"></i></span>Proposition de date</span></a>              
                    </li>  
                    <li>
                    <a class="menu-box-tab text-dark" href="{{route('settings.show', $user)}}"><span class="icon scnd-font-color"><i class="fas fa-lock pr-3"></i></span>Données personnelles</a>
                    </li>
                </ul>
            </div>
                    <div class="text-center my-3">
                        <a href="{{route('agenda')}}" class="btn btn-dark">Voir votre agenda</a>
                        </div>
            </aside>
        </div>
    </div>
    <div class="col-4 no-gutters pb-5 pr-1">
        <div class="text-center">
        <img class="my-5 rounded-circle border" width="200" alt="logo entreprise" src="{{asset('storage/'.$user->photo)}}">
        <h2>{{$user->nom}} {{$user->prénom}}<br>{{$user->domaine}}</h2>

        @if ($user->resultat == null || $user->resultat->id == 2)

        <p>{{$user->statut->statut}}</p>  <button class="btn p-3" data-toggle="modal" data-target="#exampleModalLong">Modifier</button>
        @elseif ($user->resultat->id == 1)
           <p>À trouvé un job ! <h2>☻</h2><button class="btn p-3" data-toggle="modal" data-target="#ModalActualiser">Actualiser</button></p>
        @endif
        
        </div>
       
    </div>
    <div class="col-4 mt-100 no-gutters">
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
            <div class="alert alert-info mr-3" role="alert">
                Vous n'avez pas de candidatures en attente !
            </div>
            @endif
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