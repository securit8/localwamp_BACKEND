@extends('layouts/front')



@section('title')
@lang('front.main')
@endsection



@section('main')


<section id="main" class="container">
 <div class="row main_banner_colage">

  <div class="col-12 col-lg-6 main_left_col p-0 pr-2 mb-2">
    <div class="card">
      <a href = "{{route('donation.vianotour')}}"><img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/main_banner1.png') }}" alt="Card image cap"></a>
    </div>
  </div>


  <div class="col-12 col-lg-6 main_right_col p-0">
  <div class="card gray_col">
    <div class = "col-12  p-0 ">
     <img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/main_banner2.jpg') }}" alt="Card image cap">
   </div>

   <div class = "col-12  p-0 pt-2">



 <!-- 16:9 aspect ratio -->
 <div class="video-responsive">
     <iframe width="575" height="190" src="https://www.youtube.com/embed/C2rW01H7lSY" frameborder="0" allowfullscreen></iframe>
 </div>



  </div>
</div>
</div>

</div>



<div class = "row  p-5 shuttle_row bg-white">
  <div class = "card_heading d-flex justify-content-between">
    <span class="bebas_neue">პოპულარული ღონისძიებები</span>
    <img src="{{ asset('front/assets/images/arrow_down.png') }}" />

  </div>
<div class = "row justify-content-around">
<div class="col-12 col-lg-4">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/lopotapopularuli.jpg') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="{{ route('donation.lopota') }}">ლოპოტა</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">790</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
    <div class="col-5 no_padding text-center"> <span class="news_more"><a href="{{ route('donation.lopota') }}"><button class = "btn btn-primary py-2 px-4">მეტი</button></a></span></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-4">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/vianotourpopular.png') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="{{ route('donation.vianotour')  }}">ვიანოტური</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">200</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><a href="{{ route('donation.vianotour') }}"><button class = "btn btn-primary py-2 px-4">მეტი</button></a></span></div>


  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-4">
<div class="card" >
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/kaxetipopular.png') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="{{ route('donation.kaxeti')  }}">კახეთი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">380</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><a href="{{ route('donation.kaxeti') }}"><button class = "btn btn-primary py-2 px-4">მეტი</button></a></span></div>

  </div>
</div>
</div>
</div>

</div>
</div>

<div class="row">
  <div class = "reklama col-12">
    <img class = "mt-0" src="{{ asset('front/assets/images/reklama2.jpg') }} "  />
  </div>
</div>


<div class = "row  p-5 shuttle_row bg-white">
  <div class = "card_heading d-flex justify-content-between">
    <span class="bebas_neue">ახალი ღონისძიებები</span>
    <img src="{{ asset('front/assets/images/arrow_down.png') }}" />

  </div>
<div class = "row justify-content-around">
<div class="col-12 col-lg-4">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/bxmrpop.png') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="{{ route('donation.baxmaro') }}">ბახმარო</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">380</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><a href="{{ route('donation.kaxeti') }}"><button class = "btn btn-primary py-2 px-4">მეტი</button></a></span></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-4">
<div class="card">
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/svntpop.png') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="{{ route('donation.svaneti') }}">სვანეთი</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">695</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><a href="{{ route('donation.svaneti') }}"><button class = "btn btn-primary py-2 px-4">მეტი</button></a></span></div>

  </div>
</div>
</div>
</div>


<div class="col-12 col-lg-4">
<div class="card" >
<img class="card-img-top image img-fluid" src="{{ asset('front/assets/images/rcpop.png') }}" alt="Card image cap">
<div class="card-body main_card_body p-0">
  <h5 class="card-title text-center m-1"><a href="{{ route('donation.racha')}}">რაჭა</a></h5>
  <div class="row align-items-end m-0 py-2">

  <div class="col-7"> <span class="card_main_price">640</span><span class="card_main_valut">ლ</span><span class="news_data">-დან</span></div>
  <div class="col-5 no_padding text-center"> <span class="news_more"><a href="{{ route('donation.racha') }}"><button class = "btn btn-primary py-2 px-4">მეტი</button></a></span></div>

  </div>
</div>
</div>
</div>

</div>
</div>

 <!--
    @if($first)
        <div class="col-12 col-lg-6">
        <div class="news_block">
        <div class="row">
        <div class="col-12 col-md-4 col-lg-6">
            <img  class="rounded img-fluid" src="{{ asset($first->image) }}">
        </div>
        <div class="col-12 col-md-8 col-lg-6">
            <h3><a href="{{ route('news.fullstory',['id'=>$first->id]) }}">{{ $first->title }}</a></h3>
            <p class="news_text" style="float:left">{!! str_replace('&nbsp;',' ', $first->description) !!}</p>
            <div class="clearfix"></div>
            <div class="row align-items-end">
            <div class="col-4"> <span class="news_data"> {{ $first->date->format('d/m/y') }}</span></div>
            <div class="col-7 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$first->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
            </div>
        </div>
        </div>
        </div>
    </div>

  <div class="col-12 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ asset($first->image) }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><a href="{{ route('news.fullstory',['id'=>$first->id]) }}">{{ $first->title }}</a></h5>
    <p class="card-text">{!! str_replace('&nbsp;',' ', $first->description) !!}</p>
    <div class="row align-items-end">
    <div class="col-4"> <span class="news_data"> {{ $first->date->format('d/m/y') }}</span></div>
    <div class="col-7 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$first->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
    </div>
  </div>
</div>
</div>
    @endif

    @if($second)
    <div class="col-12 col-lg-6">
        <div class="news_block">
        <div class="row">
        <div class="col-12 col-md-4 col-lg-6">
            <img  class="rounded img-fluid" src="{{ asset($second->image) }}">
        </div>
        <div class="col-12 col-md-8 col-lg-6">
            <h3><a href="{{ route('news.fullstory',['id'=>$second->id]) }}">{{ $second->title }}</a></h3>
            <p class="news_text" style="float:left">{!! str_replace('&nbsp;',' ', $second->description) !!}</p>
            <div class="clearfix"></div>
            <div class="row align-items-end">
            <div class="col-4"> <span class="news_data"> {{ $second->date->format('d/m/y') }}</span></div>
            <div class="col-7 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$second->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
            </div>
        </div>
        </div>
        </div>
    </div>

  <div class="col-12 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top rounded img-fluid" src="{{ asset($second->image) }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><a href="{{ route('news.fullstory',['id'=>$second->id]) }}">{{ $second->title }}</a></h5>
    <p class="card-text">{!! str_replace('&nbsp;',' ', $second->description) !!}</p>
    <div class="row align-items-end">
    <div class="col-4"> <span class="news_data"> {{ $second->date->format('d/m/y') }}</span></div>
    <div class="col-7 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$second->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
    </div>
  </div>
</div>
</div>
    @endif


    @if($third)

    <div class="col-12  news_block last_news">
    <div class="row">
        <div class="col-12 col-lg-6">
        <img  class="rounded img-fluid" src="{{ asset($third->image) }}">
        </div>
        <div class="col-12 col-lg-6">
        <h3><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">{{ $third->title }}</a></h3>
        <p class="">{!! str_replace('&nbsp;',' ', $third->description) !!}</p>
        <div class="row last_news justify-content-between">
            <div class="col-4"> <span class="news_data"> {{ $third->date->format('d/m/y') }}</span></div>
            <div class="col-7 bottom_news"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
        </div>
        </div>
    </div>
    </div>

  <div class="col-12 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top rounded img-fluid" src="{{ asset($third->image) }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">{{ $third->title }}</a></h5>
    <p class="card-text">{!! str_replace('&nbsp;',' ', $third->description) !!}</p>
    <div class="row align-items-end">
    <div class="col-4"> <span class="news_data"> {{ $third->date->format('d/m/y') }}</span></div>
    <div class="col-7 no_padding"> <span class="news_more"><a href="{{ route('news.fullstory',['id'=>$third->id]) }}">@lang('front.learn_more')<i class="fas fa-long-arrow-alt-right"></i></a></span></div>
    </div>
  </div>
</div>
</div>

    @endif
  -->
    </div>
</section>


@endsection