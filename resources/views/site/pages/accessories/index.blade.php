@extends('site.layouts.master')
@push('title')
    {{ $accessory['name_' . locale()] }}
@endpush
@push('css')
    <link rel="stylesheet" href="{{ surl('vendor/swiper.css') }}" />
@endpush
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ $accessory['name_' . locale()] }}</h3>
                    <ul>
                        {{-- <li><a href="{{ route('site.store') }}">{{ locale() == 'en' ? 'Store' : 'المتجر' }} </a></li> --}}
                        <li>{{ $accessory['name_' . locale()] }}</li>
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
                                <a href="{{ $accessory['image_path'] }}" class="swiper-slide" data-fancybox="gallery">
                                    <img src="{{ $accessory['image_path'] }}" alt="{{ $accessory['name_' . locale()] }}" />
                                </a>
                                @foreach ($images['data'] as $image)
                                    <a href="{{ $image['image_path'] }}" class="swiper-slide" data-fancybox="gallery">
                                        <img src="{{ $image['image_path'] }}" alt="{{ $accessory['name_' . locale()] }}" />
                                    </a>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ $accessory['image_path'] }}"
                                        alt="{{ $accessory['name_' . locale()] }}" />
                                </div>
                                @foreach ($images['data'] as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ $image['image_path'] }}"
                                            alt="{{ $accessory['name_' . locale()] }}/>
                                    </div>
@endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                                        <div class="product_details">
                                            <h2>{{ $accessory['name_' . locale()] }} </h2>
                                            <span class="price">{{ $accessory['specifications']['data'][0]['price'] }}
                                                {{ locale() == 'en' ? 'SAR' : 'ريال سعودي ' }}</span>
                                            @foreach (explode("\n", $accessory['overview_' . locale()]) as $item)
                                                <p>{{ $item }}</p>
                                            @endforeach

                                            @if ($accessory['description_' . locale()])
                                                <h4>{{ locale() == 'en' ? 'Technical Specifications' : 'المواصفات التقنية' }}
                                                </h4>
                                                {!! $accessory['description_' . locale()] !!}
                                            @endif

                                            <form method="post"
                                                action="{{ route('site.store.accessory.cart.add', ['id' => $accessory['id']]) }}"
                                                class="add-to-cart">
                                                @csrf
                                                <input type="hidden" name="sku" id="sku-input"
                                                    value="{{ $accessory['specifications']['data'][0]['sku'] }}">
                                                <span
                                                    class="price price2">{{ $accessory['specifications']['data'][0]['price'] }}
                                                    {{ locale() == 'en' ? 'SAR' : 'ريال سعودي ' }}</span>
                                                @if (sizeof($allColors) > 0)
                                                    <div class="form-group">
                                                        <label class="d-block">
                                                            {{ locale() == 'en' ? 'Colors' : 'الألوان' }}
                                                        </label>
                                                        @foreach ($allColors as $index => $color)
                                                            <div class="check_list">
                                                                <input type="radio" id="{{ $color['color_name'] }}"
                                                                    name="color_id" value="{{ $color['color_id'] }}"
                                                                    {{ $color['color_id'] == $accessory['specifications']['data'][0]['color_id'] ? 'checked' : '' }} />
                                                                <label for="{{ $color['color_name'] }}">
                                                                    <span> {{ $color['color_name'] }} </span>
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                @if (sizeof($allLanguages) > 0)
                                                    <div class="form-group">
                                                        <label class="d-block">
                                                            {{ locale() == 'en' ? 'Locales' : 'اللغات' }}
                                                        </label>
                                                        @foreach ($allLanguages as $index => $language)
                                                            <div class="check_list">
                                                                <input type="radio" id="{{ $language['locale'] }}"
                                                                    name="locale" value="{{ $language['locale'] }}"
                                                                    {{ $language['locale'] == $accessory['specifications']['data'][0]['locale'] ? 'checked' : '' }} />
                                                                <label for="{{ $language['locale'] }}">
                                                                    <span> {{ $language['locale'] }} </span>
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                <div class="action d-flex">
                                                    <div class="cat-number">
                                                        <a href="#" class="number-down">
                                                            <i class="fa fa-angle-down"></i>
                                                        </a><input value="1" class="form-control" type="number"
                                                            name="quantity" />
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
    @if (sizeof($relates['data']) > 0)
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
                                @foreach ($relates['data'] as $relate)
                                    <div class="swiper-slide">
                                        <div class="product_item">
                                            <a href="{{ route('site.store.accessory', ['slug' => $relate['slug']]) }}"
                                                class="img_link">
                                                <img src="{{ $relate['image_path'] }}" class="front"
                                                    alt="{{ $relate['name_' . locale()] }}" />
                                                <img src="{{ $relate['image_path'] }}" class="back"
                                                    alt="{{ $relate['name_' . locale()] }}" />
                                            </a>
                                            <a href="{{ route('site.store.accessory', ['slug' => $relate['slug']]) }}">{{ $relate['name_' . locale()] }}
                                            </a>
                                            <p>{{ $relate['specifications']['data'][0]['price'] }}
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
        $(document).on('change', 'input[type=radio][name=color_id] , input[type=radio][name=locale]', function() {
            var url = "{{ route('site.store.accessory.price', ['id' => $accessory['id']]) }}";
            var color = $('[name=color_id]:checked').val();
            var locale = $('[name=locale]:checked').val();

            var _token = "{{ csrf_token() }}"

            $.ajax({
                url: url,
                method: 'post',
                data: {
                    _token: _token,
                    color: color,
                    locale: locale
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
