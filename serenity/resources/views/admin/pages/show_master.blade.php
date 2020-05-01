@extends('admin.admin-index')

@section('content')

 <head>
  <meta charset="utf-8">
  <title>Успешное добавление</title>
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
    <p>Фамилия - {{$master->surname}}<br>
    Имя - {{$master->name}}<br>
    Номер телефона - {!!$master->phone!!}<br>

    <a href={{url("/create/master/{$master->id}/edit")}} class='btn btn-primary'>
        Редактировать</a>

   {!! Form::open(['route' => ['master.destroy', $master->id],  'method' => 'delete'])!!}
   {{Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы']) }}
   {!! Form::close() !!}
   <a href={{url("/create/master")}} class='btn btn-info'>
        Перейти к таблице мастеров</a>
   </p>
    </div>
 </body>



@endsection
