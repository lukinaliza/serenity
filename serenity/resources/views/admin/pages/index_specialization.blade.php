@extends('admin.admin-index')

@section('content')

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Описание</th>
    </tr>
  </thead>
  <tbody>

    @foreach($specialization as $s)
     <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{ $s->name }}</td>
      <td>{{ $s->description }}</td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection
