@extends('admin.admin-index')

@section('title', 'Добавить поле')

@section('content')

    {!!  Form::model($master, ['route' => ['master.update', $master->id],  'method' => 'put'])!!}
        <div class="form-group">
       <div class="col-md-15">
             {{Form::label('surname', 'Фамилия')}}
       </div>
       <div class="col-md-15">
             {{Form::text('surname', null, ['class'=>'form-control'])}}
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('name', 'Имя')}}
       </div>
       <div class="col-md-15">
             {{Form::text('name', null, ['class'=>'form-control'])}}
        </div>
        </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('phone', 'Номер телефона')}}
       </div>
       <div class="col-md-15">
             {{Form::text('phone', null, ['class'=>'form-control'])}}
        </div>
        </div>
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-primrary'])}}
    </div>
    </div>

    {!! Form::close() !!}
@endsection
