@extends('admin.admin-index')



@section('content')
    {!! Form::open(['route' => 'pricelistline.store']) !!}

    <head>
  <meta charset="utf-8">
  <title>Добавить строку прайскуранта</title>
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
             {{Form::label('cost', 'Стоимость')}}
       </div>
       <div class="col-md-15">
             {{Form::text('cost', null, ['class'=>'form-control'])}}
        </div>
    </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('service_id', 'Услуга')}}
       </div>
       <div class="col-md-15">
             {{Form::text('service_id', null, ['class'=>'form-control'])}}
        </div>
        </div>
     <div class="form-group">
       <div class="col-md-15">
             {{Form::label('pricelist_id', 'Прайскурант')}}
       </div>
       <div class="col-md-15">
             {{Form::text('pricelist_id', null, ['class'=>'form-control'])}}
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
