@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ locale() == 'en' ? 'My Account' : 'الملف الشخصي' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'My Account' : 'الملف الشخصي' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="colored">
        <div class="container">
            <div class="row">
                @include('site.pages.profile.templates.sidebar')
                <!--End Col-->
                <div class="col-lg-9">
                    {{-- <div class="profile_card bordrad_5">
                        <div class="page_title">
                            <i class="fa fa-th"></i>
                            {{ locale() == 'en' ? 'Latest Order' : 'أخر الطلبات' }}
                            <a href="{{ route('site.profile.orders') }}" class="link">
                                <span> {{ locale() == 'en' ? 'See All' : 'عرض الجميع' }} </span></a>
                        </div>
                        <!--End Page Title-->
                        <div class="profile_cont">
                            <div class="order">
                                <div class="cont">
                                    <img src="assets/images/products/p2.png" />

                                    <h4>
                                        <strong>BUNDLE Number Two </strong>
                                        <span> 1X </span>
                                        <span>4,599.00 SAR</span>
                                        <span>
                                            <i class="far fa-calendar-alt"></i> 27 OCT 2022</span>
                                    </h4>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated indelivery"
                                        role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100">
                                        indelivery
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Profile Cont-->
                    </div>
                    <!--End Profile Card--> --}}

                    <div class="profile_card bordrad_5">
                        <div class="page_title">
                            <i class="far fa-user"></i>
                            {{ locale() == 'en' ? 'My Account' : 'حسابي' }}
                            <a href="{{ route('site.profile.edit') }}" class="link">
                                <span> {{ locale() == 'en' ? 'Edit info' : 'تعديل البيانات' }} </span></a>
                        </div>
                        <!--End Page Title-->
                        <div class="profile_cont">
                            <div class="row m-auto">
                                <div class="col-sm-6">
                                    <div class="data_view">
                                        <span> {{ locale() == 'en' ? 'Parent name' : 'إسم ولي الأمر' }} </span>
                                        <h3>{{ $user->parent }}</h3>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="data_view">
                                        <span> {{ locale() == 'en' ? 'Email address' : 'البريد الإلكتروني' }} </span>
                                        <h3>{{ $user->email }}</h3>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="data_view">
                                        <span> {{ locale() == 'en' ? 'Phone number' : 'رقم الهاتف' }} </span>
                                        <h3>{{ $user->phone }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Profile Cont-->
                    </div>
                    <!--End Profile Card-->
                </div>
                <!--End Col-9-->
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
