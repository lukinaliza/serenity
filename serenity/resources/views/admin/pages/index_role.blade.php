@extends('admin.admin-index')

@section('content')
<head>
  <meta charset="utf-8">
  <title>Таблица ролей</title>
 </head>

     <table class="table table-striped" id="info-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Управление</th>
    </tr>
  </thead>
  <tbody>

    @foreach($role as $s)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{ $s->name }}</td>
       <td>
          <a href={{url("/create/role/{$s->id}/edit")}} class='btn btn-primary', title ='Редактировать'btn btn-primary, style='position: relative;float:left'>
             Редактировать</a>
            {!! Form::open(['route' => ['role.destroy', $s->id],  'method' => 'delete'])!!}
            {!!Form::submit('Удалить',['type' => 'submit', 'name' => 'delete', 'value' => 'delete', 'class' => 'btn btn-danger', 'title' => 'Удалить из базы', 'style' => 'position: relative;float: left;']) !!}
            {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection
