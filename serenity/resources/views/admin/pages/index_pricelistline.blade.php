@extends('admin.admin-index')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Таблица стоимостей</title>
 </head>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Стоимость</th>
      <th scope="col">Услуга</th>
      <th scope="col">Прайскурант</th>
    </tr>
  </thead>
  <tbody>

    @foreach($pricelistline as $s)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{ $s->cost }}</td>
      <td>{{ $s->servname }}</td>
      <td>{{ $s->pricename }}</td>
       <td>
         <a href={{url("/create/pricelistline/{$s->id}/edit")}} class='btn btn-primary', title ='Редактировать'btn btn-primary, style='position: relative;float:left'>
             Редактировать</a>
            {!! Form::open(['route' => ['pricelistline.destroy', $s->id],  'method' => 'delete'])!!}
            {!!Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы', 'style' => 'position: relative;float: left;']) !!}
            {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection
