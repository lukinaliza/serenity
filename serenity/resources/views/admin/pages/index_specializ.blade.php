@extends('admin.admin-index')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Таблица специалистов</title>
 </head>

  <table class="table table-striped" id="info-table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Категория</th>
      <th scope="col">Мастер</th>
      <th scope="col">Управление</th>
    </tr>
  </thead>
  <tbody>

    @foreach($specializ as $s)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{$s->specializ_name}}</td>
      <td>{{$s->user_surname}}{{$s->user_name}}</td>
       <td>
          <a href={{url("/create/specializ/{$s->id}/edit")}} class='btn btn-primary', title ='Редактировать'btn btn-primary, style='position: relative;float:left'>
             Редактировать</a>
            {!! Form::open(['route' => ['specializ.destroy', $s->id],  'method' => 'delete'])!!}
            {!!Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы', 'style' => 'position: relative;float: left;']) !!}
            {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection
