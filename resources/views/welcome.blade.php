@extends('layouts.frontend.layout')
@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Run on the <br>
                                rocky streets</h1>
                            <p>Fast landing delivery <br>
                                for your goods business </p>
                            <div class="input-tracker">
                                <form action="/find" method="post">
                                    @csrf()
                                    <div class="form-tracker d-flex">
                                        <input class="tracker-input" type="text" name="key" placeholder="Enter Tracking ID">
                                        <button class="tracker-btn" class="btn btn-warning" type="submit">Find</button>
                                    </div>
                                </form>                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pick_up_text">
                    <div class="pickup_text_iner">
                        <p>Logistics World 2019</p>
                        <h3>Get Pick up Hear</h3>
                    </div>
                    <div class="pickup_text_arrow">
                        <img src="{{asset('frontend/img/icon/right-arrow.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about part start-->
    <section class="about_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_part_img">
                        <h2>about us</h2>
                        <img src="{{asset('frontend/img/about_2.png')}}" alt="#">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about_part_text">
                        <div class="about_text_iner">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                            </p>
                            <p>sedeiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                ipsum suspendisse ultrices gravida. Risus commodo viverra Lorem
                                ipsum dolor sit amet, </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- Service part start-->
    <section class="service_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="service_text">
                        <h2>Boxe Best <br><span> Deliverie Services </span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Quis is ipsum Lorem</p>
                        <p>Psum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate dolor in
                            reprehenderit.</p>
                        <a href="service.html" class="btn_1">learn more</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_service_text">
                        <img src="{{asset('frontend/img/icon/service_1.svg')}}" alt="">
                        <h4>Planning</h4>
                        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                            labore </p>
                    </div>
                    <div class="single_service_text">
                        <img src="{{asset('frontend/img/icon/service_2.svg')}}" alt="">
                        <h4>List Delivery</h4>
                        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                            labore </p>
                    </div>
                    <div class="single_service_text">
                        <img src="{{asset('frontend/img/icon/service_3.svg')}}" alt="">
                        <h4>Transport</h4>
                        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                            labore </p>
                    </div>
                    <div class="single_service_text">
                        <img src="{{asset('frontend/img/icon/service_4.svg')}}" alt="">
                        <h4>Inventory</h4>
                        <p>lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                            labore </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service part end-->
    @include('cta')
    <!--::resent deliveries start::-->
    <section class="deliveries_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="deliveries_tittle">
                        <h2>Recent Deliveries</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="deliveries_slider owl-carousel">
                        <div class="single_deliveries">
                            <img src="{{asset('frontend/img/deliveries/deliveries_1.png')}}" alt="">
                            <div class="single_deliveries_text">
                                <h3>World Corgo</h3>
                                <div class="single_deliveries_text_iner">
                                    <img src="{{asset('frontend/img/deliveries_img.png')}}" alt="">
                                    <p>324 King Heaven tower, House no
                                        Melbourne ,VIC-222, Australia</p>
                                    <p>324 King Heaven tower, House no
                                        Melbourne ,VIC-222, Australia</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_deliveries">
                            <img src="{{asset('frontend/img/deliveries/deliveries_2.png')}}" alt="">
                            <div class="single_deliveries_text">
                                <h3>World Corgo</h3>
                                <div class="single_deliveries_text_iner">
                                    <img src="{{asset('frontend/img/deliveries_img.png')}}" alt="">
                                    <p>324 King Heaven tower, House no
                                        Melbourne ,VIC-222, Australia</p>
                                    <p>324 King Heaven tower, House no
                                        Melbourne ,VIC-222, Australia</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_deliveries">
                            <img src="{{asset('frontend/img/deliveries/deliveries_3.png')}}" alt="">
                            <div class="single_deliveries_text">
                                <h3>World Corgo</h3>
                                <div class="single_deliveries_text_iner">
                                    <img src="{{asset('frontend/img/deliveries_img.png')}}" alt="">
                                    <p>324 King Heaven tower, House no
                                        Melbourne ,VIC-222, Australia</p>
                                    <p>324 King Heaven tower, House no
                                        Melbourne ,VIC-222, Australia</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_deliveries">
                            <img src="{{asset('frontend/img/deliveries/deliveries_1.png')}}" alt="">
                            <div class="single_deliveries_text">
                                <h3>World Corgo</h3>
                                <div class="single_deliveries_text_iner">
                                    <img src="{{asset('frontend/img/deliveries_img.png')}}" alt="">
                                    <p>324 King Heaven tower, House no
                                        Melbourne ,VIC-222, Australia</p>
                                    <p>324 King Heaven tower, House no
                                        Melbourne ,VIC-222, Australia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::resent deliveries end::-->

    <!--::blog part start::-->
    <section class="blog_part padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_tittle">
                        <h2>Latest Blog</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="{{asset('frontend/img/blog/blog_1.png')}}" alt="">
                            <div class="date">
                                <h1>jan</h1><span> <br> 2019 </span>
                            </div>

                        </div>
                        <div class="single_blog_text">
                            <h3><a href="blog.html">Founder Defends</a></h3>
                            <p>Varius conubia a mauris litora lacus. Cubilia proin on ornare et nunc
                                dapibus vel rutrum augue facilisis malesuada et porta impe.</p>
                            <a href="#"> <i class="ti-heart"></i> 100 Likes</a>
                            <a href="#"> <i class="ti-comments-smiley"></i> 1 Comment</a>
                        </div>
                        <a class="btn_3" href="blog.html">read more <i class="ti-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="{{asset('frontend/img/blog/blog_1.png')}}" alt="">
                            <div class="date">
                                <h1>jan</h1><span> <br> 2019 </span>
                            </div>

                        </div>
                        <div class="single_blog_text">
                            <h3><a href="blog.html">Founder Defends</a></h3>
                            <p>Varius conubia a mauris litora lacus. Cubilia proin on ornare et nunc
                                dapibus vel rutrum augue facilisis malesuada et porta impe.</p>
                            <a href="#"> <i class="ti-heart"></i> 100 Likes</a>
                            <a href="#"> <i class="ti-comments-smiley"></i> 1 Comment</a>
                        </div>
                        <a class="btn_3" href="blog.html">read more <i class="ti-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="{{asset('frontend/img/blog/blog_1.png')}}" alt="">
                            <div class="date">
                                <h1>jan</h1><span> <br> 2019 </span>
                            </div>

                        </div>
                        <div class="single_blog_text">
                            <h3><a href="blog.html">Founder Defends</a></h3>
                            <p>Varius conubia a mauris litora lacus. Cubilia proin on ornare et nunc
                                dapibus vel rutrum augue facilisis malesuada et porta impe.</p>
                            <a href="#"> <i class="ti-heart"></i> 100 Likes</a>
                            <a href="#"> <i class="ti-comments-smiley"></i> 1 Comment</a>
                        </div>
                        <a class="btn_3" href="blog.html">read more <i class="ti-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog part end::-->
@endsection