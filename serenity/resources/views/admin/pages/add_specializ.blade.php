@extends('admin.admin-index')

@section('title', 'Добавить поле')

@section('content')
    {!! Form::open(['route' => 'specializ.store']) !!}
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('list_specialization_id', 'Название категории')}}
       </div>
       <div class="col-md-15">
             {{Form::text('list_specialization_id', null, ['class'=>'form-control'])}}
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('master_id', 'Мастер')}}
       </div>
       <div class="col-md-15">
             {{Form::text('master_id', null, ['class'=>'form-control'])}}
        </div>
        </div>
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-primrary'])}}
    </div>
    </div>

    {!! Form::close() !!}
@endsection
