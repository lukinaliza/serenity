@extends('admin.admin-index')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Таблица ролей пользователя</title>
 </head>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Пользователь</th>
      <th scope="col">Номер телефона</th>
      <th scope="col">Роль</th>
    </tr>
  </thead>
  <tbody>

    @foreach($userrole as $s)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{ $s->user_surname }} {{ $s->user_name }}</td>
      <td>{{ $s->user_phone }}</td>
      <td>{{ $s->role_name }}</td>
       <td>
         <a href={{url("/create/userrole/{$s->id}/edit")}} class='btn btn-primary', title ='Редактировать'btn btn-primary, style='position: relative;float:left'>
             Редактировать</a>
            {!! Form::open(['route' => ['userrole.destroy', $s->id],  'method' => 'delete'])!!}
            {!!Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы', 'style' => 'position: relative;float: left;']) !!}
            {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection
