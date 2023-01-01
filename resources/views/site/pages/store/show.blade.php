@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ $product['name_' . locale()] }}</h3>
                    <ul>
                        {{-- <li><a href="{{ route('site.store') }}">{{ locale() == 'en' ? 'Store' : 'المتجر' }} </a></li> --}}
                        <li>{{ $product['name_' . locale()] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product_slider">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <a href="{{ $product['image_path'] }}" class="swiper-slide" data-fancybox="gallery">
                                    <img src="{{ $product['image_path'] }}" />
                                </a>
                                @foreach ($images['data'] as $image)
                                    <a href="{{ $image['image_path'] }}" class="swiper-slide" data-fancybox="gallery">
                                        <img src="{{ $image['image_path'] }}" />
                                    </a>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img src="{{ $product['image_path'] }}" />
                                </div>
                                @foreach ($images['data'] as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ $image['image_path'] }}" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product_details">
                        <h2>{{ $product['name_' . locale()] }} </h2>
                        <span class="price">{{ $product['specifications']['data'][0]['price'] }}
                            {{ locale() == 'en' ? 'SAR' : 'ريال سعودي ' }}</span>
                        {!! $product['description_' . locale()] !!}
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">
                                    {{ locale() == 'en' ? 'Key Features' : 'المميزات الاساسية' }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">
                                    {{ locale() == 'en' ? 'Legal' : 'قانونيا' }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">
                                    {{ locale() == 'en' ? 'Delivery/Refund Policy' : 'شروط التوصيل والاسترجاع' }}
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                {!! $product['features_' . locale()] !!}
                            </div>
                            <div class="tab-pane fade show" id="tab2" role="tabpanel">
                                {!! $product['legal_' . locale()] !!}
                            </div>
                            <div class="tab-pane fade show" id="tab3" role="tabpanel">
                                {!! $product['terms_' . locale()] !!}
                            </div>
                        </div>
                        <form method="post" action="{{ route('site.cart.add', ['id' => $product['id']]) }}"
                            class="add-to-cart">
                            @csrf
                            <input type="hidden" name="sku" id="sku-input"
                                value="{{ $product['specifications']['data'][0]['sku'] }}">
                            <span class="price price2">{{ $product['specifications']['data'][0]['price'] }}
                                {{ locale() == 'en' ? 'SAR' : 'ريال سعودي ' }}</span>
                            @if (sizeof($allCapacities) > 0)
                                <div class="form-group">
                                    <label class="d-block"> {{ locale() == 'en' ? 'Capacity' : 'الذاكرة الداخلية' }}
                                    </label>
                                    @foreach ($allCapacities as $index => $capacity)
                                        <div class="check_list">
                                            <input type="radio" id="{{ $capacity['capacity_name'] }}" name="capacity"
                                                value="{{ $capacity['capacity_id'] }}"
                                                {{ $capacity['capacity_id'] == $product['specifications']['data'][0]['capacity_id'] ? 'checked' : '' }} />
                                            <label for="{{ $capacity['capacity_name'] }}">
                                                <span> {{ $capacity['capacity_name'] }} </span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if (sizeof($allConnectivities) > 0)
                                <div class="form-group">
                                    <label class="d-block"> {{ locale() == 'en' ? 'Connectivity' : 'نوع الاتصال' }}
                                    </label>
                                    @foreach ($allConnectivities as $index => $connectivity)
                                        <div class="check_list">
                                            <input type="radio" id="{{ $connectivity['connectivity'] }}"
                                                name="connectivity" value="{{ $connectivity['connectivity'] }}"
                                                {{ $connectivity['connectivity'] == $product['specifications']['data'][0]['connectivity'] ? 'checked' : '' }} />
                                            <label for="{{ $connectivity['connectivity'] }}">
                                                <span> {{ $connectivity['connectivity'] }} </span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if (sizeof($allColors) > 0)
                                <div class="form-group">
                                    <label class="d-block"> {{ locale() == 'en' ? 'Color' : 'اللون' }} </label>
                                    @foreach ($allColors as $index => $color)
                                        <div class="check_list">
                                            <input type="radio" id="{{ $color['color_name'] }}" name="color"
                                                value="{{ $color['color_id'] }}"
                                                {{ $color['color_id'] == $product['specifications']['data'][0]['color_id'] ? 'checked' : '' }} />
                                            <label for="{{ $color['color_name'] }}">
                                                <span> {{ $color['color_name'] }} </span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if (sizeof($allTypes) > 0)
                                <div class="form-group">
                                    <label class="d-block"> {{ locale() == 'en' ? 'Type' : 'النوع' }} </label>
                                    @foreach ($allTypes as $index => $type)
                                        <div class="check_list">
                                            <input type="radio" id="{{ $type['type'] }}" name="type"
                                                value="{{ $type['type'] }}"
                                                {{ $type['type'] == $product['specifications']['data'][0]['type'] ? 'checked' : '' }} />
                                            <label for="{{ $type['type'] }}">
                                                <span> {{ $type['type'] }} </span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <div class="action d-flex">
                                <div class="cat-number">
                                    <a href="#" class="number-down">
                                        <i class="fa fa-angle-down"></i>
                                    </a><input value="1" class="form-control" type="number" name="quantity" />
                                    <a href="#" class="number-up">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                </div>
                                <button class="icon fa fa-shopping-cart" id="cartBTN"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
    @if (sizeof($product['accessories']['data']) > 0)
        <section class="colored">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="head_tit">{{ locale() == 'en' ? 'RELATED ACCESSORIES' : 'الإكسسوارات المتعلقة' }}</h3>
                    </div>
                    <!--End Col-->
                    <div class="col-12">
                        <div class="swiper related_slider">
                            <div class="swiper-wrapper">
                                @foreach ($product['accessories']['data'] as $accessory)
                                    <div class="swiper-slide">
                                        <div class="product_item">
                                            <a href="{{ route('site.store.accessory', ['slug' => $accessory['slug']]) }}"
                                                class="img_link">
                                                <img src="{{ $accessory['image_path'] }}" class="front" />
                                                <img src="{{ $accessory['image_path'] }}" class="back" />
                                            </a>
                                            <a href="{{ route('site.store.accessory', ['slug' => $accessory['slug']]) }}">{{ $accessory['name_' . locale()] }}
                                            </a>
                                            <p>{{ $accessory['specifications']['data'][0]['price'] }}
                                                {{ locale() == 'en' ? 'SAR' : 'ريال سعودي ' }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!--End Col-->
            </div>
            <!--End Container-->
        </section>
    @endif
    <!--End Section-->
@endsection
@push('js')
    <script>
        // Product Slider
        $("[data-fancybox]").fancybox();
        var swiper = new Swiper(".mySwiper", {
            loop: false,
            spaceBetween: 10,
            slidesPerView: 6,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: false,
            autoplay: true,
            spaceBetween: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
        let relatedSwiper = new Swiper(".related_slider", {
            grabCursor: true,
            loop: false,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".next1",
                prevEl: ".prev1",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            keyboard: {
                enabled: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                577: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });

        $(".add-to-cart").on('submit', function(e) {

            var url = $(this).attr('action');

            $.ajax({
                url: url,
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    notification("success", response.message, "fas fa-check");
                    $('#cart-area').html(response.html);
                    $('#cart-counter').html(response.counter);
                    {{-- setTimeout(function() {
                        window.location.reload();
                    }, 2000); --}}
                },
                error: function(jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    notification("danger", response, "fas fa-times");
                }
            });

            return false;
        });

        $(document).on('change', 'input[type=radio][name=color]', function() {
            var url = "{{ route('site.store.product.slider') }}";
            var color = $(this).val();
            var id = "{{ $product['id'] }}";
            var _token = "{{ csrf_token() }}"

            $.ajax({
                url: url,
                method: 'post',
                data: {
                    _token: _token,
                    color: color,
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('.product_slider').html(response);
                },
                error: function(jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    notification("danger", response, "fas fa-times");
                }
            });

            return false;
        });
        $(document).on('change',
            'input[type=radio][name=capacity] , input[type=radio][name=color] , input[type=radio][name=connectivity] ,input[type=radio][name=type]',
            function() {
                var url = "{{ route('site.store.product.price', ['id' => $product['id']]) }}";
                var capacity = $('[name=capacity]:checked').val();
                var color = $('[name=color]:checked').val();
                var connectivity = $('[name=connectivity]:checked').val();
                var type = $('[name=type]:checked').val();

                var _token = "{{ csrf_token() }}"

                $.ajax({
                    url: url,
                    method: 'post',
                    data: {
                        _token: _token,
                        connectivity: connectivity,
                        color: color,
                        capacity: capacity,
                        type: type,
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.price != null) {
                            $('#cartBTN').attr('disabled', false);
                            $('.price').html(response.price +
                                " {{ locale() == 'en' ? 'SAR' : 'ريال سعودي ' }}");
                            $('#sku-input').val(response.sku)
                        } else {
                            $('.price').html("{{ locale() == 'en' ? 'Not available' : 'غير متاح' }}");
                            $('#cartBTN').attr('disabled', true);
                        }
                    },
                    error: function(jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        notification("danger", response, "fas fa-times");
                    }
                });

                return false;
            });
    </script>
@endpush
