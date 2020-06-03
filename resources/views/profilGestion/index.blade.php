{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mon profil</div>

                <div class="card-body mx-auto">
                   <div class="row ">

                        <div class="box-body box-profile text-center  m-3 border border-info rounded p-5">
                        <img class="profile-user-img img-responsive img-circle" src="{{asset('storage/'.$user->photo)}}" alt="User profile picture">
                     
                        <h3 class="profile-username text-center">{{$user->nom}}</h3>
                     
                        <p class="text-muted text-center">{{$user->role->role}}</p>
                     
                         <ul class="list-group list-group-unbordered">
                           <li class="list-group-item">
                           <b>Email</b> <a class="pull-right">{{$user->email}}</a>
                           </li>
                           <li class="list-group-item">
                           <b>Expérience</b> <a class="pull-right">{{$user->experience}} années</a>
                           </li>
                           <li class="list-group-item">
                           <b>Entreprise</b> <a class="pull-right">Laravel Officiel</a>
                           </li>
                         </ul>
                     
                         <div class='text-center'>
                           
                            <a href='{{route('profilGestion.edit', $user)}}' class='btn btn-white'><i class="far fa-edit fa-2x text-warning"></i></a><b></b></a>
                            
                        </div>
                         
                         
                     </div>
                      
                     </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop