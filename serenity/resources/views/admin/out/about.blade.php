
@include('admin.out.interface')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<title> О нас </title>
<div class="container marketing">
    <p style='font-style:italic; text-align:center; font-size: 40pt'> Наша команда </p>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Лешмейкер, ламимейкер, бровист</strong>
          <h3 class="mb-0">Авдеева Марина</h3>
          <p class="card-text mb-auto">Мастер по наращиванию ресниц, ламинированию а также бровист. В сфере красоты более 3-х лет. Постоянно совершенствуется и развивается </p>
          <button type="button" class="butggton" data-toggle="modal" data-target="#marina">
              Читать далее </button>
           </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250"src={{asset('image/marina.jpg')}} preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Ламимейкер, бровист</strong>
          <h3 class="mb-0">Тимофеева Анастасия</h3>
          <p class="mb-auto">Мастер по ламинированию ресниц и бровист. В сфере красоты более 3-х лет. Постоянно совершенствуется и развивается. </p>
           <button type="button" class="butggton" data-toggle="modal" data-target="#nastya">
              Читать далее </button>
           </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250"src={{asset('image/nastya.jpg')}} preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Лешмейкер, ламимейкер, бровист</strong>
          <h3 class="mb-0">Лукина Елизавета</h3>
          <p class="card-text mb-auto">Мастер по наращиванию ресниц, ламинированию а также бровист. В сфере красоты более 3-х лет. Постоянно совершенствуется и развивается </p>
           <button type="button" class="butggton" data-toggle="modal" data-target="#liza">
              Читать далее </button>
           </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src={{asset('image/liza.jpg')}} preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
        </div>
      </div>
    </div>

        <!-- Modal -->
    <div class="modal fade" id="liza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Лукина Елизавета</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body">
                <p ><img src={{asset('image/liza.jpg')}} width="70%" height="70%">
               <li>Мастер по наращиванию ресниц с 2017 года</li>
               <li>Мастер по ламинированию ресниц с 2018 года</li>
               <li>Бровист с 2019 года</li>
               <li>Обучение наращиванию ресниц </li>
               <li>"Кажется сфера красоты - это то, что я любила еще с детства. Люблю дарить красоту"</li>
              </div>
              <div class="modal-footer">
                <button type="button" class="b1" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
          </div>

        <!-- Modal -->
    <div class="modal fade" id="nastya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Тимофеева Анастасия</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body">
                <p ><img src={{asset('image/nastya.jpg')}} width="70%" height="70%">
               <li>Мастер по ламинированию ресниц с 2017 года</li>
               <li>Бровист с 2017 года</li>
               <li>Обучение ламинированию ресниц </li>
               <li>"Постоянное развитие и совершенствование..."</li>
              </div>
              <div class="modal-footer">
                <button type="button" class="b1" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
          </div>
        <!-- Modal -->
    <div class="modal fade" id="marina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Авдеева Марина</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <div class="modal-body">
                <p ><img src={{asset('image/marina.jpg')}} width="70%" height="70%">
               <li>Мастер по наращиванию ресниц с 2017 года</li>
               <li>Мастер по ламинированию ресниц с 2019 года</li>
               <li>Бровист с 2017 года</li>
               <li>Обучение наращиванию ресниц </li>
               <li>"В сфере красоты я нашла себя"</li>
              </div>
              <div class="modal-footer">
                <button type="button" class="b1" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
          </div>
