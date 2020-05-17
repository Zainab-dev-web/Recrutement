@extends('layouts.master')

@section('content')
    <h3>{{$offre->poste}} chez {{$offre->user->nom}}</h3>

@can('post-talent')
<form action="{{route('candidat.update', $offre)}}" method="post">
  @csrf
  @method('PUT')
<button class="btn btn-white" type="submit">Postuler</button>
</form>
@endcan

@if (Auth::user()->id == $offre->user->id)
<form action="{{route('offres.destroy', $offre)}}" method="post">
  @csrf
  @method('DELETE')
<button class="btn btn-white" type="submit">Supprimer mon offre</button>
</form>
@else
    
@endif


@endsection