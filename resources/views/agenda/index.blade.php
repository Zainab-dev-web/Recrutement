<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/calendar.css">
</head>
<body>
    <nav class='navbar navbar-dark bg-primary mb-3'>
    <a href="/index" class="navbar-brand">Mon calendrier</a>
    </nav>

    @php 
    // require 'src/Date/Month.php'; 
    use App\Helpers\Calendar\Month;
    // use App\Helpers\Calendar\Events;
    // $events=new Event();
    $month = new Month( $_GET['month'] ?? null, $_GET['year'] ?? null);
    $start = $month->getStartingDay();
    $start=$start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');
    $weeks = $month->getWeeks();
    $end = (clone $start)->modify('+' . (6 + 7 * ($weeks-1)) . 'days');
    // $events = $events->getEventsBetweenByDay($start , $end);
    @endphp
    <div class="d-flex flex-row align-items-center justify-content-center-between mx-sm-3">
        <h1>{{$month->toString()}}</h1>
        <div>
            <a href="/index.blade.php?month=<? =month->previousMonth()->month;?>&year=<?= $month->previousMonth()->year; ?>"class='btn btn-primary'>&lt;</a>
            <a href="/index.blade.php?month=<? =month->nextMonth()->month;?>&year=<?= $month->nextMonth()->year; ?>"class='btn btn-primary'>&gt;</a>
            
        </div>
    </div>
    <?= $month ->getWeeks(); ?>
    <table class='calendar__table calendar__table-- <?=$month->getWeeks()?> weeks;'>
        <?php for ($i=0;$i< $month->getWeeks(); $i++): ?>
            <tr>
                <?php 
                    foreach($month->days as $k=> $day):
                   $date = (clone $start)->modify('+' . ( $k + $i *7) .'days') 
                ?>
                <td class='<?= $month->withinMonth($date) ? '' : 'calendar__othermonth';?>'>
                    <?php if($i === 0):?>
                   <div class="calendar__weekday"><?= $day; ?></div>
                   <?php endif: ?>
                   <div class="calendar__day"><?= $date->format('d'); ?></div>
                </td>
                <?php endforeach;?>
            </tr>
            <?php endfor; ?>
    </table>
</body>
</html>
