@extends('admin.admin-index')



@section('content')
    {!! Form::open(['route' => 'userrole.store']) !!}

    <head>
  <meta charset="utf-8">
  <title>Добавить роль пользователю</title>
  <style>
   .text {
    margin-left: auto;
    margin-right: auto;
     font-size: 20pt;
     font-style: italic;
    width: auto
   }
  </style>
 </head>
 <body>
 <div class="text">
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('user_id', 'Пользователь')}}
       </div>
       <div class="col-md-15">
             {{Form::text('user_id', null, ['class'=>'form-control'])}}
        </div>
        </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('role_id', 'Роль')}}
       </div>
       <div class="col-md-15">
             {{Form::text('role_id', null, ['class'=>'form-control'])}}
        </div>
        </div>
    <div class="form-group">
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-success'])}}
    </div>
    </div>
    </div>
</body>
    {!! Form::close() !!}
@endsection
