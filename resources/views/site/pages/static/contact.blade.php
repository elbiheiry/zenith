@extends('site.layouts.master')
@push('title')
    {{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}
@endpush
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content static_head">
                    <h3>{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--  Section ==========================================-->
    <section class="colored contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 contact_details">
                    <h3>{{ locale() == 'en' ? 'Contact Information' : 'بيانات التواصل' }}</h3>
                    <ul class="contact_info">
                        <li>
                            <i class="fa fa-map-marker-alt"></i>
                            <a href="javascript:void(0)">
                                {{ $settings['address_' . locale()] }}
                            </a>
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:{{ $settings['email'] }}">
                                {{ $settings['email'] }}
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:{{ $settings['phone'] }}"> {{ $settings['phone'] }} </a>
                        </li>
                    </ul>
                    <ul class="social">
                        @foreach ($social_links as $link)
                            <li>
                                <a href="{{ $link->link }}" class="{{ $link->name }}_bc {{ $link->icon }}"
                                    target="_blank"></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-7 contact_form">
                    <form class="contact_form" method="post" action="{{ route('site.contact.store') }}">
                        @csrf
                        <h3>{{ locale() == 'en' ? 'Get In Touch' : 'تواصل معنا' }}</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="{{ locale() == 'en' ? 'Full Name' : 'الإسم بالكامل' }}" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="{{ locale() == 'en' ? 'Email' : 'البريد الإلكتروني' }} " />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone"
                                        placeholder="{{ locale() == 'en' ? 'Phone Number' : 'رقم الجوال' }}" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject"
                                        placeholder="{{ locale() == 'en' ? 'Subject' : 'العنوان' }}" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="{{ locale() == 'en' ? 'Your Message' : 'رسالتك' }}"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="link" type="submit">
                            <span>{{ locale() == 'en' ? 'Send Message' : 'إرسل الرسالة' }} <i
                                    class="fa fa-long-arrow-alt-right"></i></span>
                        </button>
                    </form>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.273095713444!2d46.67139311537481!3d24.71750290705881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03a9ddf0fcab%3A0xb79ffa5284283c95!2sZenith%20Arabia!5e0!3m2!1sen!2seg!4v1667042130361!5m2!1sen!2seg"
        width="100%" height="520" style="border: 0; margin-bottom: -8px" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
@push('js')
    <script>
        $(document).on('submit', '.contact_form', function() {
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            form.find(":submit").attr('disabled', true).html(
                "<span>{{ locale() == 'en' ? 'Please wait' : 'برجاء الإنتظار' }} <i class='fa fa-long-arrow-alt-{{ locale() == 'en' ? 'right' : 'left' }}'></i></span>"
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
                        "<span>{{ locale() == 'en' ? 'Send Message' : 'إرسل الرسالة' }} <i class='fa fa-long-arrow-alt-{{ locale() == 'en' ? 'right' : 'left' }}'></i></span>"
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
