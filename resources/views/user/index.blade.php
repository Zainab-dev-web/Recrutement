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
      <b>Domaine</b> <a class="pull-right">{{$item->domaine}}</a>
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
    
        <a href='{{route('profil.index')}}'class='btn btn-white'><i class="far fa-address-card fa-2x text-secondary"></i></a>
        <a href='{{route('Allnote')}}'class='btn btn-white'><i class="fas fa-file-alt text-dark fa-2x"></i></i></a>
         
    @endif
   
</div>
  </div>
   @endif
 
@endcan
@can('hre_valid')

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
       <b>Domaine</b> <a class="pull-right">{{$item->domaine}}</a>
       </li>
       
     </ul>
 <div class='text-center mt-3'>
    
     @if($item->valid ==0)
     <a href='{{route('user.show', $item)}}' class='btn btn-white'>
         <i class="far fa-check-circle fa-2x text-danger"></i></a>
                       
         @else
         
         <button class='btn btn-white'><i class="far fa-check-circle fa-2x text-success"></i></button>
         
        
         <a href='{{route('profil.index')}}'class='btn btn-white'><i class="far fa-address-card fa-2x text-secondary"></i></a>
         <a href='{{route('Allnote')}}'class='btn btn-white'><i class="fas fa-file-alt text-dark fa-2x"></i></i></a>
         
     @endif
    
 </div>
   </div>
 @endif
  
@endcan

  @can('admin_edit')
  @if($item->role_id!=1)
   <div class="box-body box-profile text-center w-25 m-3 border border-info rounded p-3">
    <img class="profile-user-img img-responsive img-circle " src="{{asset('storage/'.$item->photo)}}" alt="User profile picture">
 
    <h3 class="profile-username text-center">{{$item->nom}}</h3>
 
    <p class="text-muted text-center">{{$item->role->role}}</p>
 
     <ul class="list-group list-group-unbordered">
       <li class="list-group-item">
       <b>Email</b> <a class="pull-right">{{$item->email}}</a>
       </li>
       <li class="list-group-item">
       <b>Domaine</b> <a class="pull-right">{{$item->domaine}}</a>
       </li>
       
     </ul>
 <div class='text-center mt-3'>
     
   
    
    
     @if($item->valid ==0)
     <a href='{{route('user.show', $item)}}' class='btn btn-white'>
         <i class="far fa-check-circle fa-2x text-danger"></i></a>
                       
         @else
         
         <button class='btn btn-white'><i class="far fa-check-circle fa-2x text-success"></i></button>
         
         <a href='{{route('profil.show', $item->id)}}'class='btn btn-white'><i class="far fa-address-card fa-2x text-secondary"></i></a>
     @endif
    
 </div>
   </div>
  @endif
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