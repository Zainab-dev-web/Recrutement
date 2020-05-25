
{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

   <h2 class='text-center my-2'>Boite d'envoi</h2>

   <div class="container mx-auto p-5 w-50 my-5 bg-light text-sucess border border-secondary rounded">
    <label>L'offre a été proposée aux "talents" suivants:</label>
    

    @foreach ($offres as $item)       
        @foreach ($item->matchs as $user)
            <p>{{$user->nom}}</p> 
        @endforeach
    @endforeach




</div>

<div class="text-center">
    
<button type="submit" class="btn btn-primary">Envoyer</button>
</div>
        
        


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/heart-anime.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src='{{asset('js/app.js')}}'></script>
@stop





