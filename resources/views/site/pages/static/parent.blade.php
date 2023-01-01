@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ locale() == 'en' ? 'Parental Program' : 'البرنامج الأبوي' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Parental program' : 'البرنامج الأبوي' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="video colored">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="cont mt-0">
                        <h2>{{ $content['title_' . locale()] }}</h2>
                        <h3 data-aos="fade-up" data-aos-delay="60" class="aos-init aos-animate">
                            {{ $content['subtitle_' . locale()] }}
                        </h3>
                        @foreach (explode("\n", $content['description_' . locale()]) as $item)
                            <p>
                                {{ $item }}
                            </p>
                        @endforeach
                    </div>
                </div>
                <!--End Col-->
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="30">
                    <img src="{{ $content['image_path'] }}" class="tilt custom_img" alt=""
                        style="will-change: transform; transform: perspective(900px) rotateX(0deg) rotateY(0deg);">
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>

    <section class="static">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'Benefits For Parents' : 'الفوائد للاّباء ' }}</h3>
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

    <section class="static colored">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12" data-aos="fade-up" data-aos-delay="30">
                    <div class="section_title text-center">
                        <h3>{{ locale() == 'en' ? 'How it works' : 'كيف تعمل ' }}</h3>
                    </div>
                </div>
                @php
                    $x = 1;
                @endphp
                @foreach ($works['data'] as $work)
                    <div class="col-md-4">
                        <div class="work_item aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                            {{-- <img alt="" src="{{ surl('images/parents/how-bg.jpeg') }}"> --}}
                            <div class="cont">
                                <span>{{ $x }}</span>
                                <h3>{{ $work['title_' . locale()] }}</h3>
                                <p>{{ $work['subtitle_' . locale()] }}</p>
                            </div>
                        </div>
                    </div>
                    @php
                        $x++;
                    @endphp
                @endforeach
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>

    @if (auth()->guard('site')->guest())
        <section class="login_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action="{{ route('site.login') }}" class="login_form">
                            @csrf
                            <h3>{{ locale() == 'en' ? 'have an account' : 'تمتلك حساب ' }}</h3>
                            <div class="form-group">
                                <label>{{ locale() == 'en' ? 'Email Address' : 'البريد الإلكتروني' }}</label>
                                <input type="email" class="form-control" name="email" />
                            </div>

                            <div class="form-group">
                                <label>{{ locale() == 'en' ? 'Password' : 'الرقم السري' }}</label>
                                <input type="password" class="form-control" name="password" />
                            </div>
                            <div class="w-100 d-flex center_content">
                                <a href="{{ route('site.password.request') }}" class="txt_link">
                                    {{ locale() == 'en' ? 'Forget Password' : 'نسيت الرقم السري' }} !
                                </a>
                                <button class="link">
                                    <span>
                                        {{ locale() == 'en' ? 'Signin' : 'سجل الدخول' }} <i
                                            class="fa fa-long-arrow-alt-right"></i></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 register">
                        <form method="post" action="{{ route('site.register') }}" class="register_form">
                            @csrf
                            <h3>{{ locale() == 'en' ? 'Create a New Account' : 'أنشئ حساب جديد' }}</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" name="code"
                                    placeholder="{{ locale() == 'en' ? 'School code' : 'الكود المدرسي' }}" />
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="school_id">
                                    <option value="0" selected>
                                        {{ locale() == 'en' ? 'Select School' : 'إختر المدرسة' }}</option>
                                    @foreach ($schools['data'] as $school)
                                        <option value="{{ $school['id'] }}">{{ $school['name_' . locale()] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="parent"
                                    placeholder="{{ locale() == 'en' ? 'Parent name' : 'إسم ولي الأمر' }}" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name"
                                    placeholder="{{ locale() == 'en' ? 'Student name' : 'إسم الطالب' }}" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="grade"
                                    placeholder="{{ locale() == 'en' ? 'Year grade' : 'السنة الدراسية' }}" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email"
                                    placeholder="{{ locale() == 'en' ? 'Email address' : 'البريد الإلكتروني' }}" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone"
                                    placeholder="{{ locale() == 'en' ? 'Phone number' : 'رقم الهاتف' }}" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password"
                                    placeholder="{{ locale() == 'en' ? 'Password' : 'الرقم السري' }}" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="{{ locale() == 'en' ? 'Confirm assword' : 'تأكيد الرقم السري' }}" />
                            </div>
                            <button class="link">
                                <span>
                                    {{ locale() == 'en' ? 'Create Account' : 'إنشاء حساب' }} <i
                                        class="fa fa-long-arrow-alt-right"></i></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endif

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
@if (auth()->guard('site')->guest())
    @push('js')
        <script>
            $(document).on('submit', '.login_form', function() {
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
                        notification("success",
                            "{{ locale() == 'en' ? 'Logged in successfully' : 'تم تسجيل الدخول بنجاح' }}",
                            "fas fa-check");
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    },
                    error: function(jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        var errors = [];
                        $.each(response.errors, function(index, value) {
                            errors.push(value);
                        });
                        notification("danger", errors[0], "fas fa-times");
                        form.find(":submit").attr('disabled', false).html(
                            "<span>{{ locale() == 'en' ? 'Signin' : 'سجل الدخول' }} <i class='fa fa-long-arrow-alt-right'></i></span>"
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
            $(document).on('submit', '.register_form', function() {
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
                        notification("success",
                            "{{ locale() == 'en' ? 'Logged in successfully' : 'تم تسجيل الدخول بنجاح' }}",
                            "fas fa-check");
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    },
                    error: function(jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        var errors = [];
                        $.each(response.errors, function(index, value) {
                            errors.push(value);
                        });
                        notification("danger", errors[0], "fas fa-times");
                        form.find(":submit").attr('disabled', false).html(
                            "<span>{{ locale() == 'en' ? 'Create account' : 'إنشاء حساب' }} <i class='fa fa-long-arrow-alt-right'></i></span>"
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
@endif
