{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

   <h2 class='text-center my-5'>Envoyer à des candidats une offre</h2>
   <hr class='text-center w-50'>

                    <form action="{{route('match.update' , $matchs->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container mx-auto p-5 w-50 my-5 bg-light text-sucess border border-secondary rounded">
                            <label for="match[]">Sélectionnez les candidats au choix:</label>
                            <div class="row">
                                @foreach ($users as $user)
                                @if($user->role_id==4)
                                <div class="form-check col-2">
                                    <input value="{{$user->id}}" name="match[]" type="checkbox" class="form-check-input">
                                    <label class="form-check-label">{{$user->nom}}</label>
                                </div>
                                @endif
                                @endforeach
                                
                            </div>
                        </div>
                        
                        <div class="text-center">
                            
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
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