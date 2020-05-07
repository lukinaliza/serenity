
@include('admin.out.interface')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

    <link href="css/button.css" rel="stylesheet">
    <p style='font-style:italic; text-align:center; font-size: 40pt'> Фотогалерея </p>
<div class="container marketing">
   <input type="checkbox" id="pic-1"/>
<label for="pic-1" class="lightbox"><img src={{asset('image/2.jpg')}}/></label>
<input type="checkbox" id="pic-2"/>
<label for="pic-2" class="lightbox"><img src={{asset('image/20.jpg')}}/></label>
<input type="checkbox" id="pic-3"/>
<label for="pic-3" class="lightbox"><img src={{asset('image/7.jpg')}}/></label>
<input type="checkbox" id="pic-4"/>
<label for="pic-4" class="lightbox"><img src={{asset('image/23.jpg')}}/></label>
<input type="checkbox" id="pic-5"/>
<label for="pic-5" class="lightbox"><img src={{asset('image/8.jpg')}}/></label>
<input type="checkbox" id="pic-6"/>
<label for="pic-6" class="lightbox"><img src={{asset('image/10.jpg')}}/></label>
<input type="checkbox" id="pic-7"/>
<label for="pic-7" class="lightbox"><img src={{asset('image/4.jpg')}}/></label>
<input type="checkbox" id="pic-8"/>
<label for="pic-8" class="lightbox"><img src={{asset('image/21.jpg')}}/></label>
<input type="checkbox" id="pic-9"/>
<label for="pic-9" class="lightbox"><img src={{asset('image/24.jpg')}}/></label>
<input type="checkbox" id="pic-10"/>
<label for="pic-10" class="lightbox"><img src={{asset('image/25.jpg')}}/></label>
<input type="checkbox" id="pic-11"/>
<label for="pic-11" class="lightbox"><img src={{asset('image/26.jpg')}}/></label>
<input type="checkbox" id="pic-12"/>
<label for="pic-12" class="lightbox"><img src={{asset('image/27.jpg')}}/></label>
<input type="checkbox" id="pic-13"/>
<label for="pic-13" class="lightbox"><img src={{asset('image/28.jpg')}}/></label>
<input type="checkbox" id="pic-14"/>
<label for="pic-14" class="lightbox"><img src={{asset('image/29.jpg')}}/></label>
<input type="checkbox" id="pic-15"/>
<label for="pic-15" class="lightbox"><img src={{asset('image/30.jpg')}}/></label>

<div class="grid">
 <label for="pic-1" class="grid-item"><img src={{asset('image/2.jpg')}}/></label>
 <label for="pic-2" class="grid-item"><img src={{asset('image/20.jpg')}}/></label>
 <label for="pic-3" class="grid-item"><img src={{asset('image/7.jpg')}}/></label>
 <label for="pic-4" class="grid-item"><img src={{asset('image/23.jpg')}}/></label>
 <label for="pic-5" class="grid-item"><img src={{asset('image/8.jpg')}}/></label>
 <label for="pic-6" class="grid-item"><img src={{asset('image/10.jpg')}}/></label>
 <label for="pic-7" class="grid-item"><img src={{asset('image/4.jpg')}}/></label>
 <label for="pic-8" class="grid-item"><img src={{asset('image/21.jpg')}}/></label>
 <label for="pic-9" class="grid-item"><img src={{asset('image/24.jpg')}}/></label>
 <label for="pic-10" class="grid-item"><img src={{asset('image/25.jpg')}}/></label>
 <label for="pic-11" class="grid-item"><img src={{asset('image/26.jpg')}}/></label>
 <label for="pic-12" class="grid-item"><img src={{asset('image/27.jpg')}}/></label>
 <label for="pic-13" class="grid-item"><img src={{asset('image/28.jpg')}}/></label>
 <label for="pic-14" class="grid-item"><img src={{asset('image/29.jpg')}}/></label>
 <label for="pic-15" class="grid-item"><img src={{asset('image/30.jpg')}}/></label>
</div>
</div>

