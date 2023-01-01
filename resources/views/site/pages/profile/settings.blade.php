@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ locale() == 'en' ? 'Settings' : 'الإعدادات' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Settings' : 'الإعدادات' }}</li>
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
                    <div class="profile_card bordrad_5">
                        <div class="page_title"><i class="fa fa-cog"></i> {{ locale() == 'en' ? 'Settings' : 'الإعدادات' }}
                        </div>
                        <!--End Page Title-->
                        <div class="profile_cont">
                            <form class="row m-auto email_form" action="{{ route('site.profile.update.email') }}"
                                method="put">
                                @csrf
                                @method('put')
                                <div class="col-12">
                                    <div class="form_title">
                                        {{ locale() == 'en' ? 'Change Email Address' : 'تغيير البريد الإلكتروني' }}</div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label> {{ locale() == 'en' ? 'Email Address' : 'البريد الإلكتروني' }} : </label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $user->email }}" />
                                    </div>
                                    <!--End Form Group-->
                                </div>
                                <!--End Col-md-6-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label> {{ locale() == 'en' ? 'Password' : 'الرقم السري' }} : </label>
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                                    <!--End Form Group-->
                                </div>
                                <!--End Col-md-6-->
                                <div class="col-12">
                                    <button class="link">
                                        <span> {{ locale() == 'en' ? 'Save Change' : 'حفظ التغييرات' }} </span>
                                    </button>
                                </div>
                            </form>
                            <form class="row m-auto password_form" action="{{ route('site.profile.update.password') }}"
                                method="put">
                                @csrf
                                @method('put')
                                <!--End Col-md-12-->
                                <div class="col-12">
                                    <hr />
                                </div>
                                <div class="col-12">
                                    <div class="form_title">
                                        {{ locale() == 'en' ? 'Change Password' : 'تغيير الرقم السري' }}</div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label> {{ locale() == 'en' ? 'Old Password' : 'الرقم السري القديم' }} : </label>
                                        <input type="password" class="form-control" name="old_password" />
                                    </div>
                                    <!--End Form Group-->
                                </div>
                                <!--End Col-md-6-->
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label> {{ locale() == 'en' ? 'New password' : 'كلمة المرور الجديدة' }} : </label>
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                                    <!--End Form Group-->
                                </div>
                                <!--End Col-md-6-->
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label> {{ locale() == 'en' ? 'Confirm Password' : 'تأكيد الرقم السري' }} :
                                        </label>
                                        <input type="password" class="form-control" name="password_confirmation" />
                                    </div>
                                    <!--End Form Group-->
                                </div>
                                <!--End Col-md-6-->
                                <div class="col-12">
                                    <button class="link">
                                        <span> {{ locale() == 'en' ? 'Save Change' : 'حفظ التغييرات' }} </span>
                                    </button>
                                </div>
                                <!--End Col-md-12-->
                            </form>
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
@push('js')
    <script>
        $(document).on('submit', '.email_form', function() {
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
                        "<span>{{ locale() == 'en' ? 'Save Changes' : 'حفظ التغييرات' }} <i class='fa fa-long-arrow-alt-right'></i></span>"
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

        $(document).on('submit', '.password_form', function() {
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
                        "<span>{{ locale() == 'en' ? 'Save Changes' : 'حفظ التغييرات' }} <i class='fa fa-long-arrow-alt-right'></i></span>"
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
