@extends('admin.admin-index')

@section('title', 'Изменить поле')

@section('content')

    {!!  Form::model($sheldue, ['route' => ['sheldue.update', $sheldue->id],  'method' => 'put'])!!}
           <head>
  <meta charset="utf-8">
  <title>Добавить график</title>
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
             {{Form::label('date', 'Дата Время')}}
       </div>
       <div class="col-md-15">
             {{Form::datetime('date', null, ['class'=>'form-control'])}}
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
         {{Form::submit('Изменить', null, ['class'=>'btn btn-success'])}}
    </div>
    </div>
    </div>
</body>
@endsection
