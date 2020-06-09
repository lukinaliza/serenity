<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/product/">

    <!-- Bootstrap core CSS -->
    <script type="text/jаvascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      IMG.fig {
    float: right; /* Обтекание картинки по левому краю */
    padding-left: 10px; /* Отступ слева */
    padding-bottom: 10px; /* Отступ снизу */
   }
      IMG.figr {
    float: left; /* Обтекание картинки по правому краю */
    padding-right: 10px; /* Отступ слева */
    padding-bottom: 10px; /* Отступ снизу */
   }

   .text {
    margin-left: auto;
    margin-right: auto;
     font-size: 20pt;
     font-style: italic;
    width: auto;
    text-align:center
   }
     .b1 {
    background: rgba(255, 229, 180); /* Синий цвет фона */
    background: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(255, 229, 180)), to(#EBFFFF));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00BBD6', endColorstr='#EBFFFF');
    padding: 3px 7px;
    color: #333;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #666;
   }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/product.css" rel="stylesheet">
  </head>

<body>
    <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="{{ url('/admin') }}" aria-label="Главная">
      <img src={{asset('image/serenity.jpg')}} width="44" height="44" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 44 44" focusable="false">
    </a>
    <a class="py-2 d-none d-md-inline-block" href="{{ url('/admin') }}">Главная</a>
    <a class="py-2 d-none d-md-inline-block" href="{{ url('/service') }}">Услуги и стоимость</a>
     <a class="py-2 d-none d-md-inline-block" href="{{ url('/sale') }}">Акции и скидки</a>
    <a class="py-2 d-none d-md-inline-block" href="{{ url('/album') }}">Фотогалерея</a>
    <a class="py-2 d-none d-md-inline-block" href="{{ url('/about') }}">О нас</a>

  </div>
   </nav>
