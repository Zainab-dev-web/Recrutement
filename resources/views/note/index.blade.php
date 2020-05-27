{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <h2 class='text-center my-2'>Tous les notes des candidat</h2>

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            {{-- <th scope="col">Présence</th>
            <th scope="col">Impression</th>
            <th scope="col">Savoir-être</th>
            <th scope="col">Capacité</th>
            <th scope="col">Sérieux</th> --}}
            <th scope="col">Note</th>
            {{-- <th scope="col">Résultat</th> --}}
            <th scope="col">Action</th>
            
            
           
          </tr>
        </thead>
        <tbody>
            @foreach ($evals as $item)
            @if($item->role_id == 4)
                {{-- le dolar se trouve dans le controller le compact --}}
            
                <tr>
                    <td>{{$item->id}}</td>
                    {{-- <td>{{$item->presence->presence}}</td>
                    <td>{{$item->impression}}</td>
                    <td>{{$item->savoir}}</td>
                    <td>{{$item->capacite}}</td>
                    <td>{{$item->serieux}}</td> --}}
                    <td>{{$item->note->note}}</td>
                    {{-- <td>{{$item->resultat->nom}}</td> --}}
                   
                    
                    <td>
                            {{-- <a href='{{route('contactInfo.edit', $item)}}' class='btn btn-white'><i class="far fa-edit text-warning"></i></a>
                           --}}
                    </td>
                 
                   
                </tr>
     
                @elseif($item->role_id == 5)


                <tr>
                    <td>{{$item->id}}</td>
                    {{-- <td>{{$item->presence->presence}}</td>
                    <td>{{$item->impression}}</td>
                    <td>{{$item->savoir}}</td>
                    <td>{{$item->capacite}}</td>
                    <td>{{$item->serieux}}</td> --}}
                    <td>{{$item->note->note}}</td>
                    {{-- <td>{{$item->resultat->nom}}</td> --}}
                   
                    
                    <td>
                            {{-- <a href='{{route('contactInfo.edit', $item)}}' class='btn btn-white'><i class="far fa-edit text-warning"></i></a>
                           --}}
                    </td>
                 
                   
                </tr>
                @endif
          
          @endforeach
          
        </tbody>
      </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop