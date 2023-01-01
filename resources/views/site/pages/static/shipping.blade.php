@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ locale() == 'en' ? 'Delivery & Shipping Policy' : 'سياسة التوصيل والشحن' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Delivery & Shipping Policy' : 'سياسة التوصيل والشحن' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--  Section ==========================================-->
    <section class="static">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $shipping['description_' . locale()] !!}
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
