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
    чек - {!!$serviceorder->cheque_id!!}<br>
    график - {!!$serviceorder->sheldue_id!!}<br>
    прайс - {!!$serviceorder->price_line_id!!}<br>

    <a href={{url("/create/serviceorder/{$serviceorder->id}/edit")}} class='btn btn-primary'>
        Редактировать</a>

   {!! Form::open(['route' => ['serviceorder.destroy', $serviceorder->id],  'method' => 'delete'])!!}
   {{Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы']) }}
   {!! Form::close() !!}
   <a href={{url("/create/serviceorder")}} class='btn btn-info'>
        Перейти к таблице записей</a>
   </p>
    </div>
 </body>



@endsection
