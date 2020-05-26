{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2 class='text-center my-5 py-3'>Tout les utilisateurs</h2>
<hr>

<div class="row d-flex justify-content-center">
    @foreach ($users as $item)
    @can('hrt_valid') 
    @if($item->role_id==4)
   <div class="box-body box-profile text-center w-25 m-3 border border-info rounded p-3">
   <img class="profile-user-img img-responsive img-circle " src="{{asset('storage/'.$item->photo)}}" alt="User profile picture">

   <h3 class="profile-username text-center">{{$item->nom}}</h3>

   <p class="text-muted text-center">{{$item->role->role}}</p>

    <ul class="list-group list-group-unbordered">
      <li class="list-group-item">
      <b>Email</b> <a class="pull-right">{{$item->email}}</a>
      </li>
      <li class="list-group-item">
      <b>Expérience</b> <a class="pull-right">{{$item->experience}} années</a>
      </li>
      <li class="list-group-item">
      <b>Entreprise</b> <a class="pull-right">Laravel Officiel</a>
      </li>
    </ul>
<div class='text-center mt-3'>
    {{-- @can('admin_edit')  --}}
    {{-- @if($item->role_id !=1) --}}
    {{-- <a href='{{route('user.edit', $item)}}' class='btn btn-white'><i class="far fa-edit fa-2x text-warning"></i></a> --}}
    {{-- @endcan --}}
    @if($item->valid ==0)
    <a href='{{route('user.show', $item)}}' class='btn btn-white'>
        <i class="far fa-check-circle fa-2x text-danger"></i></a>
                      
        @else
        
        <button class='btn btn-white'><i class="far fa-check-circle fa-2x text-success"></i></button>
        
        <a href='' data-toggle="modal" data-target="#exampleModalLong"class='btn btn-white'><i class="fas fa-lightbulb fa-2x text-info"></i></a>
        <a href='{{route('profil.index')}}'class='btn btn-white'><i class="far fa-address-card fa-2x text-secondary"></i></a>
         
    @endif
    {{-- @elseif(Auth::user()->role_id==1)
    <a href='{{route('team.edit', $item)}}' class='btn btn-white'><i class="far fa-edit fa-2x text-warning"></i></a><b></b></a>
    @endif --}}
</div>
  </div>
   @endif
  {{--@endforeach --}}
{{-- </div> --}}
@endcan
@can('hre_valid')
{{-- <div class="row">
    @foreach ($users as $item) --}}
  @if($item->role_id==5)
  <div class="box-body box-profile text-center w-25 m-3 border border-info rounded p-3">
    <img class="profile-user-img img-responsive img-circle " src="{{asset('storage/'.$item->photo)}}" alt="User profile picture">
 
    <h3 class="profile-username text-center">{{$item->nom}}</h3>
 
    <p class="text-muted text-center">{{$item->role->role}}</p>
 
     <ul class="list-group list-group-unbordered">
       <li class="list-group-item">
       <b>Email</b> <a class="pull-right">{{$item->email}}</a>
       </li>
       <li class="list-group-item">
       <b>Expérience</b> <a class="pull-right">{{$item->experience}} annnées</a>
       </li>
       <li class="list-group-item">
       <b>Entreprise</b> <a class="pull-right">Laravel Officiel</a>
       </li>
     </ul>
 <div class='text-center mt-3'>
     {{-- @can('admin_edit')  --}}
     {{-- @if($item->role_id !=1) --}}
     {{-- <a href='{{route('user.edit', $item)}}' class='btn btn-white'><i class="far fa-edit fa-2x text-warning"></i></a> --}}
     {{-- @endcan --}}
     @if($item->valid ==0)
     <a href='{{route('user.show', $item)}}' class='btn btn-white'>
         <i class="far fa-check-circle fa-2x text-danger"></i></a>
                       
         @else
         
         <button class='btn btn-white'><i class="far fa-check-circle fa-2x text-success"></i></button>
         
         <a href='{{route('editsugges', $item->id)}}'class='btn btn-white'><i class="fas fa-lightbulb fa-2x text-info"></i></a>
         <a href='{{route('profil.index')}}'class='btn btn-white'><i class="far fa-address-card fa-2x text-secondary"></i></a>
     @endif
     {{-- @elseif(Auth::user()->role_id==1)
     <a href='{{route('team.edit', $item)}}' class='btn btn-white'><i class="far fa-edit fa-2x text-warning"></i></a><b></b></a>
     @endif --}}
 </div>
   </div>
 @endif
   {{--@endforeach --}}
{{-- </div> --}}
@endcan

  @can('admin_edit')
   <div class="box-body box-profile text-center w-25 m-3 border border-info rounded p-3">
    <img class="profile-user-img img-responsive img-circle " src="{{asset('storage/'.$item->photo)}}" alt="User profile picture">
 
    <h3 class="profile-username text-center">{{$item->nom}}</h3>
 
    <p class="text-muted text-center">{{$item->role->role}}</p>
 
     <ul class="list-group list-group-unbordered">
       <li class="list-group-item">
       <b>Email</b> <a class="pull-right">{{$item->email}}</a>
       </li>
       <li class="list-group-item">
       <b>Expérience</b> <a class="pull-right">{{$item->experience}} annnées</a>
       </li>
       <li class="list-group-item">
       <b>Entreprise</b> <a class="pull-right">Laravel Officiel</a>
       </li>
     </ul>
 <div class='text-center mt-3'>
     {{-- @can('admin_edit')  --}}
   
     <a href='{{route('user.edit', $item)}}' class='btn btn-white'><i class="far fa-edit fa-2x text-warning"></i></a>
     {{-- @endcan --}}
     @if($item->valid ==0)
     <a href='{{route('user.show', $item)}}' class='btn btn-white'>
         <i class="far fa-check-circle fa-2x text-danger"></i></a>
                       
         @else
         
         <button class='btn btn-white'><i class="far fa-check-circle fa-2x text-success"></i></button>
         
     <a href='{{route('editsugges', $item->id)}}' class='btn btn-white'><i class="fas fa-lightbulb fa-2x text-info"></i></a>
         <a href='{{route('profil.show', $item)}}'class='btn btn-white'><i class="far fa-address-card fa-2x text-secondary"></i></a>
     @endif
     {{-- @elseif(Auth::user()->role_id==1)
     <a href='{{route('team.edit', $item)}}' class='btn btn-white'><i class="far fa-edit fa-2x text-warning"></i></a><b></b></a>
     @endif --}}
 </div>
   </div>
  
  @endcan
   @endforeach
   
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop