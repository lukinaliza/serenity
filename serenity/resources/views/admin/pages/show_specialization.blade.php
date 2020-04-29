@extends('admin.admin-index')

@section('content')

    <h1>{{$specialization->name}}</h1>
    <p>{!!$specialization->description!!}</p>

        <a href={{url("/create/specialization/{$specialization->id}/edit")}} class='btn btn-default'>
        Редактировать</a>
   {!! Form::open(['route' => ['specialization.destroy', $specialization->id],  'method' => 'delete'])!!}
   {{Form::submit('Удалить', null, ['class'=>'btn btn-danger'])}}
   {!! Form::close() !!}
@endsection
