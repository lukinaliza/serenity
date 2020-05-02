@extends('admin.admin-index')

@section('title', 'Добавить поле')

@section('content')

    {!!  Form::model($role, ['route' => ['role.update', $role->id],  'method' => 'put'])!!}
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('name', 'Название роли')}}
       </div>
       <div class="col-md-15">
             {{Form::text('name', null, ['class'=>'form-control'])}}
        </div>
    </div>
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-primrary'])}}
    </div>
    </div>

    {!! Form::close() !!}
@endsection
