@extends('admin.admin-index')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Таблица пользователей</title>
 </head>

    <table class="table table-striped" id="info-table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Имя</th>
      <th scope="col">Почта</th>
      <th scope="col">Телефон</th>
      <th scope="col">Клиент</th>
      <th scope="col">Администратор</th>
      <th scope="col">Мастер</th>
    </tr>
  </thead>
  <tbody>

    @foreach($user as $s)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{ $s->surname }}</td>
      <td>{{ $s->name }}</td>
      <td>{{ $s->email }}</td>
      <td>{{ $s->phone }}</td>
      <td><input type='checkbox' {{$s->hasRole('Клиент') ? 'checkbed' : ''}} name='role_user'></td>
      <td><input type='checkbox' {{$s->hasRole('Администратор') ? 'checkbed' : ''}} name='role_admin'></td>
      <td><input type='checkbox' {{$s->hasRole('Мастер') ? 'checkbed' : ''}} name='role_master'></td>
       <td>
          <a href={{url("/create/user/{$s->id}/edit")}} class='btn btn-primary', title ='Редактировать'btn btn-primary, style='position: relative;float:left'>
             Редактировать</a>
            {!! Form::open(['route' => ['user.destroy', $s->id],  'method' => 'delete'])!!}
            {!!Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы', 'style' => 'position: relative;float: left;']) !!}
            {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection
