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
    <p>Дата - {{$sheldue->date}}<br>
    Услуга - {!!$sheldue->price_line_id!!}<br>
    Мастер - {!!$sheldue->spec_id!!}<br>

    <a href={{url("/create/sheldue/{$sheldue->id}/edit")}} class='btn btn-primary'>
        Редактировать</a>

   {!! Form::open(['route' => ['sheldue.destroy', $sheldue->id],  'method' => 'delete'])!!}
   {{Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы']) }}
   {!! Form::close() !!}
   <a href={{url("/create/sheldue")}} class='btn btn-info'>
        Перейти к таблице графиков</a>
   </p>
    </div>
 </body>



@endsection
