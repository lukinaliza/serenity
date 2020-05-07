@include('admin.out.interface')
    <p style='font-style:italic; text-align:center; font-size: 40pt'> Услуги и стоимость </p>

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="d-block w-100" src={{asset('image/henna.jpg')}} preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Брови: 140x140"><title>Услуги и стоимость</title>
        <h2>Архитектура бровей</h2>
        <p>Придание формы, окрашивание хной или краской, ламинирование.</p>
        <button type="button" class="b1" data-toggle="modal" data-target="#exampleModalLong">
              Подробнее </button>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img class="d-block w-100" src={{asset('image/lash.jpg')}} preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Брови: 140x140"><title>Услуги и стоимость</title>
        <h2>Наращивание ресниц</h2>
        <p>Искусственное удлинение ресниц, путем приклеивания искуственной ресницы к натуральной. От классики до 5Д.</p>
          </p> <button type="button" class="b1" data-toggle="modal" data-target="#lash">
              Подробнее </button>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img class="d-block w-100" src={{asset('image/ital.jpg')}} preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Брови: 140x140"><title>Услуги и стоимость</title>
        <h2>Ламинирование ресниц</h2>
        <p>Восстанавливающие процедуры для ресниц, придание изгиба и окрашивание.</p>
          </p> <button type="button" class="b1" data-toggle="modal" data-target="#lami">
              Подробнее </button>
      </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Pro наращивание. <span class="text-muted">Страх остаться без ресниц.</span></h2>
        <p class="lead">Почему Ваши ресницы будут в порядке после наращивания?</br> Потому что у нас делают адаптированное наращивание, которое не будет вредить
        вашим ресницам. Легкие и воздушные ресницы не будут перегружать натуральные. Ресницы портятся лишь в случае неправильного подбора толщины искусственных или после некачественного наращивание, когда мастер работает не на результат ,а на скорость или на поток.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src={{asset('image/prolash.jpg')}} preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Pro ламинирование. <span class="text-muted">Спасаем и восстанавливаем ресницы.</span></h2>
        <p class="lead">Что делают с моими ресницами? </br>
        Для начала очищаем веки от пыли и остатков косметики, изолируем нижние ресницы. Выкладываем ресницы на валик , наносим 1 состав (подготавливает ресницы к изгибу) и выжидаем нужное время.
        Затем очищаем ресницы от первого состава, наносим 2 состав (формирует изгиб и питает) и снова выжидаем время. После очищаем ресницы от состава и наноси краску.
        Заключительный этап - очистка от краски и питание ресниц 3 составом (пробуждение спящих луковиц и множество масел).</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src={{asset('image/prolami.jpg')}} preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Pro брови. <span class="text-muted">Приглядывайте за нми и дома.</span></h2>
        <p class="lead">Казалось бы, как можно ухаживать за бровями дома? </br>
        Ваши брови как и ваша кожа нуждается в уходе, особенно в зимний период. Наносите питательные крема не только на лицо, но и на зону бровей, там ведь такая же кожа.
        Для отшелушивания сухой кожи в зоне бровей можно сделать пилинг. Лишние волоски старайтесь выщипывать не близко к форме, а полную коррекцию доверьте профессионалам.
          Эти простые вещи дадут Вам ухоженные брови.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src={{asset('image/probrow.jpg')}} preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Архитектура бровей</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="line"><img src={{asset('image/henna.jpg')}} width="70%" height="70%" class="fig">
          <h2 class="text" >Оформление бровей хной - 400 рублей</h2>
          Подбор формы, окрашивание хной, коррекция пинцетом и нитью.
          </p>
          <hr>
         <p><img src={{asset('image/paint.jpg')}} width="70%" height="70%" class="figr">
          <h2 class="text" >Оформление бровей краской - 400 рублей</h2>
          Подбор формы, окрашивание краской, коррекция пинцетом и нитью.
          </p>

           <p class="line"><img src={{asset('image/lami.jpg')}} width="70%" height="70%" class="fig">
          <h2 class="text" >Ламинирование бровей - 1000 рублей</h2>
          Эффект долговременной уклаки, восстановление волосков снаружи и изнутри, окрашивание краской, коррекция пинцетом и нитью.
          <hr>
         <p><img src={{asset('image/triding.jpg')}} width="70%" height="70%" class="figr">
          <h2 class="text" >Придание формы - 200 рублей</h2>
          Подбор формы, коррекция пинцетом и нитью.
          </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="lami" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ламинирование ресниц</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="line"><img src={{asset('image/ital.jpg')}} width="70%" height="70%" class="fig">
          <h2 class="text" >Итальянское восстановление - 1000 рублей</h2>
          Филлеры InLei. Питают и восстанавливают ресницы, содержат пептиды, которые провоцируют рост новых ресниц.
          </p>
          <hr>
          <p><img src={{asset('image/velvet.jpg')}} width="70%" height="70%" class="figr">
            <h2 class="text" > Velvet - 1200 рублей</h2>
                  Активация луковиц и восстановление волосяных фолликул. Реставрация волосков и придание им дополнительного объема.
          </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        <!-- Modal -->
    <div class="modal fade" id="lash" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Архитектура бровей</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body">
                <p ><img src={{asset('image/1d.jpg')}} width="70%" height="70%" class="fig">
                  <h2 class="text" >Классическое наращивание - 900 рублей</h2>
                 Искусственное ресничка крепится к каждой натуральной.
                  </p>
                  <hr>
                 <p><img src={{asset('image/lash.jpg')}} width="70%" height="70%" class="figr">
                  <h2 class="text" > Двойной объем - 1100 рублей</h2>
                  Пучок из двух искусственных ресничек крепится к каждой натуральной.
                  </p>
                  <hr>
                   <p ><img src={{asset('image/3d.jpg')}} width="70%" height="70%" class="fig">
                  <h2 class="text" >Тройной объем- 1300 рублей</h2>
                  Пучок из трёх искусственных ресничек крепится к каждой натуральной.
                  </p>
                  <hr>
                 <p><img src={{asset('image/4d.jpg')}} width="70%" height="70%" class="figr">
                  <h2 class="text" >4-5Д - 1600 рублей</h2>
                 Пучок из 4-5 искусственных ресничек крепится к каждой натуральной.
                  </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>

