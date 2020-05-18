{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tableau de bord </h1>
@stop

@section('content')
<div class="container mx-auto bg-dark rounded w-50 py-5 my-5">
    <p class='text-white text-uppercase text-center py-5'>Bienvenue sur votre administration !</p>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop