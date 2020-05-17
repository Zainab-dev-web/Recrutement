<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    @php 
    
    use App\Helpers\Calendar\Events;
    $events=new Event(); 


    $event = $events->find( $_GET['id']);
 
    
    @endphp

<h1>Voici l'evenement : {{$event['name']}}</h1>
<ul>
<li>Date : {{new DateTime($event['start'])->format('d/m/Y')}}</li>
<li>Heure de démarage : {{new DateTime($event['start'])->format('H:i')}}</li>
<li>Heure de fin : {{new DateTime($event['end'])->format('H:i')}}</li>
<li>Description: <br>
     {{$event['description']}}</li>

</ul>


</body>
</html>
