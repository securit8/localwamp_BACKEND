@extends('layouts/front')

@section('title')
    @lang('vianotour')
@endsection


@section('main')


    <section id="news" class="container-fluid">

        <div class="container p-0" style="margin-top: 150px;">
            <div id="carouselExampleIndicators" class="carousel slide w-75" style="margin:0 auto;" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('front/assets/images/vianotour1.jpg') }}" height="520"
                             alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('front/assets/images/vianotour2.jpg') }}" height="520"
                             alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('front/assets/images/vianotour3.jpg') }}" height="520"
                             alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('front/assets/images/vianotour4.jpg') }}" height="520"
                             alt="Second slide">
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

            <h4 class="mt-5 ml-3 d-block">სპეციალური შეთავაზება</h4>
        <!--<img class="inner_news_image" src="{{ asset('front/assets/images/shuttle.jpg') }}" width="300"  height="500" >-->
            <div class="row ">
                <div class="col-md-12  mt-3 ml-3">
                    <div class="col-12 d-flex justify-content-around py-1 px-0 vianotour"
                         style="border-top:1px solid #c7c7c7;">
                        <div class="col-4">
                            <h5 class="mt-5 d-block">კახეთი</h5>

                            <p></p>
                            <p>მგზავრების რაოდენობა: 5 ადამიანი</p>
                            <p></p>
                            <p>მგზავრობის დრო: 2:30 სთ</p>
                            <p></p>
                            <p>მგზავრობა: ბენე ექსკლუზივის ავტოპარკით</p>
                            <p></p>
                            <p>ავტომობილი: Mercedes-Benz V-class</p>

                        </div>

                        <div class="col-4">
                            <h5 class="mt-5 d-block">ყაზბეგი</h5>

                            <p></p>
                            <p>მგზავრების რაოდენობა: 5 ადამიანი</p>
                            <p></p>
                            <p>მგზავრობის დრო: 2 სთ</p>
                            <p></p>
                            <p>მგზავრობა: ბენე ექსკლუზივის ავტოპარკით</p>
                            <p></p>
                            <p>ავტომობილი: Mercedes-Benz V-class</p>

                        </div>


                        <div class="col-4">
                            <h5 class="mt-5 d-block">აჭარა</h5>

                            <p></p>
                            <p>მგზავრების რაოდენობა: 5 ადამიანი</p>
                            <p></p>
                            <p>მგზავრობის დრო: 4 სთ</p>
                            <p></p>
                            <p>მგზავრობა: ბენე ექსკლუზივის ავტოპარკით</p>
                            <p></p>
                            <p>ავტომობილი: Mercedes-Benz V-class</p>

                        </div>
                    </div>

                </div>

            </div>
            <div class="row my-5 buy_ticket">
                <h2 class="my-5">ბილეთები</h2>

                <form class="form-horizontal col-12" method="POST" action="{{ route('viano') }}">
                    {{ csrf_field() }}
                    <div class="col-12 d-flex justify-content-center"
                         style="border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
                        <div class="col-5  ticket_padding_top">
                            <p name="kaxeti" style="color:black;font-size:1rem;padding-top:5px;">კახეთი</p>
                            <input type="hidden" name="tourName" value="kaxeti"/>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <p style="color:black;font-size:1.5rem;padding-bottom:5px;">
                                <button type="button" class="circle minus">-</button>
                                <input value="1" name="qty" class="quantity"
                                       style="color:black;margin:0px 30px;font-size:1.5rem;">
                                <button type="button" class="circle circle2 plus">+</button>
                            </p>

                        </div>
                        <div class="col-2 ticket_padding_top">
                            <p style="font-size:1rem;padding-top:6px;"><span style="color:black;"><input
                                            id="kaxeti_price"
                                            style="background-color:#F8F8F8;border:none;display:inline-block;width:50px;"
                                            name="cash_f" type="text" value="{{$kaxeti_price}}"></span>&nbsp;ლარი</p>
                        </div>
                        <input type="hidden" name="sec" value="<?=md5(md5(time()) . "flytaxi");?>">
                        <div class="col-2 ticket_padding_top">
                            <button name="submit" type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModalCenter">ყიდვა
                            </button>
                            <input id="coupon_input" name="coupon" onkeyup="coupon()" type="text"
                                   class="align-self-end coupon_input" placeholder="promo"/>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">ავტორიზაცია</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="col-12 p-0 d-flex justify-content-between">
                                            <div class="col-5"
                                                 style="flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">
                                                <input value="" name="user_name" type="text" class="quantity"
                                                       style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                       placeholder="სახელი" required/>
                                            </div>

                                            <div class="col-5"
                                                 style="flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">

                                                <input value="" name="user_lname" type="text" class="quantity"
                                                       style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                       placeholder="გვარი" required/>


                                            </div>
                                        </div>

                                        <div class="col-12"
                                             style="border:1px solid #757575;border-radius: 3px;margin-bottom:20px;padding:0;background-color:white;">

                                            <input value="" type="number" pattern="\d*" name="user_tel" class="quantity"
                                                   style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                   placeholder="მობილური" required/>


                                        </div>

                                        <div class="col-12"
                                             style="border:1px solid #757575;border-radius: 3px;margin-bottom:0px;padding:0;background-color:white;">

                                            <input value="" type="email" name="user_email" class="quantity"
                                                   style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                   placeholder="ელ.ფოსტა" required/>


                                        </div>

                                        <div class="col-12 p-0 mb-2">
                                            <span style="color:#757575;font-size:0.6rem;">* ყველა ველის შევსება აუცილებელია</span>
                                        </div>

                                        <div class="col-12 p-0">
                                            <input type="checkbox" name="chkbx_value" value="1"/><span
                                                    style="color:#757575;font-size:0.6rem;"> თუ ხართ <strong>Visa Platinum, Visa Signature ან Visa Infinite</strong> ბარათის მფლობელი მონიშნეთ გრაფა და მიიღეთ 20% იანი ფასდაკლება</span>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success w-100">ყიდვა</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>


                <form class="form-horizontal col-12" method="POST" action="{{ route('viano') }}">
                    {{ csrf_field() }}
                    <div class="col-12 d-flex justify-content-center"
                         style="border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
                        <div class="col-5  ticket_padding_top">
                            <p style="color:black;font-size:1rem;padding-top:5px;">ყაზბეგი</p>
                            <input type="hidden" name="tourName" value="yazbegi"/>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <p style="color:black;font-size:1.5rem;padding-bottom:5px;">
                                <button type="button" class="circle minus">-</button>
                                <input value="1" name="qty" class="quantity"
                                       style="color:black;margin:0px 30px;font-size:1.5rem;">
                                <button type="button" class="circle circle2 plus">+</button>
                            </p>

                        </div>
                        <div class="col-2 ticket_padding_top">
                            <p style="font-size:1rem;padding-top:6px;"><span style="color:black;">
      <input id="kaxeti_price" style="background-color:#F8F8F8;border:none;display:inline-block;width:50px;"
             name="cash_f" type="text" value="{{$yazbegi_price}}"></span>&nbsp;ლარი</p>
                        </div>
                        <input type="hidden" name="sec" value="<?=md5(md5(time()) . "flytaxi");?>">
                        <div class="col-2 ticket_padding_top">
                            <button name="send" type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModalCenter1">ყიდვა
                            </button>
                            <input id="coupon_input" name="coupon" onkeyup="coupon()" type="text"
                                   class="align-self-end coupon_input" placeholder="promo"/>
                        </div>

                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">ავტორიზაცია</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="col-12 p-0 d-flex justify-content-between">
                                            <div class="col-5"
                                                 style="flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">
                                                <input value="" name="user_name" type="text" class="quantity"
                                                       style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                       placeholder="სახელი" required/>
                                            </div>

                                            <div class="col-5"
                                                 style="flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">

                                                <input value="" name="user_lname" type="text" class="quantity"
                                                       style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                       placeholder="გვარი" required/>


                                            </div>
                                        </div>

                                        <div class="col-12"
                                             style="border:1px solid #757575;border-radius: 3px;margin-bottom:20px;padding:0;background-color:white;">

                                            <input value="" type="number" pattern="\d*" name="user_tel" class="quantity"
                                                   style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                   placeholder="მობილური" required/>


                                        </div>

                                        <div class="col-12"
                                             style="border:1px solid #757575;border-radius: 3px;margin-bottom:0px;padding:0;background-color:white;">

                                            <input value="" type="email" name="user_email" class="quantity"
                                                   style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                   placeholder="ელ.ფოსტა" required/>


                                        </div>

                                        <div class="col-12 p-0 mb-2">
                                            <span style="color:#757575;font-size:0.6rem;">* ყველა ველის შევსება აუცილებელია</span>
                                        </div>

                                        <div class="col-12 p-0">
                                            <input type="checkbox" name="chkbx_value" value="1"/><span
                                                    style="color:#757575;font-size:0.6rem;"> თუ ხართ <strong>Visa Platinum, Visa Signature ან Visa Infinite</strong> ბარათის მფლობელი მონიშნეთ გრაფა და მიიღეთ 20% იანი ფასდაკლება</span>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success w-100">ყიდვა</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


                <form class="form-horizontal col-12" method="POST" action="{{ route('viano') }}">
                    {{ csrf_field() }}
                    <div class="col-12 d-flex justify-content-center"
                         style="border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
                        <div class="col-5  ticket_padding_top">
                            <p style="color:black;font-size:1rem;padding-top:5px;">აჭარა</p>
                            <input type="hidden" name="tourName" value="ajara"/>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <p style="color:black;font-size:1.5rem;padding-bottom:5px;">
                                <button type="button" class="circle minus">-</button>
                                <input value="1" name="qty" class="quantity"
                                       style="color:black;margin:0px 30px;font-size:1.5rem;">
                                <button type="button" class="circle circle2 plus">+</button>
                            </p>

                        </div>
                        <div class="col-2 ticket_padding_top">
                            <p style="font-size:1rem;padding-top:6px;"><span style="color:black;">
      <input id="kaxeti_price" style="background-color:#F8F8F8;border:none;display:inline-block;width:50px;"
             name="cash_f" type="text" value="{{$ajara_price}}"></span>&nbsp;ლარი</p>
                        </div>
                        <input type="hidden" name="sec" value="<?=md5(md5(time()) . "flytaxi");?>">
                        <div class="col-2 ticket_padding_top">
                            <button name="send" type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModalCenter2">ყიდვა
                            </button>
                            <input id="coupon_input" name="coupon" onkeyup="coupon()" type="text"
                                   class="align-self-end coupon_input" placeholder="promo"/>
                        </div>

                        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">ავტორიზაცია</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="col-12 p-0 d-flex justify-content-between">
                                            <div class="col-5"
                                                 style="flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">
                                                <input value="" name="user_name" type="text" class="quantity"
                                                       style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                       placeholder="სახელი" required/>
                                            </div>

                                            <div class="col-5"
                                                 style="flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">

                                                <input value="" name="user_lname" type="text" class="quantity"
                                                       style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                       placeholder="გვარი" required/>


                                            </div>
                                        </div>

                                        <div class="col-12"
                                             style="border:1px solid #757575;border-radius: 3px;margin-bottom:20px;padding:0;background-color:white;">

                                            <input value="" type="number" pattern="\d*" name="user_tel" class="quantity"
                                                   style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                   placeholder="მობილური" required/>


                                        </div>

                                        <div class="col-12"
                                             style="border:1px solid #757575;border-radius: 3px;margin-bottom:0px;padding:0;background-color:white;">

                                            <input value="" type="email" name="user_email" class="quantity"
                                                   style="color:black;font-size:0.7rem;width:80%;background-color:white;"
                                                   placeholder="ელ.ფოსტა" required/>


                                        </div>

                                        <div class="col-12 p-0 mb-2">
                                            <span style="color:#757575;font-size:0.6rem;">* ყველა ველის შევსება აუცილებელია</span>
                                        </div>

                                        <div class="col-12 p-0">
                                            <input type="checkbox" name="chkbx_value" value="1"/><span
                                                    style="color:#757575;font-size:0.6rem;"> თუ ხართ <strong>Visa Platinum, Visa Signature ან Visa Infinite</strong> ბარათის მფლობელი მონიშნეთ გრაფა და მიიღეთ 20% იანი ფასდაკლება</span>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-12">
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
            });
        });

        function detalebi() {
            var element = document.getElementById("detalebi_div");
            element.classList.toggle("show");
        }

        function detaleb() {
            var element = document.getElementById("detalebi_di");
            element.classList.toggle("show");
        }

        function detale() {
            var element = document.getElementById("detalebi_d");
            element.classList.toggle("show");
        }

        function coupon() {
            var coupon_code = document.getElementById('coupon_input').value;
            var kaxeti_price = document.getElementById('kaxeti_price');
            var yazbegi_price = document.getElementById('yazbegi_price');
            var ajara_price = document.getElementById('ajara_price');
            if (coupon_code == 'tbc123' || coupon_code == 'vtb123' || coupon_code == 'bog123') {
                if (kaxeti_price.value > '195') {
                    kaxeti_price.value *= 0.95;
                    yazbegi_price.value *= 0.95;
                    ajara_price.value *= 0.95
                }
            }
        }
    </script>
@endsection
