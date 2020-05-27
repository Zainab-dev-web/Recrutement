@extends('layouts.master')

@section('content')
  @include('components.nav')
  <!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
              <h2>Évaluer</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->
<div class="container mt-5">
  <form class="form-contact contact_form" action="{{route('note.update', $eval)}}" method="post" novalidate="novalidate">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="form-group col-md-6">
        <label for="">Le candidat s'est-il présenté à l'entretien ? :</label>
        <select class="form-control @error('presence_id') is-invalid @enderror"  name="presence_id" id="">
          @foreach ($presences as $presence)
          <option value={{$presence->id}}>{{$presence->presence}}</option>   
        @endforeach
        </select>
        <div class="validation"></div>
        @error('presence_id')
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
      {{-- <select class="form-control w-50" name="presence_id" id="">
        @foreach ($presences as $presence)
          <option value={{$presence->id}}>{{$presence->presence}}</option>   
        @endforeach
      </select> --}}
      <div class="form-group col-md-6">
        <label for="">Premiére impression :</label>
        <input type='text' class="form-control @error('impression') is-invalid @enderror" name="impression" placeholder="Mettez votre premiére impression"/>
        <div class="validation"></div>
        @error('impression')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
      {{-- <input type="text" name="impression" placeholder="impression" class="form-control w-50 @error('impression') is-invalid @enderror" id=""> --}}
      <div class="form-group col-md-6">
        <label for="">Savoir-étre du candidat :</label>
        <input type='text' class="form-control @error('savoir') is-invalid @enderror" name="savoir" placeholder="Mettez son savoir-étre"/>
        <div class="validation"></div>
        @error('savoir')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    
      {{-- <input type="text" name="savoir" placeholder="savoir" class="form-control w-50" id=""> --}}
      <div class="form-group col-md-6">
        <label for="">Quels sont ces compétences ? :</label>
        <input type='text' class="form-control @error('capacite') is-invalid @enderror" name="capacite" placeholder="Mettez ces compoténences "/>
        <div class="validation"></div>
        @error('capacite')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
      {{-- <input type="text" name="capacite" placeholder="capacite" class="form-control w-50" id=""> --}}
      <div class="form-group col-md-6">
        <label for="">A-t-il été sérieux durant cette entretien ? :</label>
        <input type='text' class="form-control @error('serieux') is-invalid @enderror" name="serieux" placeholder="Mettez son sérieux"/>
        <div class="validation"></div>
        @error('serieux')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="">Comment notez-vous cette entretien ? :</label>
      <select class="form-control @error('note_id') is-invalid @enderror"  name="note_id" id="">
        @foreach ($notes as $note)
          <option value={{$note->id}}>{{$note->note}}</option>   
        @endforeach
      </select>
      <div class="validation"></div>
      @error('note_id')  
      <div class="text-danger">{{ $message }}</div>  
      @enderror
  </div>
      @if ($eval->resultat->id == 1)
      <div class="form-group col-md-6">
      <label for="resultat">Acceptez-vous le poste ?</label>
      <select class="form-control @error('resultat_id') is-invalid @enderror"  name="resultat_id" id="">
        @foreach ($resultats as $resultat)
          <option value={{$resultat->id}}>{{$resultat->nom}}</option>   
        @endforeach
      </select>  
      <div class="validation"></div>
      @error('resultat_id')  
      <div class="text-danger">{{ $message }}</div>  
      @enderror
  </div>
    
      @else
         
      @endif
      
    </div>
    <div class="form-group mt-3">
        <button type="submit" class="button button-contactForm boxed-btn">Envoyer</button>
    </div>
  </form>
</div>

  @include('components.footer')

@endsection
  
