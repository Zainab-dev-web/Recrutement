<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container my-5">

        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Titre" name="titre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="date">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Heure</label>
                <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Password" name="heure">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>
    </html>