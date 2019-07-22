@extends('layouts.frontend.layout')
@section('content')
    @include('breadcrumb')
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
    @include('cta')
@endsection
