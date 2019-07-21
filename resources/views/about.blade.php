@extends('layouts.frontend.layout')
@section('content')
    @include('breadcrumb')

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

    @include('cta')
@endsection
