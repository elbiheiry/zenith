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
                    <form method="post" action="{{ route('site.password.update') }}" class="login-form">
                        @csrf
                        @method('post')
                        <input type="hidden" name="token" value="{{ $token }}">
                        <h3>{{ locale() == 'en' ? 'Reset Password' : 'إعادة تعيين كلمة السر' }}</h3>
                        <div class="form-group">
                            <label>{{ locale() == 'en' ? 'Email' : 'البريد الإلكتروني' }}
                            </label>
                            <input type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}"
                                readonly />
                        </div>
                        <div class="form-group">
                            <label>{{ locale() == 'en' ? 'New password' : 'كلمة السر الجديدة' }}
                            </label>
                            <input type="password" class="form-control" name="password" />
                        </div>
                        <div class="form-group">
                            <label>{{ locale() == 'en' ? 'Password confirmation' : 'تأكيد الرقم السري' }}
                            </label>
                            <input type="password" class="form-control" name="password_confirmation" />
                        </div>

                        <div class="w-100 d-flex center_content">
                            <button class="link">
                                <span>
                                    {{ locale() == 'en' ? 'Save changes' : 'تغيير البيانات' }} <i
                                        class="fa fa-long-arrow-alt-right"></i></span>
                            </button>
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
                        "{{ locale() == 'en' ? 'Password has been changed successfully' : 'تم تغيير الرقم السري بنجاح' }}",
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
                        "<span> {{ locale() == 'en' ? 'Save changes' : 'تغيير البيانات' }} <i class='fa fa-long-arrow-alt-right'></i></span>"
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
