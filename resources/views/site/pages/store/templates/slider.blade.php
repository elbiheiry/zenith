@if (sizeof($images['data']) > 0)
    <div class="swiper mySwiper2 swip2">
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
    <div thumbsSlider="" class="swiper mySwiper swip">
        <div class="swiper-wrapper">
            @foreach ($images['data'] as $image)
                <div class="swiper-slide">
                    <img src="{{ $image['image_path'] }}" />
                </div>
            @endforeach
        </div>
    </div>
    <script>
        var swiper1 = new Swiper(".swip", {
            loop: false,
            spaceBetween: 10,
            slidesPerView: 6,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper3 = new Swiper(".swip2", {
            loop: true,
            autoplay: true,
            spaceBetween: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper1,
            },
        });
    </script>
@else
    <div class="alert alert-danger text-center">
        {{ locale() == 'en' ? 'There is no images available for this color now' : 'لا توجد صور متاحة لهذا اللون الاّن' }}
    </div>
@endif
