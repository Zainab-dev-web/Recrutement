@extends('layouts.master')

@section('content')

    @include('components.nav')
    @include('PageAccueil.carousel')
    @include('PageAccueil.services')
    @include('PageAccueil.teams')
    @include('components.footer')
    
@endsection