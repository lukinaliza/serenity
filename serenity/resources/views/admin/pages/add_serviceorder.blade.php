@extends('admin.admin-index')



@section('content')
    {!! Form::open(['route' => 'serviceorder.store']) !!}

    <head>
  <meta charset="utf-8">
  <title>Добавить чек</title>
  <style>
   .text {
    margin-left: auto;
    margin-right: auto;
     font-size: 20pt;
     font-style: italic;
    width: auto
   }
  </style>
 </head>
 <body>
 <div class="text">
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('cheque_id', 'Чек')}}
       </div>
       <div class="col-md-15">
             {{Form::text('cheque_id', null, ['class'=>'form-control'])}}
        </div>
        </div>
       <div class="form-group">
       <div class="col-md-15">
             {{Form::label('sheldue_id', 'График')}}
       </div>
       <div class="col-md-15">
             {{Form::text('sheldue_id', null, ['class'=>'form-control'])}}
        </div>
        </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('price_line_id', 'Прайс')}}
       </div>
       <div class="col-md-15">
             {{Form::text('price_line_id', null, ['class'=>'form-control'])}}
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
