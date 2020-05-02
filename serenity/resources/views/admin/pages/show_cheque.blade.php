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
    дата - {!!$cheque->date!!}<br>
    пользователь - {!!$cheque->user_id!!}<br>

    <a href={{url("/create/cheque/{$cheque->id}/edit")}} class='btn btn-primary'>
        Редактировать</a>

   {!! Form::open(['route' => ['cheque.destroy', $cheque->id],  'method' => 'delete'])!!}
   {{Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы']) }}
   {!! Form::close() !!}
   <a href={{url("/create/cheque")}} class='btn btn-info'>
        Перейти к таблице ролей пользователя</a>
   </p>
    </div>
 </body>



@endsection
