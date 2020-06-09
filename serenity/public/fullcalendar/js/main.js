$(function(){

	$('#calendar').fullCalendar({
		dateClick: function(date, jsEvent, view) {
	  
	        $('#dialog').dialog('open');
	        /*$.ajax({
	        	url : 'index.php',
	        	type: 'POST',
	        	data : {clickDate : clickDate},
	        	success : function(res){
	        		console.log(res);
	        	},
	        	error : function(){
	        		alert('Error!');
	        	}
	        });*/
    	},
		// theme: true,
		lang: 'ru',
		eventSources : [
			{
				events : events,
				color : '#0EB6A2',
				textColor : '#fff'
			}
		],
		events: [
			{
			  title: 'All Day Event',
			  start: '2020-05-01'
			},
			{
			  title: 'Long Event',
			  start: '2020-05-07',
			  end: '2020-05-10'
			},
			{
			  groupId: '999',
			  title: 'Repeating Event',
			  start: '2020-05-09T16:00:00'
			},
			{
			  groupId: '999',
			  title: 'Repeating Event',
			  start: '2020-05-16T16:00:00'
			},
			{
			  title: 'Conference',
			  start: '2020-05-11',
			  end: '2020-05-13'
			},
			{
			  title: 'Meeting',
			  start: '2020-05-12T10:30:00',
			  end: '2020-05-12T12:30:00'
			},
			{
			  title: 'Lunch',
			  start: '2020-05-12T12:00:00'
			},
			{
			  title: 'Meeting',
			  start: '2020-05-12T14:30:00'
			},
			{
			  title: 'Birthday Party',
			  start: '2020-05-13T07:00:00'
			},
			{
			  title: 'Click for Google',
			  url: 'http://google.com/',
			  start: '2020-05-28'
			}
		  ]
		
	});

	$('#dialog').dialog({
		autoOpen: false,
		show: {
			effect: 'drop',
			duration: 500
		},
		hide: {
			effect: 'clip',
			duration: 500
		}
	});

	$('.datepicker').datepicker({
		dateFormat: "yy-mm-dd"
	});

});