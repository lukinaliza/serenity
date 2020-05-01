@extends('admin.admin-index')

@section('content')
    {!! Form::open(['route' => 'pricelist.store']) !!}

    <head>
  <meta charset="utf-8">
  <title>Добавить прайс-лист</title>
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
             {{Form::date('from', null, ['class'=>'form-control'])}}
        </div>
        </div>
        <div class="form-group">
       <div class="col-md-15">
             {{Form::label('until', 'До')}}
       </div>
       <div class="col-md-15">
             {{Form::date('until', null, ['class'=>'form-control'])}}
        </div>
        </div>
    <div class="col-md-15">
         {{Form::submit('Добавить', null, ['class'=>'btn btn-success'])}}
    </div>
    </div>
 </div>
</body>
    {!! Form::close() !!}
@endsection
