@extends('admin.admin-index')

@section('title', 'Добавить поле')

@section('content')

    {!!  Form::model($pricelist, ['route' => ['pricelist.update', $pricelist->id],  'method' => 'put'])!!}
       <div class="form-group">
       <div class="col-md-15">
             {{Form::label('name', 'Название')}}
       </div>
       <div class="col-md-15">
             {{Form::text('name', null, ['class'=>'form-control'])}}
        </div>
        </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('from', 'От')}}
       </div>
       <div class="col-md-15">
             {{Form::datetime('from', null, ['class'=>'form-control'])}}
        </div>
        </div>
        <div class="form-group">
       <div class="col-md-15">
             {{Form::label('until', 'До')}}
       </div>
       <div class="col-md-15">
             {{Form::datetime('until', null, ['class'=>'form-control'])}}
        </div>
        </div>
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-success'])}}
    </div>
    </div>


    {!! Form::close() !!}
@endsection
