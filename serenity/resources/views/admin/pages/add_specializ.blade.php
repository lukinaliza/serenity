@extends('admin.admin-index')

@section('title', 'Добавить поле')

@section('content')
    {!! Form::open(['route' => 'specializ.store']) !!}
    <head>
  <meta charset="utf-8">
  <title>Добавить специалиста</title>
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
             {{Form::label('list_specialization_id', 'Название категории')}}
       </div>
       <div class="col-md-15">
             {{ Form::select('list_specialization_id', $idlistspecializ, 'id') }}
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-15">
             {{Form::label('user_role_id', 'Мастер')}}
       </div>
       <div class="col-md-15">
        {{ Form::select('user_role_id', $iduser, 'id') }}
        </div>
        </div>
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-primrary'])}}
      </div>
    </div>
    </div>
</body>
    {!! Form::close() !!}
@endsection
