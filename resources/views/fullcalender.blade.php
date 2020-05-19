<!DOCTYPE html>
<html>

<head>
    <title>Laravel Fullcalender Add/Update/Delete Event Example Tutorial - Tutsmake.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"
    integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>


<div class="text-center my-3">
    <a class="btn btn-warning" href="{{route('add')}}">Créer un événement</a>
</div>

<body>

    <div class="container">
        <div class="response"></div>
        <div id='calendar'></div>
    </div>
  
    <script>
        $(document).ready(function () {
            var SITEURL = "{{url('/')}}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                events: SITEURL + "/fullcalendareventmaster",
                displayEventTime: true,
                editable: true,
                timeFormat: 'H(:mm)',
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
             
                eventClick: function (event) {
                    var deleteMsg = confirm("Do you really want to delete?");
                    if (deleteMsg) {
                        $.ajax({
                            type: "POST",
                            url: SITEURL + '/fullcalendareventmaster/delete',
                            data: "&id=" + event.id,
                            success: function (response) {
                                if (parseInt(response) > 0) {
                                    $('#calendar').fullCalendar('removeEvents', event
                                        .id);
                                    displayMessage("Deleted Successfully");
                                }
                            }
                        });
                    }
                }
            });
        });

        function displayMessage(message) {
            $(".response").html("" + message + "");
            setInterval(function () {
                $(".success").fadeOut();
            }, 1000);
        }

    </script>
</body>

</html>
