{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

   <h2 class='text-center my-2'>Match</h2>

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Offre</th>
            <th scope="col">Entreprise</th>
            <th scope="col">Action</th>
            
            
           
          </tr>
        </thead>
        <tbody>
            @foreach ($offres as $item)
                {{-- le dolar se trouve dans le controller le compact --}}
            
                <tr>
                    <td>{{$item->id}}</td>
                    <td><b>Poste:</b>{{$item->poste}}.
                        <br><i class="fas fa-map-marker-alt"></i> <b>Lieu:</b>{{$item->lieu}}.
                        <br><b>Il faut être: </b>{{$item->qualite}}.
                        <br><b>Description de l'offre: </b>{{$item->description}}
                    <br><b>Statut recherché:</b> {{$item->statut->statut}}
                </td>
                    <td><b class='text-uppercase'>{{$item->user->nom}}</b></td>
                   
                    
                    <td>
                        {{-- <div class="stage">
                            <div class="heart"></div>
                          </div> --}}
                          <div class="text-center">
                            <a href='' data-toggle="modal" data-target="#exampleModalLong"class='btn btn-white'><i class="fas fa-heart text-danger fa-2x"></i></a>
                                
                    
                    
                               
                          
                      
                    

                    </td>
                 
                   
                </tr>
     
     
          
          @endforeach
          
        </tbody>
      </table>
       <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="modal-body text-sucess" >
                            {{-- <label for="tag[]">Tags</label>
                            <div class="row">
                              @foreach ($tags as $item)
                      
                              <div class="form-check col-2">
                                <input value="{{$item->id}}" name="tag[]" type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{$item->nom}}</label>
                              </div>
                              @endforeach
                            </div> --}}
                        </div>
                        <div class="modal-footer">
                            
                        <a href="{{route('match.index')}}"><button type="button" class="btn btn-primary">Retour</button></a>
                        </div>
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