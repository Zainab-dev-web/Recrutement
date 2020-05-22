@extends('layouts.master')

@section('content')
  @include('components.nav')
  <!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
              <h2>Évaluer {{$event->user->nom}} {{$event->user->prénom}}</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->
<div class="container mt-5">
  <form class="form-contact contact_form" action="{{route('evaluation.update', $event)}}" method="post" novalidate="novalidate">
    @csrf
    @method('PUT')
    <div class="row">
      <select class="form-control w-50" name="presence_id" id="">
        @foreach ($presences as $presence)
          <option value="{{$presence->id}}">{{$presence->presence}}</option>   
        @endforeach
      </select>
      <input type="text" name="impression" placeholder="impression" class="form-control w-50" id="">
      <input type="text" name="savoir" placeholder="savoir" class="form-control w-50" id="">
      <input type="text" name="capacite" placeholder="capacite" class="form-control w-50" id="">
      <input type="text" name="serieux" placeholder="serieux" class="form-control w-50" id="">
      <select class="form-control w-50" name="note_id" id="">
        @foreach ($notes as $note)
          <option value="{{$note->id}}">{{$note->note}}</option>   
        @endforeach
      </select>
      <label for="resultat">Le candidat est accepté ou refusé</label>
      <input type="text" name="resultat" placeholder="Résultat" class="form-control w-50" id="resultat">
    </div>
    <div class="form-group mt-3">
        <button type="submit" class="button button-contactForm boxed-btn">Envoyer</button>
    </div>
  </form>
</div>

  @include('components.footer')

@endsection
  
