@extends('layouts.master')

@section('content')


<div class="container">
  

@foreach ($offres as $offre)
@if ($offre->user_id == Auth::id())
<article class="blog_item">
  <div class="blog_item_img">
      <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
  </div>

  <div class="blog_details">
      <a class="d-inline-block" href="{{route('offres.show', $offre->id)}}">
      <h2>{{$offre->poste}} chez {{$offre->user->nom}}</h2>
      </a>
  <p><i class="fas fa-map-marker-alt"></i> {{$offre->lieu}}</p>
  <p>{{\Illuminate\Support\Str::limit($offre->description, 200, $end=' ...')}}</p>
  <h2>Candidatures :</h2>
         @foreach ($candidats as $candidat)
       @if ($candidat->offre_id == $offre->id)
    <h5><a href=""><b>{{$candidat->user->nom}} {{$candidat->user->prénom}} <a class="btn btn-white" href="{{route('accepter', $candidat->id)}}">Accepter</a> <a class="btn btn-white" href="{{route('refuser', $candidat->id)}}">Refuser</a></b></a></h5>
       @else
         
       @endif
   @endforeach

  </div>
</article>
@else
    
@endif
 
@endforeach
<div class="my-5">
    <h2><b>Historique :</b></h2>
    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Réponse</th>
            <th scope="col">Profil</th>



          </tr>
        </thead>
        <tbody>

            @foreach ($allcandidats as $candidat)
                <tr>
                    <td>{{$candidat->id}}</td>
                    <td>{{$candidat->user->nom}} {{$candidat->user->prénom}}</td>
                    @if ($candidat->accept == 0)
                    <td>En attente</td>
                    @elseif ($candidat->accept == 1)
                    <td>Accepté</td>
                    @endif
                    @if ($candidat->accept == 2)
                     <td>Refusé</td>   
                    @endif
                    
                    
                 
                    <td>
                        <a href="{{route('talents.show', $candidat->user->id)}}" class='btn btn-white'>Voir profil</a>
                    </td>
                </tr>

          @endforeach

        </tbody>
      </table>
</div>
</div>
    @include('components.footer')
    
@endsection
  
