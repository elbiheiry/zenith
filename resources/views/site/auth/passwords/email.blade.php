@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ locale() == 'en' ? 'Reset Password' : 'إعادة تعيين كلمة السر' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Reset Password' : 'إعادة تعيين كلمة السر' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="login_wrap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 form_cont">
                    <form method="post" action="{{ route('site.password.email') }}" class="login-form">
                        @csrf
                        @method('post')
                        <h3>{{ locale() == 'en' ? 'Reset Password' : 'إعادة تعيين كلمة السر' }}</h3>
                        <div class="form-group">
                            <label>{{ locale() == 'en' ? 'Enter Your Email Address to reset Your password' : 'أدخل بريدك الإلكتروني لإعاده تعيين كلمة السر' }}
                            </label>
                            <input type="email" class="form-control" name="email" />
                        </div>

                        <div class="w-100 d-flex center_content">
                            <button class="link">
                                <span>
                                    {{ locale() == 'en' ? 'Send Message' : 'إرسال' }} <i
                                        class="fa fa-long-arrow-alt-right"></i></span>
                            </button>
                            <a href="{{ route('site.login') }}" class="txt_link">
                                {{ locale() == 'en' ? 'Back To login' : 'عودة الي تسجيل الدخول ' }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).on('submit', '.login-form', function() {
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            form.find(":submit").attr('disabled', true).html(
                "<span> {{ locale() == 'en' ? 'Please wait' : 'برجاء الإنتظار' }} <i class='fa fa-long-arrow-alt-right'></i></span>"
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
                        "{{ locale() == 'en' ? 'We have sent an email to your email' : 'تم إرسال رسالة الي بريدك الإلكتروني' }}",
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
                        "<span> {{ locale() == 'en' ? 'Send Message' : 'إرسال' }} <i class='fa fa-long-arrow-alt-right'></i></span>"
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
