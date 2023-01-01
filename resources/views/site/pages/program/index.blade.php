@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ locale() == 'en' ? 'School Program' : 'البرنامج المدرسي' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'School Program' : 'البرنامج المدرسي' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="video">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="cont mt-0">
                        <h2>{{ $program['title_' . locale()] }}</h2>
                        <h3 data-aos="fade-up" data-aos-delay="60" class="aos-init aos-animate">
                            {{ $program['subtitle_' . locale()] }}
                        </h3>
                        @foreach (explode("\n", $program['description1_' . locale()]) as $item)
                            <p>
                                {{ $item }}
                            </p>
                        @endforeach
                    </div>
                </div>
                <!--End Col-->
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="30">
                    <img src="{{ $program['image1_path'] }}" class="tilt custom_img" alt=""
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
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-start">
                        <h3> {{ locale() == 'en' ? 'BENEFITS TO SCHOOL' : 'فوائد المدرسة' }}</h3>
                    </div>
                    <ul class="steps custom">
                        @php
                            $x = 1;
                        @endphp
                        @foreach (explode("\n", $program['description2_' . locale()]) as $desc)
                            <li><span class="count">{{ $x }}</span> {{ $desc }}</li>
                            @php
                                $x++;
                            @endphp
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="30">

                    <img src="{{ $program['image2_path'] }}" class="tilt custom_img" alt="" />
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <section class="static colored">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="30">
                    <img src="{{ $program['image3_path'] }}" class="tilt custom_img" alt="" />
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="60">
                    <div class="cont">
                        <h3>{{ locale() == 'en' ? 'HOW IT WORKS' : 'كيف تعمل' }}</h3>
                        <ul class="steps">
                            @php
                                $y = 1;
                            @endphp
                            @foreach (explode("\n", $program['description3_' . locale()]) as $desc)
                                <li><span class="count">{{ $y }}</span> {{ $desc }}</li>
                                @php
                                    $y++;
                                @endphp
                            @endforeach
                        </ul>
                        @if (auth()->guard('site')->guest())
                            <a href="#login_wrap" style="float: right;" class="link aos-init aos-animate" data-aos="fade-up"
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
    <section class="login_wrap" id="login_wrap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 static">
                    <div class="cont">
                        <h3>{{ locale() == 'en' ? 'school Program' : 'البرنامج المدرسي' }}</h3>
                        {!! $program['description_' . locale()] !!}
                    </div>
                </div>
                <div class="col-lg-6 form_cont request">
                    <form method="post" action="{{ route('site.school') }}" class="registeration-form">
                        @csrf
                        <h3>{{ locale() == 'en' ? 'Registration request' : 'طلبات التسجيل' }}</h3>

                        <div class="form-group">
                            <input type="text" class="form-control"
                                placeholder="{{ locale() == 'en' ? 'Name' : 'الإسم بالكامل' }}" name="name" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                placeholder="{{ locale() == 'en' ? 'Role' : 'الدور' }}" name="role" />
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control"
                                placeholder="{{ locale() == 'en' ? 'Phone nubmer' : 'رقم الهاتف' }}" name="phone" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"
                                placeholder="{{ locale() == 'en' ? 'Email Address' : 'البريد الإلكتروني' }}"
                                name="email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                placeholder="{{ locale() == 'en' ? 'School Name' : 'إسم المدرسة' }}" name="school" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                placeholder="{{ locale() == 'en' ? 'Region' : 'المنطقة ' }}" name="region" />
                        </div>

                        <button class="link">
                            <span>
                                {{ locale() == 'en' ? 'Send Info' : 'إرسال البيانات' }} <i
                                    class="fa fa-long-arrow-alt-right"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="partners colored">
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
@endsection
@push('js')
    <script>
        $(document).on('submit', '.registeration-form', function() {
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            form.find(":submit").attr('disabled', true).html(
                "<span>{{ locale() == 'en' ? 'Please wait' : 'برجاء الإنتظار' }} <i class='fa fa-long-arrow-alt-right'></i></span>"
            );

            $.ajax({
                url: url,
                method: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    notification("success", response, "fas fa-check");
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                },
                error: function(jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    notification("danger", response, "fas fa-times");
                    form.find(":submit").attr('disabled', false).html(
                        "<span>{{ locale() == 'en' ? 'Send Info' : 'إرسال البيانات' }} <i class='fa fa-long-arrow-alt-right'></i></span>"
                    );
                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            return false;
        });
    </script>
@endpush
