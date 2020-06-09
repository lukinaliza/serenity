@extends('admin.admin-index')

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<head>
  <meta charset="utf-8">
  <title>Таблица услуг</title>
 </head>
    <table class="table table-striped" id="info-table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Наименование</th>
      <th scope="col">Описание</th>
      <th scope="col">Категория</th>
      <th scope="col">Управление</th>
    </tr>
  </thead>
  <tbody>

    @foreach($service as $s)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{ $s->name }}</td>
      <td>{{ $s->description }}</td>
      <td>{{ $s->categ }}</td>
       <td>
         <a href={{url("/create/service/{$s->id}/edit")}} class='btn btn-primary', title ='Редактировать'btn btn-primary, style='position: relative;float:left'>
             Редактировать</a>
            {!! Form::open(['route' => ['service.destroy', $s->id],  'method' => 'delete'])!!}
            {!!Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы', 'style' => 'position: relative;float: left;']) !!}
            {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
