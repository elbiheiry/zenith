@extends('site.layouts.master')
@push('title')
    {{ locale() == 'en' ? 'Privacy Policy' : 'سياسة الخصوصية' }}
@endpush
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ locale() == 'en' ? 'Privacy Policy' : 'سياسة الخصوصية' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Privacy Policy' : 'سياسة الخصوصية' }}</li>
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
                    {!! $privacy['description_' . locale()] !!}
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
