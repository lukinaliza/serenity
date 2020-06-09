@extends('admin.admin-index')



@section('content')
    {!! Form::open(['route' => 'sheldue.store']) !!}

    <head>
  <meta charset="utf-8">
  <title>Добавить график</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/css/bootstrap-datetimepicker.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/js/bootstrap-datetimepicker.min.js"></script>

  <style>
   .text {
    margin-left: auto;
    margin-right: auto;
     font-size: 20pt;
     font-style: italic;
    width: auto
   }
  </style>
          <script>
          $('#appointment_end_datetime').datetimepicker({
          format: '%Y-%m-%dT%TZ',
          sideBySide: true
        });
        </script>
 </head>
 <body>
 <div class="text">
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('date', 'Дата')}}
       </div>
       <div class="col-md-15", id='appointment_end_datetime'>
             {{Form::datetimelocal('date', null, ['class'=>'form-control'])}}
        </div>
    </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('price_line_id', 'Услуга')}}
       </div>
        <div class="col-md-15">
        {{ Form::select('price_line_id', $idservice, 'id') }}
        </div>
        </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('spec_id', 'Мастер')}}
       </div>
       <div class="col-md-15">
             {{Form::select('spec_id', $idspecial, 'id')}}
        </div>
        </div>
    <div class="form-group">
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-success'])}}
    </div>
    </div>
    </div>
</body>
    {!! Form::close() !!}
@endsection
