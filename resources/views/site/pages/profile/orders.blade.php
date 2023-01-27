@extends('site.layouts.master')
@push('title')
    {{ locale() == 'en' ? 'Order history' : 'الطلبات' }}
@endpush
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ locale() == 'en' ? 'Order history' : 'الطلبات' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Order history' : 'الطلبات' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="colored">
        <div class="container">
            <div class="row">
                @include('site.pages.profile.templates.sidebar')
                <div class="col-lg-9">
                    <div class="profile_card bordrad_5">
                        <div class="page_title">
                            <i class="fa fa-th"></i>
                            {{ locale() == 'en' ? 'Order history' : 'الطلبات' }}
                        </div>
                        <!--End Page Title-->
                        <div class="profile_cont">
                            @foreach ($orders as $index => $order)
                                <div class="order">
                                    <div class="cont">
                                        <h4>
                                            <a href="{{ route('site.profile.orders.show', ['id' => $order->order_no]) }}"><strong>
                                                    {{ locale() == 'en' ? 'Order no. #' : 'طلب رقم #' }}
                                                    {{ $order->order_no }}</strong></a>
                                            <span> {{ count($order['items_data']) }} X </span>
                                            <span>{{ $order->total }} {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span>
                                            <span>
                                                <i class="far fa-calendar-alt"></i>
                                                {{ $order->created_at->format('d M Y') }}</span>
                                        </h4>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated shipped"
                                            role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                            Shipped
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
