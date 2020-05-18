<?php 
namespace App\Helpers\Calendar;

class Events{

    // public function getEventsBetween(){

    // }

    public function getEventsBetweenByDay(\DateTime $start, \DateTime $end): array{

        $events = $this->getEventsBetweenByDay($start , $end);
        $days =[];
        foreach($events as $event){
            $date =explode(' ' , $event['start'])[0];
            if(!isset($days[$date])){
                $days[$date] = [$event];
            }else{
                $days[$date][] =$event;
            }
        }
        return $days;
    }
}