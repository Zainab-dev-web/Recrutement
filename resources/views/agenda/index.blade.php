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
    <div class="text-center my-5">
        <h1 class="my-2"><strong>Calendrier</strong></h1>
    </div>
    <hr class='w-25 mx-auto'>

    @php 
    
    use App\Helpers\Calendar\Month;
    use App\Helpers\Calendar\Events;
    $events=new Event(); 
    $month = new Month( $_GET['month'] ?? null, $_GET['year'] ?? null);
    $start = $month->getStartingDay();
    $start=$start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');
    $weeks = $month->getWeeks();
    $end = (clone $start)->modify('+' . (6 + 7 * ($weeks-1)) . 'days');
    $events = $events->getEventsBetweenByDay($start , $end);
    @endphp

    
    <div class=" text-center">
        
        <div class=" row d-flex text-center justify-content-center mx-sm-3">
            <div class="col-1">
                <a href="{{route('index')}}?month={{$month->previousMonth()->month}}&year={{$month->previousMonth()->year}}"
                class='btnagenda'><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="col-2">
                <h2 class="">{{$month->toString()}}</h2>
            </div>
            <div class="col-1">
                <a href="{{route('index')}}?month={{$month->nextMonth()->month}}&year={{$month->nextMonth()->year}}"
                class='btnagenda '><i class="fas fa-arrow-right"></i></a>
            </div>
           
            
        </div>
    </div>
    {{-- {{$month ->getWeeks()}} --}}
    

    <table class="w-75 mx-auto calendar__table calendar__table--{{$month->getWeeks()}}weeks ">
        @for ($i = 0; $i < $weeks ; $i++) 
        <tr>
            @foreach ($month->days as $k => $day)
            @php
            $date = (clone $start)->modify("+" . ($k + $i * 7) . "days");
            $eventsForDay = $events[$date->format('Y-m-d')] ?? [];

            @endphp
            <td class="@if(!$month->withinMonth($date))calendar__othermonth @endif">
                @if ($i===0)
                    <div class="calendar__weekday">{{$day}}</div>
                @endif
                    <div class="calendar__day">{{$date->format('d')}}</div>
                        @foreach ($eventsForDay as $event)
                        <div class="calendar__event">

                            {{(new \DateTime($event->start))->format('H:i')}}-{{(new \DateTime($event->start))->format('H:i')}}
                            | <a href="{{route('event.show',$event)}}">{{$event->classe->name}} |
                                {{$event->nom}} </a>

                    </div>

                @endforeach

            </td>
            @endforeach
        </tr>
        @endfor

    </table>
</body>
</html>
