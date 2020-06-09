@extends('admin.admin-index')

@section('title', 'Добавить поле')

@section('content')

    {!!  Form::model($user, ['route' => ['user.update', $user->id],  'method' => 'put'])!!}
            <head>
  <meta charset="utf-8">
  <title>Добавить пользователя</title>
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
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('surname', 'Фамилия пользователя')}}
       </div>
       <div class="col-md-15">
             {{Form::text('surname', null, ['class'=>'form-control'])}}
        </div>
    </div>
        <div class="form-group">
       <div class="col-md-15">
             {{Form::label('name', 'Имя пользователя')}}
       </div>
       <div class="col-md-15">
             {{Form::text('name', null, ['class'=>'form-control'])}}
        </div>
    </div>
        <div class="form-group">
       <div class="col-md-15">
             {{Form::label('email', 'Email пользователя')}}
       </div>
       <div class="col-md-15">
             {{Form::text('email', null, ['class'=>'form-control'])}}
        </div>
    </div>
        <div class="form-group">
       <div class="col-md-15">
             {{Form::label('phone', 'Телефон пользователя')}}
       </div>
       <div class="col-md-15">
             {{Form::text('phone', null, ['class'=>'form-control'])}}
        </div>
    </div>
        <div class="form-group">
       <div class="col-md-15">
             {{Form::label('password', 'Пароль')}}
       </div>
       <div class="col-md-15">
             {{Form::text('password', null, ['class'=>'form-control'])}}
        </div>
    </div>

    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-primrary'])}}
    </div>
    </div>
 </body>
    {!! Form::close() !!}
@endsection
