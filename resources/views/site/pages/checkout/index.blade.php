@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ locale() == 'en' ? 'Checkout' : 'الدفع' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Checkout' : 'الدفع' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="colored">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form class="block-item add-order" method="post" action="{{ route('site.checkout.store') }}">
                        @csrf
                        @method('post')
                        <div class="form-title">{{ locale() == 'en' ? 'SHIPPING INFORMATIONS' : 'بيانات الشحن' }}</div>
                        <div class="row ship_form">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label> {{ locale() == 'en' ? 'Full Name' : 'الإسم بالكامل' }} <sup>*</sup> </label>
                                    <input class="form-control" type="text" name="name" value="{{ $user->parent }}" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label> {{ locale() == 'en' ? 'Phone Number' : 'رقم الجوال' }} <sup>*</sup> </label>
                                    <input class="form-control" type="text" name="phone" value="{{ $user->phone }}" />
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label> {{ locale() == 'en' ? 'Email' : 'البريد الإلكتروني' }} <sup>*</sup></label>
                                    <input class="form-control" type="email" name="email"
                                        value="{{ $user->email }}" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label> {{ locale() == 'en' ? 'City' : 'المدينة' }} <sup>*</sup> </label>
                                    {{-- <input class="form-control" type="text" name="city" /> --}}
                                    <select class="form-control" name="city">
                                        @foreach ($cities as $city)
                                            <option value="{{ $city }}">{{ $city }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>{{ locale() == 'en' ? 'State / Province' : 'المحافظه' }} <sup>*</sup> </label>
                                    <input class="form-control" type="text" name="state" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>ZIP code <sup>*</sup> </label>
                                    <input class="form-control" type="text" name="zip_code" />
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label> {{ locale() == 'en' ? 'Address' : 'العنوان' }} <sup>*</sup> </label>
                                    <input class="form-control" type="text" name="address" />
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label> {{ locale() == 'en' ? 'Address 2' : 'عنوان اّخر ' }}</label>
                                    <input class="form-control" type="text" name="address2" />
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group terms_check">
                                    <input id="terms" type="checkbox" name="terms" />
                                    <label for="terms">
                                        <span>
                                            @if (locale() == 'en')
                                                I accept <a href="{{ route('site.terms') }}">terms and conditions</a>
                                            @else
                                                أنا أوافق علي <a href="{{ route('site.terms') }}">الشروط والأحكام</a>
                                            @endif
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="block-item">
                        <div class="form-title">
                            {{ locale() == 'en' ? 'Bill Info' : 'بيانات الفاتوره' }}
                            <a href="{{ route('site.cart') }}" class="link">
                                <span> {{ locale() == 'en' ? 'Edit' : 'تعديل' }} </span>
                            </a>
                        </div>
                        @foreach ($items as $item)
                            <div class="cart_item">
                                <img src="{{ $item['attributes']['image'] }}" />
                                <div class="cart_item_details">
                                    @if ($item->associatedModel == 'product')
                                        <a href="{{ route('site.store.product', ['slug' => $item['attributes']['slug']]) }}"
                                            class="title"> {{ $item['attributes']['name_' . locale()] }}
                                        </a>
                                        <span class="price">{{ $item['price'] }}
                                            {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label> {{ locale() == 'en' ? 'Color' : 'اللون' }} </label>
                                                    <span class="data_info">
                                                        {{ $item->spec->color->translate(locale())->name }}
                                                    </span>
                                                </div>
                                            </div>
                                            @if ($item->spec->capacity)
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label> {{ locale() == 'en' ? 'Capacity' : 'المساحة' }} </label>
                                                        <span class="data_info">
                                                            {{ $item->spec->capacity->translate(locale())->name }} </span>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($item->spec->connectivity)
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label> {{ locale() == 'en' ? 'Connectivity' : 'التواصل' }}
                                                        </label>
                                                        <span class="data_info"> {{ $item->spec->connectivity }} </span>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($item->spec->type)
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label> {{ locale() == 'en' ? 'Type' : 'النوع' }}
                                                        </label>
                                                        <span class="data_info"> {{ $item->spec->type }} </span>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label> {{ locale() == 'en' ? 'Quantity' : 'الكمية' }} </label>
                                                    <span class="data_info"> {{ $item->quantity }} </span>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ($item->associatedModel == 'accessory')
                                        <a href="{{ route('site.store.accessory', ['slug' => $item['attributes']['slug']]) }}"
                                            class="title"> {{ $item['attributes']['name_' . locale()] }}
                                        </a>
                                        <span class="price">{{ $item['price'] }}
                                            {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span>
                                        <div class="row">
                                            @if ($item->spec->color_id != null)
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label> {{ locale() == 'en' ? 'Color' : 'اللون' }} </label>
                                                        <span class="data_info">
                                                            {{ $item->spec->color->translate(locale())->name }}
                                                        </span>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($item->spec->locale)
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label> {{ locale() == 'en' ? 'Locale' : 'االلغة' }} </label>
                                                        <span class="data_info"> {{ $item->spec->locale }}
                                                        </span>
                                                    </div>
                                                </div>
                                            @endif

                                        </div>
                                    @else
                                        <a href="{{ route('site.store.bundle', ['slug' => $item['attributes']['slug']]) }}"
                                            class="title"> {{ $item['attributes']['name_' . locale()] }}
                                        </a>
                                        <span class="price">{{ $item['price'] }}
                                            {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span>
                                    @endif

                                </div>
                            </div>
                        @endforeach
                        <div class="cart_total">
                            <h3 class="total">
                                {{ locale() == 'en' ? 'Total' : 'الإجمالي' }}
                                <span id="total-price"> {{ number_format(\Cart::getTotal(), 2) }}
                                    {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span>
                            </h3>
                            <a href="javascript:;" class="link" onclick="$('.add-order').submit();">
                                <span>
                                    {{ locale() == 'en' ? 'Payment' : 'الدفع' }} <i
                                        class="fa fa-long-arrow-alt-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
@push('js')
    <script>
        $(document).on('submit', '.add-order', function() {
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(form[0]);

            $.ajax({
                url: url,
                method: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    notification("success", response.message, "fas fa-check");
                    setTimeout(function() {
                        window.location.href = response.url;
                    }, 2000);
                },
                error: function(jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    notification("danger", response, "fas fa-times");
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
