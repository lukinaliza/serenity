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
     <p> Название - {{$specialization->name}}<br>
         Описание - {!!$specialization->description!!}<br>

         <a href={{url("/create/specialization/{$specialization->id}/edit")}} class='btn btn-primary'>
         Редактировать
         </a>

         {!! Form::open(['route' => ['specialization.destroy', $specialization->id],  'method' => 'delete'])!!}
         {{Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы']) }}
         {!! Form::close() !!}

         <a href={{url("/create/specialization")}} class='btn btn-info'>
            Перейти к таблице специализаций
         </a>
     </p>
    </div>

  </body>
@endsection
