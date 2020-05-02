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
    <p>Стоимость - {{$pricelistline->cost}}<br>
    Услуга - {!!$pricelistline->service_id!!}<br>
    Прайскурант - {!!$pricelistline->pricelist_id!!}<br>

    <a href={{url("/create/pricelistline/{$pricelistline->id}/edit")}} class='btn btn-primary'>
        Редактировать</a>

   {!! Form::open(['route' => ['pricelistline.destroy', $pricelistline->id],  'method' => 'delete'])!!}
   {{Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы']) }}
   {!! Form::close() !!}
   <a href={{url("/create/pricelistline")}} class='btn btn-info'>
        Перейти к таблице стоимостей</a>
   </p>
    </div>
 </body>



@endsection
