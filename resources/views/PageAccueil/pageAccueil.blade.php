@extends('layouts.master')

@section('content')

    @include('components.nav')
    @include('PageAccueil.carousel')
    @include('PageAccueil.services')
    @include('PageAccueil.teams')
    @include('PageAccueil.info')
    @include('PageAccueil.newsletter')
    @include('components.footer')
    
@endsection