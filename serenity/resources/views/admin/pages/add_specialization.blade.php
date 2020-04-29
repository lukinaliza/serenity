@extends('admin.admin-index')

@section('title', 'Добавить поле')

@section('content')
    {!! Form::open(['route' => 'specialization.store']) !!}
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('name', 'Название специализации')}}
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
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-primrary'])}}
    </div>
    </div>
        
    {!! Form::close() !!}
@endsection