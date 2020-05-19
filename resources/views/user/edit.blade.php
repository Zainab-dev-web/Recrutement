{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    





<div class="box box-primary py-5 my-5 w-50">
    <div class="text-center">
    <h3 class="box-title text-center">Modifier les données de l'utilisateur: {{$user->name}}</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
<div class="row mx-auto">
<form  action="{{route('user.update' , $user)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nom</label>
          <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{$user->nom}}" id="exampleInputEmail1" placeholder="Enter un nom">
          @error('nom')  
            <div class="text-danger">{{ $message }}</div>  
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" id="exampleInputEmail1" placeholder="Enter un email">
          @error('email')  
            <div class="text-danger">{{ $message }}</div>  
        @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$user->password}}" id="exampleInputPassword1" placeholder="Password">
          @error('password')  
          <div class="text-danger">{{ $message }}</div>  
            @enderror
        </div>
        
        <div class="form-group ">
            <label for="exampleInputFile">Modifier la photo de profil</label>
            <input type="file" name='photo' class="pb-3 form-control @error('photo') is-invalid @enderror"  value="{{$user->photo}}"id="exampleInputFile">
              @error('photo')  
            <div class="text-danger">{{ $message }}</div>  
              @enderror
          </div>
          <div class="form-group ">
            <label for="exampleInputFile">Role</label>
            <select name="role_id" id="" class='custom-select'>
              @foreach ($roles as $item)
                  
              <option value="{{$item->id}}">{{$item->role}}</option>
              @endforeach
            </select>
            
            {{-- <select  name="role_id">

                @foreach ($user as $item)
                    <option value="{{$item->role_id}}">{{$item->role->role}}</option>
                @endforeach      

                     --}}
            </select>
            @error('role_id')  
            <div class="text-danger">{{ $message }}</div>  
            @enderror 
              
          </div>
          


         
      </div>
      <!-- /.box-body -->

      <div class="box-footer text-center">
        <button type="submit" class="btn btn-warning">Modifier</button>
      </div>
    </form>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop