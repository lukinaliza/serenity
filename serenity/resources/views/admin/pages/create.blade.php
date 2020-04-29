@extends('admin.admin-index')

@section('title', 'Добавить поле')

@section('content')
    {!! Form::open(['route' => 'service.store']) !!}
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('name', 'Название услуги')}}
       </div>
       <div class="col-md-15">
             {{Form::text('name', null, ['class'=>'form-control'])}}
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('description', 'Описание')}}
       </div>
       <div class="col-md-15">
             {{Form::textarea('description', null, ['class'=>'form-control'])}}
        </div>
    </div>
        
    {!! Form::close() !!}
@endsection