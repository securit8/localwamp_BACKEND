@extends('layouts/front')

@section('title')
@lang('Moiare Tours')
@endsection


@section('main')


<section id="main" class="container">
 <div class="row main_banner_colage">


<div class="row">
  <div class = "reklama col-12">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class = "mt-0" src="{{ asset('front/assets/images/reklama.jpg') }} "  />
    </div>
    <div class="carousel-item">
      <img class = "mt-0" src="{{ asset('front/assets/images/kairo_reklama.jpg') }} "  />
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
</div>



<div class = "row">
<div class="col-12 col-lg-6 pt-5">
<div class="card">
<img class="card-img-top image " src="{{ asset('front/assets/images/rch.png') }}"   alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">მოიარე რაჭა</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> </div>
  <div class="col-5 no_padding text-center"><a href="{{route('donation.racha')}}"<span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></a></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-6 pt-5">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/svnt.png') }}"  alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">მოიარე სვანეთი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"></div>
  <div class="col-5 no_padding text-center"> <a href="{{route('donation.svaneti')}}"<span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></a></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-6 pt-5">
<div class="card" >
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/bxmr.png') }}"  alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">მოიარე ბახმარო</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"></div>
  <div class="col-5 no_padding text-center"><a href="{{route('donation.baxmaro')}}"><span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></a></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-6 pt-5">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/kkht.png') }}"  alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="">მოიარე კახეთი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"></div>
  <div class="col-5 no_padding text-center"><a href="{{route('donation.kaxeti')}}"><span class="news_more"><button class = "btn btn-primary py-2 px-4">მეტი</button></span></a></div>

  </div>
</div>
</div>
</div>




</div>
</div>

</section>
@endsection
