@extends('admin.admin-index')

@section('content')

    <h1>{{$specialization->name}}</h1>
    <p>{!!$specialization->description!!}<p>

    <p>
        <a href={{url("/create/specialization/{$specialization->id}/edit")}} class='btn btn-default'>
        Редактировать</a>
    <p>

    {!!Form::open(['method->'DELETE', 'route'->[specialization.destroy',$specialization->id] ])!!}
    {!!Form::submit('Удалить',['class'->'btn btn-danger']) !!}
    {!!Form::close()!!}

  
@endsection