@extends('layouts/front')



@section('title')
@lang('front.main')
@endsection



@section('main')

<div class = "side_banner_cont container-fluid d-none d-sm-block">
  <div class = "first_banner_cont d-flex justify-content-between pb-5">
     <div class = "left_side_banner">
<!-- weather widget start --><a target="_blank" href="https://www.booked.net/weather/tbilisi-18901"><img src="https://w.bookcdn.com/weather/picture/4_18901_1_1_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=w209&anc_id=9110"  alt="booked.net"/></a><!-- weather widget end -->     </div>

     <div class = "right_side_banner">
       <a href = ""><img class="" src="{{ asset('front/assets/images/side_banner.JPG') }}" alt="Card image cap"></a>
     </div>
  </div>


    <div class = "second_banner_cont d-flex justify-content-between pt-5">
      <div class = "left_side_banner">
       <a href = ""><img class="" src="{{ asset('front/assets/images/side_banner.JPG') }}" alt="Card image cap"></a>
      </div>

       <div class = "right_side_banner">
         <a href = ""><img class="" src="{{ asset('front/assets/images/side_banner.JPG') }}" alt="Card image cap"></a>
       </div>
    </div>

    <div class = "third_banner_cont d-flex justify-content-between pt-5">
      <div class = "left_side_banner">
       <a href = ""><img class="" src="{{ asset('front/assets/images/side_banner.JPG') }}" alt="Card image cap"></a>
      </div>

       <div class = "right_side_banner">
         <a href = ""><img class="" src="{{ asset('front/assets/images/side_banner.JPG') }}" alt="Card image cap"></a>
       </div>
    </div>
</div>

<section id="main" class="container">
 <div class="row main_banner_colage">
  <div class="col-12 col-lg-6 main_left_col p-0 pr-2 mb-2">
    <div class="card">
      <a href = "{{route('donation.vianotour')}}"><img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/main_banner1.jpg') }}" alt="Card image cap"></a>
    </div>
  </div>


  <div class="col-12 col-lg-6 main_right_col p-0">
  <div class="card gray_col">
    <div class = "col-12  p-0 ">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href = "{{ route('donation.lopota') }}">
       <img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/main_banner2.jpg') }}" alt="Card image cap">
      </a>
    </div>
    <div class="carousel-item">
      <a href = "{{ route('donation.lopota') }}">
       <img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/main_banner2.jpg') }}" alt="Card image cap">
      </a>
    </div>
    <div class="carousel-item">
      <a href = "{{ route('donation.lopota') }}">
       <img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/main_banner2.jpg') }}" alt="Card image cap">
      </a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   </div>

   <div class = "col-12  p-0 pt-2">



 <!-- 16:9 aspect ratio -->
 <div class="video-responsive">
     <iframe width="575" height="190" src="https://www.youtube.com/embed/C2rW01H7lSY?autoplay=1" frameborder="0" allowfullscreen></iframe>
 </div>



  </div>
</div>
</div>

</div>



<div class = "row  p-5 shuttle_row bg-white mb-3">
  <div class = "card_heading d-flex justify-content-between">
    <span class="bebas_neue">მიმდინარე პროექტები</span>
    <img src="{{ asset('front/assets/images/arrow_down.png') }}" />

  </div>
<div class = "row justify-content-around">
<div class="col-12 col-lg-4 mb-2">
<div class="card">
  <a href = "{{ route('donation.lopota') }}">
    <img class="card-img-top image img-fluid border_radius_25" src="{{ asset('front/assets/images/lopotapopularuli.jpg') }}" alt="Card image cap">
  </a>
</div>
</div>


<div class="col-12 col-lg-4 mb-2">
<div class="card">
  <a href = "{{ route('donation.vianotour') }}">
    <img class="card-img-top image img-fluid border_radius_25" src="{{ asset('front/assets/images/vianotourpopular.jpg') }}" alt="Card image cap">
  </a>
</div>
</div>


<div class="col-12 col-lg-4 mb-2">
<div class="card" >
 <a href = "{{ route('donation.kaxeti') }}">
   <img class="card-img-top image img-fluid border_radius_25" src="{{ asset('front/assets/images/kaxetipopular.jpg') }}" alt="Card image cap">
 </a>
</div>
</div>

</div>
</div>

<div class="row">
  <div class = "reklama col-12">
    <img class = "mt-0" src="{{ asset('front/assets/images/kairo_reklama.jpg') }} "  />
  </div>
</div>

<div class = "row  p-3 shuttle_row bg-white zoom_in">
  <div class = "card_heading d-flex justify-content-between">
    <span class="bebas_neue">ჩვენი პორთფოლიო</span>
    <img src="{{ asset('front/assets/images/arrow_down.png') }}" />

  </div>

  <div class="container my-4">
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg">
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg">
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg">
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg">
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg">
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg">
                </div>
              </div>
            </div>
          </div>


        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg">
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg">
            </div>
          </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg">
              </div>
            </div>
          </div>

        </div>
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>


</div>
    </div>

</section>

@endsection
