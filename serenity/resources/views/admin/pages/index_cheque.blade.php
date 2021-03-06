@extends('admin.admin-index')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Таблица чеков</title>
 </head>

     <table class="table table-striped" id="info-table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Дата</th>
      <th scope="col">Клиент</th>
      <th scope="col">Номер телефона клиента</th>
    </tr>
  </thead>
  <tbody>

    @foreach($cheque as $s)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{ $s->date }}</td>
      <td>{{ $s->user_surname }} {{ $s->user_name }}</td>
      <td>{{ $s->user_phone }}</td>
       <td>
         <a href={{url("/create/cheque/{$s->id}/edit")}} class='btn btn-primary', title ='Редактировать'btn btn-primary, style='position: relative;float:left'>
             Редактировать</a>
            {!! Form::open(['route' => ['cheque.destroy', $s->id],  'method' => 'delete'])!!}
            {!!Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы', 'style' => 'position: relative;float: left;']) !!}
            {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection
