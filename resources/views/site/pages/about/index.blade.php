@extends('site.layouts.master')
@push('title')
    {{ locale() == 'en' ? 'About us' : 'من نحن' }}
@endpush
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ locale() == 'en' ? 'About us' : 'من نحن' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'About us' : 'من نحن' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--  Section ==========================================-->
    <section class="colored video">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7">
                    <div class="cont mt-0">
                        <h2>{{ $about['title1_' . locale()] }}</h2>
                        <h3 data-aos="fade-up" data-aos-delay="60">
                            {{ $about['subtitle_' . locale()] }}
                        </h3>
                        <p data-aos="fade-up" data-aos-delay="80">
                            {{ $about['description1_' . locale()] }}
                        </p>
                        @if (auth()->guard('site')->guest())
                            <a href="{{ route('site.login') }}" class="link" data-aos="fade-up" data-aos-delay="80">
                                <span> {{ locale() == 'en' ? 'Sign in' : 'تسجيل الدخول ' }} ! </span>
                            </a>
                        @endif
                    </div>
                </div>
                <!--End Col-->
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="30">
                    <img src="{{ $about['image1_path'] }}" class="tilt custom_img"
                        alt="{{ $about['subtitle_' . locale()] }}" />
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->

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
                                <span> {{ locale() == 'en' ? 'Register Your School' : 'قم بتسجيل مدرستك الاّن ' }} !
                                </span>
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
                    <img src="{{ $about['image2_path'] }}" class="tilt" alt="{{ $about['title2_' . locale()] }}" />
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
