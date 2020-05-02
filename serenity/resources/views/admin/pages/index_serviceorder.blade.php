@extends('admin.admin-index')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Таблица записей</title>
 </head>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">чек</th>
      <th scope="col">график</th>
      <th scope="col">прайс</th>
    </tr>
  </thead>
  <tbody>

    @foreach($serviceorder as $s)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{ $s->cheque_id }}</td>
      <td>{{ $s->sheldue_id }}</td>
      <td>{{ $s->price_line_id }}</td>
       <td>
         <a href={{url("/create/serviceorder/{$s->id}/edit")}} class='btn btn-primary', title ='Редактировать'btn btn-primary, style='position: relative;float:left'>
             Редактировать</a>
            {!! Form::open(['route' => ['serviceorder.destroy', $s->id],  'method' => 'delete'])!!}
            {!!Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы', 'style' => 'position: relative;float: left;']) !!}
            {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection
