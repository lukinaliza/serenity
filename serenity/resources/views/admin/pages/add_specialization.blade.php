@extends('admin.admin-index')

@section('title', 'Добавить поле')

@section('content')
    {!! Form::open(['route' => 'specialization.store']) !!}
        <head>
  <meta charset="utf-8">
  <title>Добавить специализацию</title>
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
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('name', 'Название специализации')}}
       </div>
       <div class="col-md-15">
             {{Form::text('name', null, ['class'=>'form-control'])}}
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('description', 'Описание')}}
       </div>
       <div class="col-md-15">
             {{Form::textarea('description', null, ['class'=>'form-control'])}}
        </div>
        </div>
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-primrary'])}}
     </div>
    </div>
    </div>
</body>
    {!! Form::close() !!}
@endsection
