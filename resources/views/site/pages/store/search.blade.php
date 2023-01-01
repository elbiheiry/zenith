@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ locale() == 'en' ? 'Search results' : 'نتائج البحث' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Search results' : 'نتائج البحث' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="colored">
        <div class="container">
            <div class="row">
                <!--End Col-->
                @foreach ($products['data'] as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="40">
                        <div class="product_item">
                            <a href="{{ route('site.store.product', ['slug' => $product['slug']]) }}" class="img_link">
                                <img src="{{ $product['image_path'] }}" class="front" />
                                <img src="{{ $product['image_path'] }}" class="back" />
                            </a>
                            <a href="{{ route('site.store.product', ['slug' => $product['slug']]) }}">
                                {{ $product['name_' . locale()] }} </a>
                            <p>{{ $product['price'] }} {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</p>
                            <form class="action d-flex center_content add-to-cart" method="post"
                                action="{{ route('site.cart.add', ['id' => $product['id']]) }}">
                                @csrf
                                <div class="cat-number">
                                    <a href="#" class="number-down">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <input value="1" class="form-control" type="number" name="quantity" />
                                    <a href="#" class="number-up">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                </div>
                                <button class="icon fa fa-shopping-cart"></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </section>
    <!--End Section-->
@endsection
@push('js')
    <script>
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
    </script>
@endpush
