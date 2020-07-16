@extends('layouts/front')

@section('title')

@lang('Lopota')

@endsection


@section('main')


    <section id="news" class="container px-5">

        <div class="container-fluid moiare_cont pt-5 px-0" style="margin-top:100px;">
            <img class="w-100" src="{{ asset('front/assets/images/lopota1.jpg') }}" alt="banner picture"/>
        </div>

        <div class="container-fluid moiare_cont pt-1 px-0">
            <img class="w-100" src="{{ asset('front/assets/images/lopota2.jpg') }}" alt="banner picture"/>
        </div>

        <div class="col-12 d-flex justify-content-between p-0">

            <div class="col-xl-3 col-md-4 col-6 text-left p-0">
                <img class="w-100" src="{{ asset('front/assets/images/moiare_right.png') }}" alt="banner picture"/>
            </div>

            <div class="col-xl-3 col-md-4 col-6 p-0">
                <img class="w-100" src="{{ asset('front/assets/images/visa_left.png') }}" alt="banner picture"/>
            </div>

        </div>
        <div class="container-fluid background_banner lopota_back p-0">

            <div class="container ">

                <div class="col-12 background_moiare">
                    <div class="container  pt-1">

                        <div class="col-12 mt-5 p-2 moiare_desc ">
                            <h2 class=" pl-3 mb-2 d-block">ღირებულებაში შედის:</h2>

                            <p>- კომფორტული მგზავრობა თბილისი - ლოპოტა - თბილისი</p>
                            <p>- განთავსება სასტურმოში LOPOTA LAKE RESORT & SPA</p>
                            <p><strong>- შეხვედრა ზვიად ციკოლიასთან - "ქართული ბრენდის საიდუმლო" (OUTDOOR)</strong></p>
                            <p>- სადილი და საუზმე სასტუმროში</p>
                            <p>- კატამარანით გასეირნება</p>
                            <p>- მაგიდის ჩოგბურთი</p>
                            <p>- კარაოკე</p>
                            <p>- ბადმინტონი</p>
                            <p>- POOL DJ</p>
                            <P>- LATE CHECK OUT 2 აგვისტოს 13:00-ზე</P>
                        </div>


                        <div class="col-12 mt-5 p-2 moiare_desc">
                            <h2 class=" pl-3 mb-2 d-block">1 აგვისტო</h2>

                            <p>09:30-10:00 შეკრება დიდუბის საგამოფენო ცენტრის ცენტრალურ პარკინგზე (სამტრედიის ქუჩის
                                მხრიდან)</p>
                            <p> 10:00 გამგზავრება</p>
                            <p>13:00-13:30 ჩასვლა სასტუმროში Lopota Lake Resort & Spa</p>
                            <p>13:30-14:30 სადილი </p>
                            <p>14:30-15:00 სასტუმროს ნომრებში განთავსება </p>
                            <p>15:00-19:30 თავისუფალი დრო Dj (All day long) ცენტრალურ აუზთან</p>
                            <p>19:30-20:30 შეხვედრა ზვიად ციკოლიასთან - "ქართული ბრენდის საიდუმლო"(OUTDOOR) </p>
                            <p>21:00 Piano & Jazz evening შატო ბუერა - რეკომენდირებულია წინასწარი ჯავშანი სასტუმროს
                                ადმინისტრაციასთან </p>

                        </div>


                        <div class="col-12 mt-5 p-2 moiare_desc">
                            <h2 class=" pl-3 mb-2 d-block">2 აგვისტო</h2>

                            <p>08:00-11:00 საუზმე </p>
                            <p>11:00-13:00 თავისუფალი დრო</p>
                            <p>13:00-13:30 Check out</p>
                            <p>13:30 გამომგზავრება თბილისის მიმართულებით</p>


                        </div>





                    </div>
                </div>
            </div>






<div class = "col-12 mt-5 text-center">
  <div class = "col-12 col-md-9">
    <p style="color:white;font-size:0.8rem;margin-bottom:2px;">*ვიზას პრემიალური ბარათებით გადახდისას მოქმედებს 10%-იანი ფასდაკლება</p>
  </div>
    <div class = "col-12 moiare_heading d-flex justify-content-between mt-0">
      <div class ="col-lg-10 col-md-8 col-sm-7 col-6 turi_head">ერთი პერსონის ფასი ორადგილიან ნომერში </div><div class ="span">330<span style="color:black;font-size:1rem;">ლ</span></div><span class ="" style="margin-right:35px;color:black;"></span>
    </div>

  </div>

  <div class ="row my-5 buy_ticket">

<form class="form-horizontal col-12" method="POST" action="{{ route('viano') }}">
{{ csrf_field() }}
<div class = "col-12 d-flex justify-content-center" style = "background-color: white;border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
<div class = "col-5  ticket_padding_top">
<p name="kaxeti" style="color:black;font-size:1rem;padding-top:5px;">სრული პაკეტი (ორი პერსონა)</p>
<input type="hidden" name="tourName" value="lopota" />
</div>
<div class = "col-3 d-flex justify-content-end">
<p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button type="button" class="circle minus" style = "">-</button>
<input value="1" name="qty" class = "quantity" style="background-color: white;color:black;margin:0px 30px;font-size:1.5rem;">
<button  type="button" class="circle circle2 plus" style = "">+</button></p>

</div>
<div class = "col-2 ticket_padding_top">
<p style = "font-size:1rem;padding-top:6px;"><span style="color:black;"><input id = "kaxeti_price" style = "border:none;display:inline-block;width:50px;background-color:white!important;" name="cash_f" type="text" value="{{$lopota}}" disabled /></span>&nbsp;ლარი</p>
</div>
<input type="hidden" name="sec" value="<?=md5(md5(time())."flytaxi");?>">
<div class = "col-2 ticket_padding_top">
<button name = "submit" type ="button" class = "btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">ყიდვა</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">ავტორიზაცია</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<div class = "col-12 p-0 d-flex justify-content-between">
<div class = "col-5" style = "flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">
  <input value="" name="user_name" type="text" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="სახელი" required />
</div>

<div class = "col-5" style = "flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">

    <input value="" name="user_lname" type="text" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="გვარი" required />


</div>
</div>

<div class = "col-12" style = "border:1px solid #757575;border-radius: 3px;margin-bottom:20px;padding:0;background-color:white;">

    <input value="" type="number" pattern="\d*"  name="user_tel" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="მობილური" required />


</div>

<div class = "col-12" style = "border:1px solid #757575;border-radius: 3px;margin-bottom:0px;padding:0;background-color:white;">

    <input value="" type="email"  name="user_email" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="ელ.ფოსტა" required />


</div>

<div class = "col-12 p-0 mb-2">
  <span style="color:#757575;font-size:0.6rem;">* ყველა ველის შევსება აუცილებელია</span>
</div>

<div class = "col-12 p-0">
  <input type = "checkbox" name="chkbx_value" value="2" /><span style="color:#757575;font-size:0.6rem;"> თუ ხართ <strong>Visa Platinum, Visa Signature ან Visa Infinite</strong> ბარათის მფლობელი მონიშნეთ გრაფა და მიიღეთ 10% იანი ფასდაკლება</span>
</div>



</div>
<div class="modal-footer">
<div class = "col-12">
   <button type="submit" class="btn btn-success w-100">ყიდვა</button>
</div>
</div>
</div>
</div>
</div>

</div>
</form>




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
            items: 4,
            loop: true,
            margin: 10,

            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })

        document.querySelectorAll(".circle").forEach((btn) => {
            btn.addEventListener("click", (e) => {
                let clicked = e.target;
                let price_input = document.getElementById('kaxeti_price');

                let parent = clicked.parentElement.getElementsByClassName('quantity')[0];

                let quantity = parent.value;
                if (clicked.classList.contains('minus')) {

                    quantity--;

                }
                if (clicked.classList.contains('plus')) {
                    quantity++;

                }
                if (quantity > 5 || quantity < 1) {
                    quantity = 1;
                }
                parent.value = quantity;
                price_input.value = {{$lopota}} *quantity;
            });
        });

        function detalebi() {
            var element = document.getElementById("detalebi_div");
            element.classList.toggle("show");
        }
    </script>
@endsection
