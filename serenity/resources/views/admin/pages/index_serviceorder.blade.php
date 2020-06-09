@extends('admin.admin-index')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Таблица записей</title>
 </head>

     <table class="table table-striped" id="info-table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Клиент</th>
      <th scope="col">Номер телефона</th>
      <th scope="col">Дата и время</th>
      <th scope="col">Процедура</th>
      <th scope="col">Стоимость</th>
      <th scope="col">Мастер</th>
      <th scope="col">Специальность</th>
    </tr>
  </thead>
  <tbody>

    @foreach($serviceorder as $s)
    @foreach($master as $m)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{ $s->user_surname }} {{ $s->user_name }}</td>
      <td>{{ $s->user_phone }}</td>
      <td>{{ $s->shelduedate }} {{ $s->shelduetime }}</td>
      <td>{{ $s->service_name }}</td>
      <td>{{ $s->cost }}</td>
      <td>{{ $m->master_name }}</td>
      <td>{{ $m->spec }}</td>
       <td>
         <a href={{url("/create/serviceorder/{$s->id}/edit")}} class='btn btn-primary', title ='Редактировать'btn btn-primary, style='position: relative;float:left'>
             Редактировать</a>
            {!! Form::open(['route' => ['serviceorder.destroy', $s->id],  'method' => 'delete'])!!}
            {!!Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы', 'style' => 'position: relative;float: left;']) !!}
            {!! Form::close() !!}
      </td>
    </tr>
@endforeach
    @endforeach
  </tbody>
</table>

@endsection
