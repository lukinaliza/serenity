@extends('admin.admin-index')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Таблица графиков</title>
 </head>

    <table class="table table-striped" id="info-table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Дата Время</th>
      <th scope="col">Услуга</th>
      <th scope="col">Мастер</th>
    </tr>
  </thead>
  <tbody>

    @foreach($sheldue as $s)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{ $s->date }}</td>
      <td>{{ $s->service_name }}</td>
      <td>{{ $s->master }}</td>
       <td>
         <a href={{url("/create/sheldue/{$s->id}/edit")}} class='btn btn-primary', title ='Редактировать'btn btn-primary, style='position: relative;float:left'>
             Редактировать</a>
            {!! Form::open(['route' => ['sheldue.destroy', $s->id],  'method' => 'delete'])!!}
            {!!Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы', 'style' => 'position: relative;float: left;']) !!}
            {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection
