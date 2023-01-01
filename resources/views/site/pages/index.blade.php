@extends('site.layouts.master')
@section('content')
    <!-- Main Section ==========================================-->
    <section class="main_section" id="home">
        <div class="container apple_logo">
            <img src="{{ surl('images/apple.png') }}" />
        </div>
        <div id="main_section" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="7000">
            <div class="carousel-inner">
                @foreach ($sliders['data'] as $index => $slider)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ $slider['image_path'] }}">
                        <div class="intro_cont">
                            <h2 class="animated" style="animation-delay: 0.5s">
                                {{ $slider['title_' . locale()] }}
                            </h2>
                            <h3 class="animated" style="animation-delay: 0.8s">
                                {{ $slider['description_' . locale()] }}
                            </h3>
                            @if (auth()->guard('site')->guest())
                                <div class="w-100 animated" style="animation-delay: 1.2s">
                                    <a href="{{ $slider['link'] }}" class="link">
                                        <span>
                                            {{ $slider['button_' . locale()] }} </span>
                                    </a>
                                </div>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>
            <!--End Inner-->
            @if (sizeof($sliders['data']) > 1)
                <ol class="carousel-indicators">
                    @foreach ($sliders['data'] as $index => $slider)
                        <li data-target="#main_section" data-slide-to="{{ $index }}"
                            class="{{ $index == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <button class="carousel-control-prev icon fa fa-long-arrow-alt-left" type="button"
                    data-target="#main_section" data-slide="prev"></button>
                <button class="carousel-control-next icon fa fa-long-arrow-alt-right" type="button"
                    data-target="#main_section" data-slide="next"></button>
            @endif

        </div>
    </section>
    <!--End Section-->
    <section class="video">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cont mt-0">
                        <h2 data-aos="fade-up" data-aos-delay="60">
                            {{ $home['title_' . locale()] }}
                        </h2>
                        <h3 data-aos="fade-up" data-aos-delay="80">
                            {{ $home['subtitle_' . locale()] }}
                        </h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            {{ $home['description1_' . locale()] }}
                        </p>

                        @if (auth()->guard('site')->guest())
                            <a href="{{ route('site.login') }}" class="link" data-aos="fade-up" data-aos-delay="140">
                                <span> {{ locale() == 'en' ? 'Sign in' : 'تسجيل دخول' }} <i
                                        class="fa fa-angle-right"></i></span>
                            </a>
                        @endif

                    </div>
                </div>
                <!--End Col-->
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="60">
                    <div class="cover tilt mt-0">
                        <img src="{{ $home['image_path'] }}" alt="" />
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>

    <section class="static colored">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>Benefits For Parents</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <div class="benefit small tilt">
                        <img
                            src="https://zenith.brandbourne.com/storage/offers/B7R1g5JAK7SPib7piP6qEqJckm9bzd6Ppo47oy6h.png">
                        <h3>PURCHASE OF PRECONFIGURED APPLE DEVICES &amp; ACCESSORIES</h3>
                    </div>
                    <!--End Benefit-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <div class="benefit small tilt">
                        <img
                            src="https://zenith.brandbourne.com/storage/offers/ruvTgBZw5mf087Ue5j2rB1QLwhGeOCu3OlrzFdEe.png">
                        <h3>ONLINE PAYMENT PLATFORM.</h3>
                    </div>
                    <!--End Benefit-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <div class="benefit small tilt">
                        <img
                            src="https://zenith.brandbourne.com/storage/offers/poPG2QrCQhk2cVcDSFYhLqrArggehxyFqmyPSNoj.png">
                        <h3>FINANCIAL INSTALLMENT SERVICES.</h3>
                    </div>
                    <!--End Benefit-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <div class="benefit small tilt">
                        <img
                            src="https://zenith.brandbourne.com/storage/offers/i4FLNSnCYoQnYeTJWkUYODV9rdAul1qLgxtQFKg6.png">
                        <h3>DOOR TO DOOR DELIVERY.</h3>
                    </div>
                    <!--End Benefit-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <div class="benefit small tilt"
                        style="will-change: transform; transform: perspective(900px) rotateX(0deg) rotateY(0deg);">
                        <img
                            src="https://zenith.brandbourne.com/storage/offers/5MDamqnP02YekfX4Gi6XRzHjYinCK9jwVCrH3twS.png">
                        <h3>PRIVACY AND SECURITY</h3>
                    </div>
                    <!--End Benefit-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <div class="benefit small tilt"
                        style="will-change: transform; transform: perspective(900px) rotateX(0deg) rotateY(0deg);">
                        <img
                            src="https://zenith.brandbourne.com/storage/offers/JnFHNaTei9skPkBQTjuQhhgFDjIXhR8TIcABqKqI.png">
                        <h3>PARENT DEVICE-OWNERSHIP.</h3>
                    </div>
                    <!--End Benefit-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <div class="benefit small tilt">
                        <img
                            src="https://zenith.brandbourne.com/storage/offers/2vkuodioMof22BJ3KI2l1FxTPod4p4MHvWd7PchS.png">
                        <h3>CUSTOMER SUPPORT.</h3>
                    </div>
                    <!--End Benefit-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <div class="benefit small tilt">
                        <img
                            src="https://zenith.brandbourne.com/storage/offers/sIAtAgXDcCr3hNLgxd4h3BF6EH6GNfHEsioVjhxt.png">
                        <h3>END OF USE RESET TO COMMERCIAL SETTING.</h3>
                    </div>
                    <!--End Benefit-->
                </div>

            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <section class="static colored_Steps">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>How it works</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="work_item step" data-aos="fade-up" data-aos-delay="60">

                        <div class="cont">
                           <img src="{{ surl('images/step1.png') }}" />
                            <h3>CREATE ACCOUNT</h3>
                            <p>Fill your contact details with the school registered</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="work_item step" data-aos="fade-up" data-aos-delay="60">

                        <div class="cont">
                           <img src="{{ surl('images/step2.png') }}" />
                            <h3>CHOOSE PRODUCT</h3>
                            <p>Choose the devices, accessories, and school bundle</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="work_item step" data-aos="fade-up" data-aos-delay="60">

                        <div class="cont">
                           <img src="{{ surl('images/step3.png') }}" />
                            <h3>PAYMENT</h3>
                            <p>Pay online via desired Method</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="work_item step" data-aos="fade-up" data-aos-delay="60">

                        <div class="cont">
                           <img src="{{ surl('images/step4.png') }}" />
                            <h3>WE PROCESS</h3>
                            <p>Door to Door Delivery</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="work_item step" data-aos="fade-up" data-aos-delay="60">

                        <div class="cont">
                           <img src="{{ surl('images/step5.png') }}" />
                            <h3>PRODUCT DEVLIVERED</h3>
                            <p>Start Learning journey with preconfigured devices</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>

    <section class="main_section section_img m-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro_cont">
                        <h2 data-aos="fade-up" data-aos-delay="30" class="aos-init aos-animate">
                            {{ $home['title1_' . locale()] }}
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="60" class="aos-init aos-animate">
                            {{ $home['description2_' . locale()] }}
                        </p>
                        @if (auth()->guard('site')->guest())
                            <a href="{{ route('site.school') }}" class="link aos-init aos-animate" data-aos="fade-up"
                                data-aos-delay="90">
                                <span> {{ locale() == 'en' ? 'Register Your School' : 'قم بتسجيل مدرستك الاّن ' }} ! </span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--  Section ==========================================-->
    <section class="about">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-5 cover" data-aos="fade-up" data-aos-delay="30">
                    <img src="{{ $about['image2_path'] }}" class="tilt" alt="" />
                </div>
                <div class="col-lg-7">
                    <div class="cont">
                        <h3 data-aos="fade-up" data-aos-delay="60">{{ $about['title2_' . locale()] }}</h3>
                        @foreach (explode("\n", $about['description2_' . locale()]) as $desc)
                            <p data-aos="fade-up" data-aos-delay="80">
                                {{ $desc }}
                            </p>
                        @endforeach
                        <a target="_blank" href="https://zenitharabia.com/" class="link" data-aos="fade-up"
                            data-aos-delay="140">
                            <span> {{ locale() == 'en' ? 'Discover More' : 'إكتشف المزيد' }} <i
                                    class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
@push('js')
    @if (session('msg') != null)
        <script>
            notification("{{ session('type') }}", "{{ session('msg') }}", "fas fa-check");
        </script>
    @endif
@endpush
