@extends('layouts/front')

@section('title')
@lang('Svaneti Tour')
@endsection


@section('main')


<section id="news" class="container-fluid">

<div class = "container-fluid p-0" style = "margin-top: 120px;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('front/assets/images/tls_reklama.jpg') }}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('front/assets/images/kairo_reklama.jpg') }}" alt="Second slide">
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

<div class = "container-fluid moiare_cont pt-1 px-0">
  <img class = "w-100" src = "{{ asset('front/assets/images/svaneti_banner.png') }}" alt="banner picture" />
  <img class = "moiare_logo" src ="{{ asset('front/assets/images/svaneti_logo.png') }}" />
</div>

<div class="col-12 d-flex justify-content-between p-0">

   <div class ="col-xl-3 col-md-4 col-6 text-left p-0">
       <img class = "w-100" src = "{{ asset('front/assets/images/moiare_right.png') }}" alt="banner picture" />
   </div>

   <div class ="col-xl-3 col-md-4 col-6 p-0">
       <img class = "w-100" src = "{{ asset('front/assets/images/visa_left.png') }}" alt="banner picture" />
   </div>

</div>
<div class ="container-fluid background_banner svaneti_back p-0">

<div class = "container">

  <div class = "col-12 background_moiare">
    <div class = "container pt-1">
    <div class = "col-12 moiare_heading d-flex justify-content-between">
      <div class ="   col-lg-10 col-md-8 col-sm-7 col-6 turi_head">ტურის ღირებულება ერთ ადამიანზე ორადგილიან ნომერში </div><div class ="span">695<span style="color:black;font-size:1rem;">ლ</span></div><span class ="" style="margin-right:35px;color:black;">-დან</span>
    </div>
    <p class = "mb-0 pl-3">*დრო: 3 დღე 2 ღამე</p>
    <p class = "mb-0 pl-3">მგზავრობა: ბენე ექსკლუზივის ავტოპარკით</p>

    <div class = "col-12 mt-5 p-5 moiare_desc ">
      <h2 class = " pl-3 d-block">ტურის ღირებულება მოიცავს:</h2>

      <p>-კომფორტული მგზავრობა</p>
      <p>-სადილი ტურის პირველ დღეს მგზავრობისას</p>
      <p>-განთავსება სასტუმროში</p>
      <p>-საუზმე სასტუმროში ტურის მეორე დღეს</p>
      <p>-ვესტუმრებით უშგულს, მჟავევე წყლებს, სიყვარულის კოშკს.</p>
      <p>-სემინარი ქოუჩისგან</p>
      <p>-ფიზიკური აქტივობა (იოგა - ფიტნესი)</p>
    </div>

    <div class = "col-12 mt-5 p-5 moiare_desc">
     <p>დღეს, როდესაც განვითარება და განტვირთვა მნიშვნელოვანია როგორც არასდროს,
ჩვენ გთავაზობთ ტურებს განსხვავებული აქტივოებებითა და შესაძლებლობებით.
ჩვენს ტურებში გუნდის ხელმძღვანელები სხვადასხვა დარგის ექსპერტები არიან,
რომლებიც ბევრ საინტერესო აქტივობასა და ვორქშოპს გვთავაზობენ.</p>

<p class = "pt-1">„მოიარე“ ყოველ უქმეებზე საქართველოს უნიკალური კუთხეები. ჩვენთან ერთად
მოიარეთ ჩვენი ქვეყანა, მთა-ბარი, მოიარეთ საქართველო...</p>
    </div>
  </div>
</div>
</div>
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

function detalebi() {
  var element = document.getElementById("detalebi_div");
  element.classList.toggle("show");
}
</script>
@endsection
