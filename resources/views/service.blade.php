@extends('layouts.frontend.layout')
@section('content')
    @include('breadcrumb')
    <!-- Service part start-->
    <section class="service_part mt-0">
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
@endsection
