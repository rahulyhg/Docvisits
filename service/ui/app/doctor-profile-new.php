<?php 
include("service/ui/common/header_doc_home.php"); 
?>
<link href='service/public/newcss/calendar/fullcalendar.min.css' rel='stylesheet' />
<link href='service/public/newcss/calendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='service/public/newjs/calendar/lib/moment.min.js'></script>
<script src='service/public/newjs/calendar/lib/jquery.min.js'></script>
<script src='service/public/newjs/calendar/fullcalendar.min.js'></script>
<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '2017-05-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectHelper: true,
      select: function(start, end) {
        var title = prompt('Event Title:');
        var eventData;
        if (title) {
          eventData = {
            title: title,
            start: start,
            end: end
          };
          $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
        }
        $('#calendar').fullCalendar('unselect');
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
    });

  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
<?php include("service/ui/common/footer.php"); ?>
