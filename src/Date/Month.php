<?php 
namespace App\Date;

class Month{

    private $months = [ 'Janvier' , 'Février' , 'Mars' , 'Avril' , 'Mai' , 'Juin' , 'Juillet' , 'Aout' , 'Septembre' , 'October' , 'Novembre', 'Décembre' , 'Décembre'];


    public function __construct(?int $month = null, ?int $year = null){
        if($month === null){
            $month = intval(date(format:'m'));
        }
        if($year === null){
            $year = intval(date(format:'Y'));
        }
        $month= $month % 12;
        $this ->month = $month;
        $this->year = $year;
    }
    public function toString(): string{
        return $this->months[$this->month -1] . ' ' . $this->year;

    }
    public function getWeeks() : int{
        
    }
}