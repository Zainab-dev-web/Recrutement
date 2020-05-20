{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <h2 class='text-center my-2'>Modification de la section Contact</h2>

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Adresse</th>
            <th scope="col">Ville</th>
            <th scope="col">Rue</th>
            <th scope="col">Code</th>
            <th scope="col">Numéro</th>
            <th scope="col">Disponibilité GSM</th>
            <th scope="col">Email</th>
            <th scope="col">Disponibilité Email</th>
            <th scope="col">Action</th>
            
            
           
          </tr>
        </thead>
        <tbody>
            @foreach ($contact as $item)
                {{-- le dolar se trouve dans le controller le compact --}}
            
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->adresse}}</td>
                    <td>{{$item->ville}}</td>
                    <td>{{$item->rue}}</td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->numero}}</td>
                    <td>{{$item->Ndispo}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->Edispo}}</td>
                    
                    <td>
                            <a href='{{route('contactInfo.edit', $item)}}' class='btn btn-white'><i class="far fa-edit text-warning"></i></a>
                          
                    </td>
                 
                   
                </tr>
     
     
          
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