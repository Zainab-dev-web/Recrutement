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
    http_response_code(404);
    use App\Helpers\Calendar\Events;
    $events=new Event(); 

    
    $event = $events->find( $_GET['id']);
 
    
    @endphp

    <h1>Page introuvable</h1>
</body>
</html>
