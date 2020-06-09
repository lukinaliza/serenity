
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      defaultView: 'dayGridMonth',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      events:routeEvents('routeLoadEvents'),

      dateClick:function(info) {
           var clickDate = info.dateStr;
              $('#date').val(clickDate);
            $( "#dialog" ).dialog( "open" );
            },
    locale: 'ru'
    });
    calendar.render();
  });
  $( function() {
    $('#dialog').dialog({
		autoOpen: false,
		show: {
			effect: 'drop',
			duration: 500
		},
		hide: {
			effect: 'clip',
			duration: 500
		},
		buttons: {
        Отмена: function() {
         $( "#dialog" ).dialog( "close" );
        }
      }
	});
  } );
