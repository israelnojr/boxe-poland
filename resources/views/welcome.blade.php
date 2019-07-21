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
                            <p>We have always been revolutionizing, shaping, and simplifying the world of logistics. 
                                From inventing the international air express industry to becoming the world’s leading logistics company; 
                                we’re thinkers, makers and pioneers that constantly challenge what’s possible. 
                                And now we’re tackling the ultimate border: delivering to the moon.
                            </p>
                            <p>In 1969, the year Neil Armstrong was the first man to walk on the moon, We began to revolutionize the world of logistics. Now, 
                                we are breaking new ground again: in cooperation with space technology company Astrobotics, 
                                we will make deliveries to the moon a reality.</p>
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
                        <p>Achieve your sustainability goals with help from BOXE services and practices created with our promise to efficiency and environmental responsibility in mind.</p>
                        <p>As one of the world’s largest and most innovative employers, we take special pride in our people. 
                            We’re a global company that values diversity, ambition and a collaborative can-do attitude. 
                            And that offers you all the support you need to make your career as rewarding as possible. Join us now and realize your full potential.</p>
                        <a href="service.html" class="btn_1">learn more</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_service_text">
                        <img src="{{asset('frontend/img/icon/service_1.svg')}}" alt="">
                        <h4>Planning</h4>
                        <p>We’re committed to helping customers pioneer more sustainable solutions</p>
                    </div>
                    <div class="single_service_text">
                        <img src="{{asset('frontend/img/icon/service_2.svg')}}" alt="">
                        <h4>List Delivery</h4>
                        <p>Services and technology for managing your shipping process – from individuals to enterprises, 
                            local to global. </p>
                    </div>
                    <div class="single_service_text">
                        <img src="{{asset('frontend/img/icon/service_3.svg')}}" alt="">
                        <h4>Transport</h4>
                        <p>Services and technology for managing your shipping process – from individuals to enterprises, local to global. </p>
                    </div>
                    <div class="single_service_text">
                        <img src="{{asset('frontend/img/icon/service_4.svg')}}" alt="">
                        <h4>Tracking</h4>
                        <p>Monitoring and management solutions for individuals, complex global supply chains, and everyone in between. </p>
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