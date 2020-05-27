@extends('layouts.master')

@section('content')

@include('components.nav')
<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Agenda</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

    @php 
    
    use App\Helpers\Calendar\Month;
    use App\Helpers\Calendar\Events;
    $events=new Events(); 
    $month = new Month( $_GET['month'] ?? null, $_GET['year'] ?? null);
    $start = $month->getStartingDay();
    $start=$start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');
    $weeks = $month->getWeeks();
    $end = (clone $start)->modify('+' . (6 + 7 * ($weeks-1)) . 'days');
    // $events = $events->getEventsBetweenByDay($start , $end);
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
               <div class='text-center'>
    
                   <a  class="btn btn-info "href="{{route('event.create')}}">Ajout un evenement</a>
               </div>
    </div>
    {{-- {{$month ->getWeeks()}} --}}
    

    <table class="w-75 mx-auto calendar__table calendar__table--{{$month->getWeeks()}}weeks ">
        @for ($i = 0; $i < $weeks ; $i++) 
        <tr>
            @foreach ($month->days as $k => $day)
            @php
            $date = (clone $start)->modify("+" . ($k + $i * 7) . "days");
            // $eventsForDay = $events[$date->format('Y-m-d')] ?? [];

            @endphp
            <td class="@if(!$month->withinMonth($date))calendar__othermonth @endif">
                @if ($i===0)
                    <div class="calendar__weekday">{{$day}}</div>
                @endif
                    <div class="calendar__day">{{$date->format('d')}}</div>
                        {{-- @foreach ($eventsForDay as $event)
                        <div class="calendar__event">

                            {{(new \DateTime($event->start))->format('H:i')}}-{{(new \DateTime($event->start))->format('H:i')}}
                            | <a href="{{route('event.show',$event)}}">ook</a>

                    </div>

                @endforeach --}}

            </td>
            @endforeach
        </tr>
        @endfor

    </table>

    @include('components.footer')
    @endsection
