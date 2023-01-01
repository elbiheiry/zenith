@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ locale() == 'en' ? 'My Account' : 'الملف الشخصي' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'My Account' : 'الملف الشخصي' }}</li>
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
                        <div class="page_title">
                            <i class="far fa-user"></i>
                            {{ locale() == 'en' ? 'Edit Info' : 'تعديل البيانات' }}
                        </div>
                        <!--End Page Title-->
                        <div class="profile_cont">
                            <div class="row m-auto">
                                <form method="put" action="{{ route('site.profile.update') }}" class="profile-form">
                                    @csrf
                                    @method('put')
                                    <div class="row m-auto">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>{{ locale() == 'en' ? 'Parent name' : 'إسم ولي الأمر' }}</label>
                                                <input type="text" class="form-control" value="{{ $user->parent }}"
                                                    name="parent" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> {{ locale() == 'en' ? 'Phone number' : 'رقم الهاتف' }} </label>
                                                <input type="text" class="form-control" value="{{ $user->phone }}"
                                                    name="phone" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="link">
                                                <span>
                                                    {{ locale() == 'en' ? 'Save Changes' : 'حفظ التغييرات' }}
                                                    <i class="fa fa-long-arrow-alt-right"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
        $(document).on('submit', '.profile-form', function() {
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
                        window.location.href = "{{ route('site.profile.index') }}";
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
