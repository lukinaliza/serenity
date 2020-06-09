@include('admin.out.interface')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src={{asset('image/5.jpg')}} alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src={{asset('image/0.jpg')}} alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src={{asset('image/9.jpg')}} alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <h1 class="display-4 font-weight-normal", style='font-style:italic; text-align:center'>Lash&Brow</h1>
    <p class="text" >Выбрав нас, Вы можете быть уверены в качестве!</p>



<footer class="container py-5">
  <div class="row">

    <div class="col-6 col-md">
      <h5>Адрес</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="https://www.google.ru/maps/place/%D1%83%D0%BB.+%D0%90%D1%84%D0%B0%D0%BD%D0%B0%D1%81%D1%8C%D0%B5%D0%B2%D0%B0,+14,+%D0%A7%D0%B5%D0%B1%D0%BE%D0%BA%D1%81%D0%B0%D1%80%D1%8B,+%D0%A7%D1%83%D0%B2%D0%B0%D1%88%D1%81%D0%BA%D0%B0%D1%8F+%D0%A0%D0%B5%D1%81%D0%BF.,+428003/@56.1520717,47.2177808,17z/data=!3m1!4b1!4m5!3m4!1s0x415a383818557679:0xb56bf3e7eae1ee41!8m2!3d56.1520717!4d47.2199696">Афанасьева 14, г. Чебоксары</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Services</a></li>
        <li><a class="text-muted" href="#">Sales</a></li>
        <li><a class="text-muted" href="#">Photo</a></li>
        <li><a class="text-muted" href="#">Team</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Контакты</h5>
      <ul class="list-unstyled text-small">
        <li>+7-903-065-41-05</li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Запись</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Team</a></li>
        <li><a class="text-muted" href="#">Locations</a></li>
        <li><a class="text-muted" href="#">Privacy</a></li>
        <li><a class="text-muted" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>
</html>
