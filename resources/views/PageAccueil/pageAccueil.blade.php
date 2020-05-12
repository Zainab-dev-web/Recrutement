@extends('layouts.master')

@section('content')

    @include('components.nav')
    @include('pageAccueil.carousel')
    @include('pageAccueil.services')
    @include('pageAccueil.teams')
    @include('components.footer')
    
@endsection