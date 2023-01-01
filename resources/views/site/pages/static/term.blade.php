@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ locale() == 'en' ? 'Terms and conditions' : 'الشروط والاحكام' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Terms and conditions' : 'الشروط والاحكام' }}</li>
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
                    {!! $term['description_' . locale()] !!}
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
