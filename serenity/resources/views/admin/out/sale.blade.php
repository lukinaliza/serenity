@include('admin.out.interface')
    <p style='font-style:italic; text-align:center; font-size: 40pt'> Акции и скидки </p>
<title> Акции и скидки </title>
    <div class="sale-wrap">
  <div class="sale-inner">
  <div class="sale-text"><h2 class="text">Летнее предложение до 31 августа</h2>
    <p class="text">10% <span>скидка на комплекс наращивания ресниц и оформление бровей</span></p>
    <button type="button" class="b1" data-toggle="modal" data-target="#summersale" style = 'position: relative; float:center'>
              Подробнее </button>
    </div>
  </div>
</div>
<div class="sale-wrap">
  <div class="sale-inner">
  <div class="sale-text"><h2 class="text">Супер предложение 2020 года</h2>
    <p class="text"><span>Вместе дешевле</br>
    Оформление бровей хной</span></p>
    <button type="button" class="b1" data-toggle="modal" data-target="#together" style = 'position: relative; float:center'>
              Подробнее </button>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="summersale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Скидка 10 %</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="line"><img src={{asset('image/summersale.jpg')}} width="20%" height="20%" class="fig">
          <h2 class="text" >Получи скидку по промокоду 'Летовая скидка'</h2>
            Скидка действует на комплекс "Наращивание ресниц + оформление бровей хной"
          </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="together" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Скидка 10 %</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="line"><img src={{asset('image/together.jpg')}} width="20%" height="20%" class="fig">
          <h2 class="text" >Получи скидку, приведя подругу.</h2>
            Скидка действует на оформление бровей хной. По -100 рублей с каждой
          </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
