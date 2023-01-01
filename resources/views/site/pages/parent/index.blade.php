@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ locale() == 'en' ? 'Parental Purchase Program' : 'برنامج شراء الوالدين' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Parental Purchase Program' : 'برنامج شراء الوالدين' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--  Section ==========================================-->

    <section class="video">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="cont mt-0">
                        <h2>{{ $parent['title_' . locale()] }}</h2>
                        <h3 data-aos="fade-up" data-aos-delay="60" class="aos-init aos-animate">
                            {{ $parent['subtitle_' . locale()] }}
                        </h3>
                        @foreach (explode("\n", $parent['description1_' . locale()]) as $item)
                            <p>
                                {{ $item }}
                            </p>
                        @endforeach
                    </div>
                </div>
                <!--End Col-->
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="30">
                    <img src="{{ $parent['image1_path'] }}" class="tilt custom_img" alt=""
                        style="will-change: transform; transform: perspective(900px) rotateX(0deg) rotateY(0deg);">
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>

    <section class="static colored">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'Program Offering' : 'البرنامج يقدم' }}</h3>
                    </div>
                </div>
                @foreach ($offers['data'] as $offer)
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="60">
                        <div class="benefit small tilt">
                            <img src="{{ $offer['image_path'] }}" />
                            <h3>{{ $offer['title_' . locale()] }}</h3>
                        </div>
                        <!--End Benefit-->
                    </div>
                @endforeach
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    
    <section class="static">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="30">
                    <div class="cont">
                        <h3>{{ locale() == 'en' ? 'HOW IT WORKS' : 'كيف تعمل ' }}</h3>
                        <ul class="steps">
                            @php
                                $x = 1;
                            @endphp
                            @foreach (explode("\n", $parent['description2_' . locale()]) as $desc)
                                <li><span class="count">{{ $x }}</span>{{ $desc }}</li>
                                @php
                                    $x++;
                                @endphp
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="60">
                    <img src="{{ $parent['image2_path'] }}" class="tilt custom_img" alt="" />
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    
    <section class="colored partners">
        <div class="container">
            <div class="row position-relative">
                <div class="col-12" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'Our Partners in Success' : 'المدارس المدرجة في البرنامج' }}</h3>
                    </div>
                </div>
                @php
                    $x = 60;
                @endphp
                @foreach ($schools['data'] as $school)
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6" data-aos="fade-up"
                        data-aos-delay="{{ $x }}">
                        <div class="partner_item">
                            <img src="{{ $school['image_path'] }}" alt="" />
                        </div>
                    </div>
                    @php
                        $x += 30;
                    @endphp
                @endforeach
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>

    <!--End Section-->
@endsection
