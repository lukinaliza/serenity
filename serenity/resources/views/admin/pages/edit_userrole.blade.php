@extends('admin.admin-index')

@section('title', 'Добавить поле')

@section('content')

    {!!  Form::model($userrole, ['route' => ['userrole.update', $userrole->id],  'method' => 'put'])!!}
           <head>
  <meta charset="utf-8">
  <title>Изменить роль пользователя</title>
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
              {{Form::select('user_id', $iduser, 'id')}}
        </div>
        </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('role_id', 'Роль')}}
       </div>
       <div class="col-md-15">
             {{Form::select('role_id', $idrole, 'id')}}
        </div>
        </div>
    <div class="form-group">
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-success'])}}
    </div>
    </div>
    </div>
</body>
@endsection
