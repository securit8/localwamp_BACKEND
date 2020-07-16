@extends('layouts/front')

@section('title')
სიახლე | სრულიად
@endsection


@section('style')
<link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/assets/css/owl.theme.default.min.css') }}">
@endsection


@section('main')

<section id="news" class="container-fluid">

<div class="container-fluid inner_page_header">
    <div class="container">
    <h1 class = "mb-0">@lang('front.news')</h1>
    </div>
</div>

<div class = "container-fluid p-0" style = "margin-top:-152px;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('front/assets/images/transfer1.jpg') }}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('front/assets/images/transfer2.jpg') }}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">

        </div>
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
</div>

<div class="container p-0">
  <h2 class = "mt-5 d-block">შატლი ქალაქის ტერიტორიაზე:გლდანი,დიდუბე,წერეთელი</h2><br>
   <h4 class = "mt-5 d-block">სერვისის აღწერა:</h4>
        <!--<img class="inner_news_image" src="{{ asset('front/assets/images/shuttle.jpg') }}" width="300"  height="500" >-->
    <div class="row ">
      <div class="col-md-6 pt-3 mt-3 ml-3" style="border-top:1px solid #c7c7c7;">
       <p>Bene Exclusive გთავაზობთ მაღალი ხარისხის კომფორტულ მომსახურებას Mercedes Benz-ისა და Toyota-ს ფირმის უახლესი მოდელების ავტომობილებით.</p>
        <p></p>
        <p>მაღალკვალიფიციური მძღოლები საუბრობენ რუსულ და ინგლისურ ენებზე.</p>
        <p></p>
        <p>მგზავრების ჯანმრთელობა და ბარგი სრულად არის დაზღვეული.</p>
        <p></p>
        <p>მომსახურებაში გათვალისწინებულია:</p>

        <p>	&#9830; ჯანმრთელობისა და სიცოცხლის დაზღვევა;</p>
        <p>	&#9830; მაღალსიჩქარიანი უსადენო ინტერნეტი;</p>
        <p>	&#9830; 0,5 ლ. წყალი თითოეულ მგზავრზე.</p>
      </div>

    </div>
    <div class ="row my-5 buy_ticket">
<h2 class="my-5">ბილეთები</h2>
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-4  ticket_padding_top">
    <p style="color:black;font-size:1rem;padding-top:5px;">ერთჯერადი მგზავრობა</p>
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button class="circle minus">-</button><span class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">1</span><button class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">10</span>ლარი</p>
  </div>
  <div class = "col-3 ticket_padding_top">
    <button type ="button" class = "btn btn-success">ყიდვა</button>
  </div>
</div>

<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-4  ticket_padding_top">
    <p style="color:black;font-size:1rem;padding-top:5px;">ერთთვიანი მგზავრობა</p>
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button class="circle minus">-</button><span class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">1</span><button class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">200</span>ლარი</p>
  </div>
  <div class = "col-3 ticket_padding_top">
    <button type ="button" class = "btn btn-success">ყიდვა</button>
  </div>
</div>
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-4  ticket_padding_top">
    <p style="color:black;font-size:1rem;padding-top:5px;">ერთწლიანი მგზავრობა</p>
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button class="circle minus">-</button><span class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">1</span><button class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">600</span>ლარი</p>
  </div>
  <div class = "col-3 ticket_padding_top">
    <button type ="button" class = "btn btn-success">ყიდვა</button>
  </div>
</div>
<!--
        <p class="inner_news_text">
          <form style="width:40%;margin:50px auto;">
            <div class="form-row">
              <div class="form-group  col-md-12 col-lg-6">
                <label for="inputEmail4">აირჩიეთ მარშრუტი</label>
                <select type="email" class="form-control" id="inputEmail4" placeholder="Mercedes">
                  <option>გლდანი,დიდუბე</option>
                <option>დიდუბე,სადგურის მოედანი</option>
                <option>გლდანი,ვაკე-საბურთალო</option>
              </select>
              </div>
              <div class="form-group  col-md-12 col-lg-6">
                <label for="inputPassword4">დღეების რაოდენობა</label>
                <select type="password" class="form-control" id="inputPassword4" placeholder="3">
                  <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              </div>
              <div class="form-group  col-md-12 col-lg-6">
                <label for="inputPassword4">მგზავრობის თარიღი</label>
                <select type="password" class="form-control" id="inputPassword4" placeholder="3">
                <option>1 იანვარი</option>
                <option>2 იანვარი</option>
                <option>3 იანვარი</option>
                <option>4 იანვარი</option>
                <option>5 იანვარი</option>
              </select>
              </div>

              <div class="form-group  col-md-12 col-lg-6">
                <label for="inputPassword4">მგზავრობის დრო</label>
                <select type="password" class="form-control" id="inputPassword4" placeholder="3">
                <option>09:00</option>
                <option>12:00</option>
                <option>15:00</option>
                <option>18:00</option>
                <option>21:00</option>
              </select>
              </div>
            </div>


            <div class="form-group">
              <label for="inputAddress">აყვანის მდებარეობა</label>
              <select type="text" class="form-control" id="inputAddress" placeholder="11 აღმაშენებელი">
                <option>11 აღმაშენებელი</option>
                <option>57 ა.ყაზბეგი</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputAddress2">დაბრუნების მდებარეობა</label>
              <select type="text" class="form-control" id="inputAddress2" placeholder="11 აღმაშენებელი">
                <option>11 აღმაშენებელი</option>
                <option>57 ა.ყაზბეგი</option>
              </select>
            </div>
            <div class="form-row">
              <div class="form-group  col-md-12 col-lg-6">
                <label for="inputCity">გადასახდელი თანხა</label>
                <input type="text" class="form-control col-sm-4 col-md-4 col-3 px-2" id="inputCity" placeholder="ლარი" value="">
              </div>
          <div class="form-group  col-md-12 col-lg-6">
            <label for="inputCity"class="invisible">ok</label>
          <button type="submit" class="btn btn-primary form-control"><a class="text-white w-100 py-2 px-5"href="{{route('donation.index')}}">გადახდა</a></button>
          </div>

            </div>


          </form>
        </p>
        <br>
    </div>

    <div class="col-12 col-lg-3">
        <a href="{{route('donation.index')}}"><button type="button" class="btn btn-danger">დონაცია</button></a>
        <div class="iframe">
        <iframe src="http://geolab.edu.ge/" /></iframe>
        </div>
    </div>
  -->
  </div>


</section>

@endsection


@section('script')

<script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript">

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,

    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav: true,
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

document.querySelectorAll(".circle").forEach((btn)=>{
 btn.addEventListener("click",(e)=>{
   let clicked = e.target;
   let parent = clicked.parentElement.getElementsByTagName('span')[0];
   let quantity = parent.childNodes[0].nodeValue;
   if(clicked.classList.contains('minus')){
     quantity--;
   }
   if(clicked.classList.contains('plus')){
   quantity++;

   }
   if(quantity>5 || quantity<1){
     quantity = 1;
   }
   parent.innerHTML = quantity;
 });
});
</script>

@endsection
