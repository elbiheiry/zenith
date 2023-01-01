@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ __('Verify Your Email Address') }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ __('Verify Your Email Address') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="login_wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 verfiy">
                    <p>
                        <i class="fa fa-info"></i>
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                    </p>    
                    <form class="d-inline p-0 m-0 border-0" method="POST" action="{{ route('site.verification.resend') }}">
                        @csrf
                        <button type="submit"  class="link align-baseline"><span>{{ __('click here to request another') }}</span></button>.
                    </form>
                    {{-- <div class="form-group">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
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
    </script>
@endpush
