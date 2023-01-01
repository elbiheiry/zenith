@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ $bundle['name_' . locale()] }}</h3>
                    <ul>
                        <li>{{ $bundle['name_' . locale()] }}</li>
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
                        <h2>{{ $bundle['name_' . locale()] }} ({{ $bundle['product']['name_' . locale()] }})</h2>
                        <span class="price"> {{ $bundle['price'] }}
                            {{ locale() == 'en' ? 'SAR' : 'ريال سعودي ' }}</span>
                        {!! $bundle['product']['description_' . locale()] !!}
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @if (sizeof($bundle['accessories']['data']) > 0)
                                <li class="nav-item active">
                                    <a class="nav-link active" data-toggle="tab" href="#tab0" role="tab">
                                        {{ locale() == 'en' ? 'ACCESSORIES' : 'الإكسسوارات' }}
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab1" role="tab">
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
                            @if (sizeof($bundle['accessories']['data']) > 0)
                                <div class="tab-pane fade show active" id="tab0" role="tabpanel">
                                    @foreach ($bundle['accessories']['data'] as $accessory)
                                        <div class="access">
                                            <img src="{{ $accessory['accessory']['image_path'] }}" class="back">
                                            <h3>{{ $accessory['accessory']['name_' . locale()] }}</h3>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <div class="tab-pane fade show " id="tab1" role="tabpanel">
                                {!! $bundle['product']['features_' . locale()] !!}
                            </div>
                            <div class="tab-pane fade show" id="tab2" role="tabpanel">
                                {!! $bundle['product']['legal_' . locale()] !!}
                            </div>
                            <div class="tab-pane fade show" id="tab3" role="tabpanel">
                                {!! $bundle['product']['terms_' . locale()] !!}
                            </div>
                        </div>
                        <form method="post" action="{{ route('site.store.bundle.cart.add', ['id' => $bundle['id']]) }}"
                            class="add-to-cart">
                            @csrf
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
    <!--@if (sizeof($bundle['accessories']['data']) > 0)-->
    <!--    <section class="colored">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-12">-->
    <!--                    <h3 class="head_tit">{{ locale() == 'en' ? 'RELATED ACCESSORIES' : 'الإكسسوارات المتعلقة' }}</h3>-->
    <!--                </div>-->
                    <!--End Col-->
    <!--                <div class="col-12">-->
    <!--                    <div class="swiper related_slider">-->
    <!--                        <div class="swiper-wrapper">-->
    <!--                            @foreach ($bundle['accessories']['data'] as $accessory)-->
    <!--                                <div class="swiper-slide">-->
    <!--                                    <div class="product_item">-->
    <!--                                        <a href="{{ route('site.store.accessory', ['slug' => $accessory['accessory']['slug']]) }}"-->
    <!--                                            class="img_link">-->
    <!--                                            <img src="{{ $accessory['accessory']['image_path'] }}" class="front" />-->
    <!--                                            <img src="{{ $accessory['accessory']['image_path'] }}" class="back" />-->
    <!--                                        </a>-->
    <!--                                        <a-->
    <!--                                            href="{{ route('site.store.accessory', ['slug' => $accessory['accessory']['slug']]) }}">{{ $accessory['accessory']['name_' . locale()] }}-->
    <!--                                        </a>-->
    <!--                                        <p>{{ $accessory['accessory']['specifications']['data'][0]['price'] }}-->
    <!--                                            {{ locale() == 'en' ? 'SAR' : 'ريال سعودي ' }}</p>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            @endforeach-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="swiper-pagination"></div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!--End Col-->
    <!--        </div>-->
            <!--End Container-->
    <!--    </section>-->
    <!--@endif-->
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
