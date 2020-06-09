
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />


  <title>
    Initialize Globals Demo - Demos | FullCalendar
  </title>


<link href='css/calendar.css' rel='stylesheet' />

<link href='https://unpkg.com/@fullcalendar/core@4.4.2/main.min.css' rel='stylesheet' />




  <link rel="stylesheet" href={{asset('fullcalendar/bootstrap/css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{asset('css/calendar.css')}}>
	<link rel="stylesheet" href={{asset('fullcalendar/css/jquery-ui.css')}}>
  <link href='https://unpkg.com/@fullcalendar/daygrid@4.4.2/main.min.css' rel='stylesheet' />
  <link href='https://unpkg.com/@fullcalendar/timegrid@4.4.2/main.min.css' rel='stylesheet' />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



       <script>
          $('#appointment_end_datetime').datetimepicker({
          format: '%Y-%m-%dT%TZ',
          sideBySide: true
        });
       </script>

</head>
<body>


<div id='calendar'
data-route-load-events='{{route('routeLoadEvents')}}'></div>



<div id="dialog">
  {!! Form::open(['route' => 'calendar.store']) !!}
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('date', 'Дата')}}
       </div>
       <div class="col-md-15">
             {{Form::date('date', null, ['class'=>'form-control'])}}
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('time', 'Время')}}
       </div>
       <div class="col-md-15">
             {{Form::time('time', null, ['class'=>'form-control'])}}
        </div>
    </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('price_line_id', 'Услуга')}}
       </div>
        <div class="col-md-15">
        {{ Form::select('price_line_id', $idservice, 'id', ['class'=>'form-control']) }}
        </div>
     </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('spec_id', 'Мастер')}}
       </div>
       <div class="col-md-15">
             {{Form::select('spec_id', $idspecial, 'id', ['class'=>'form-control'])}}
       </div>
     </div>
      <button id="create_appointment", class='btn btn-success'> Добавить график </button>
    </form>
     </div>

     <script src='https://unpkg.com/@fullcalendar/core@4.4.2/main.min.js'></script>

  <script src='https://unpkg.com/@fullcalendar/interaction@4.4.2/main.min.js'></script>
  <script src='https://unpkg.com/@fullcalendar/daygrid@4.4.2/main.min.js'></script>
  <script src='https://unpkg.com/@fullcalendar/timegrid@4.4.2/main.min.js'></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src={{asset('fullcalendar/packages/core/main.js')}}></script>
  <script src={{asset('fullcalendar/packages/interaction/main.js')}}></script>
  <script src={{asset('fullcalendar/packages/core/locales-all.js')}}></script>
  <script src={{asset('fullcalendar/js/script.js')}}></script>
  <script src={{asset('fullcalendar/js/calendar.js')}}></script>
</body>
</html>
