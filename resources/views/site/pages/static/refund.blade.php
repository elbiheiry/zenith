@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ locale() == 'en' ? 'Return & Refund Policy' : 'سياسة الإسترجاع والإسترداد' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Return & Refund Policy' : 'سياسة الإسترجاع والإسترداد' }}</li>
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
                    {!! $refund['description_' . locale()] !!}
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
