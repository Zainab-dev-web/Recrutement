@extends('layouts.master')

@section('content')

    <h3>{{$offre->poste}} chez {{$offre->user->nom}}</h3>
    @can('post-talent')
<form action="{{route('candidat.update', $offre->id)}}" method="post">
  @csrf
  @method('PUT')
<button class="btn btn-white" type="submit">Postuler</button>
</form>
@endcan
<body>
@endsection