@extends('site.layouts.master')
@push('title')
    {{ locale() == 'en' ? 'Children' : 'الأبناء' }}
@endpush
@push('models')
    <div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 9999;">
        <div class="modal-dialog" role="document" id="edit-area">

        </div>
    </div>
@endpush
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ locale() == 'en' ? 'Children' : 'الأبناء' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Children' : 'الأبناء' }}</li>
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
                            {{ locale() == 'en' ? 'Add child' : 'إضافة إبن' }}
                        </div>
                        <!--End Page Title-->
                        <div class="profile_cont">
                            <div class="row m-auto">
                                <form method="post" action="{{ route('site.profile.child') }}" class="profile-form">
                                    @csrf
                                    @method('post')
                                    <div class="row m-auto">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="code"
                                                    placeholder="{{ locale() == 'en' ? 'School code' : 'الكود المدرسي' }}" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control" name="school_id">
                                                    <option value="0" selected>
                                                        {{ locale() == 'en' ? 'Select School' : 'إختر المدرسة' }}</option>
                                                    @foreach ($schools['data'] as $school)
                                                        <option value="{{ $school['id'] }}">
                                                            {{ $school['name_' . locale()] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="{{ locale() == 'en' ? 'Student name' : 'إسم الطالب' }}" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="grade"
                                                    placeholder="{{ locale() == 'en' ? 'Year grade' : 'السنة الدراسية' }}" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="link">
                                                <span>
                                                    {{ locale() == 'en' ? 'Save Changes' : 'حفظ التغييرات' }}
                                                    <i class="fa fa-long-arrow-alt-right"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--End Profile Cont-->
                    </div>
                    <div class="profile_card bordrad_5">
                        <div class="page_title">
                            <i class="far fa-user"></i>
                            {{ locale() == 'en' ? 'Children' : 'الأبناء' }}
                        </div>
                        <!--End Page Title-->
                        <div class="profile_cont">
                            <div class="row m-auto">
                                <div class="col">
                                    <div class="table-responsive-lg">
                                        <table class="table table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>{{ locale() == 'en' ? 'Code' : 'الكود المدرسي' }}</th>
                                                    <th>{{ locale() == 'en' ? 'Name' : 'الإسم' }}</th>
                                                    <th>{{ locale() == 'en' ? 'School' : 'المدرسة' }}</th>
                                                    <th>{{ locale() == 'en' ? 'Year' : 'السنة الدراسية' }}</th>
                                                    <th>{{ locale() == 'en' ? 'Options' : 'الإختيارات' }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $x = 1;
                                                @endphp
                                                @foreach ($user->childrens as $index => $child)
                                                    <tr>
                                                        <td>{{ $x }}</td>
                                                        <td>{{ $child->code }}</td>
                                                        <td>{{ $child->name }}</td>
                                                        <td>{{ $child->school->translate(locale())->name }}</td>
                                                        <td>{{ $child->grade }}</td>
                                                        <td>
                                                            <button class="icon btn-modal-view"
                                                                data-url="{{ route('site.profile.child.edit', ['id' => $child['id']]) }}">

                                                                <i class="far fa-edit"></i>
                                                            </button>
                                                            <a class="icon" style="background-color: #d50c0c;"
                                                                href="{{ route('site.profile.child.remove', ['id' => $child['id']]) }}">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $x++;
                                                    @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
        //open edit form in model
        $(document).on('click', '.btn-modal-view', function() {
            var $this = $(this);
            var url = $this.data('url');
            var originalHtml = $this.html();

            $.ajax({
                url: url,
                method: 'GET',
                success: function(data) {
                    $this.prop('disabled', false).html(originalHtml);
                    $('#common-modal').modal('show');
                    $('#edit-area').html(data);
                }
            });
        });

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
