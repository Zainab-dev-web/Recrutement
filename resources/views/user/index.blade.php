{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<style>
  .active-cyan-2 input.form-control[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #4dd0e1;
  box-shadow: 0 1px 0 0 #4dd0e1;
}
.active-cyan-2 input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #4dd0e1;
  box-shadow: 0 1px 0 0 #4dd0e1;
}
.active-cyan input[type=text] {

  border-bottom: 1px solid #4dd0e1;
  box-shadow: 0 1px 0 0 #4dd0e1;
}
</style>
<h2 class='text-center my-5 py-3'>Tout les utilisateurs</h2>
<hr>

<p>Rechercher un utilisateur:</p>
<div class="md-form active-cyan active-cyan-2 mb-3 row">
  
  <form action="{{route('searchUser')}}" class="search-form d-flex">
  <input class="form-control" name="search" type="text" placeholder="Chercher" aria-label="Search">
  <button type="submit" class="btn btn-white"><i class="fas fa-search"></i></button>
  </form>
</div>

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
        <a href='{{route('note.show', $item)}}'class='btn btn-white'><i class="fas fa-file-alt text-dark fa-2x"></i></i></a>
         
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
         <a href='{{route('note.show', $item->id)}}'class='btn btn-white'><i class="fas fa-file-alt text-dark fa-2x"></i></i></a>
         
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