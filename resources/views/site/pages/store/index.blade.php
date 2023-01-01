@extends('site.layouts.master')
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <div class="img_list">
                        <img src="{{ $school->logo }}" />
                    </div>
                    <ul>
                        <li><a href="{{ route('site.index') }}">{{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li> {{ $school->translate(locale())->name }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="colored">
        <div class="container">
            <div class="row">
                @foreach ($bundles['data'] as $bundle)
                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="40">
                        <div class="product_item">
                            <a href="{{ route('site.store.bundle', ['slug' => $bundle['slug']]) }}" class="img_link"><img
                                    src="{{ $bundle['image'] }}" /></a>

                            <a href="{{ route('site.store.bundle', ['slug' => $bundle['slug']]) }}">
                                {{ $bundle['name_' . locale()] }} </a>
                            <p>{{ $bundle['price'] }} {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</p>

                        </div>
                    </div>
                    <!--End Col-->
                @endforeach
            </div>
            <div class="row">

                @foreach ($products['data'] as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="40">
                        <div class="product_item">
                            <a href="{{ route('site.store.product', ['slug' => $product['slug']]) }}" class="img_link">
                                <img src="{{ $product['image_path'] }}" class="front" />
                                <img src="{{ $product['image_path'] }}" class="back" />
                            </a>
                            <a href="{{ route('site.store.product', ['slug' => $product['slug']]) }}">
                                {{ $product['name_' . locale()] }} </a>
                            <p>{{ $product['specifications']['data'][0]['price'] }}
                                {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}
                            </p>
                        </div>
                    </div>
                @endforeach
                @foreach ($accessories['data'] as $accessory)
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="40">
                        <div class="product_item">
                            <a href="{{ route('site.store.accessory', ['slug' => $accessory['slug']]) }}" class="img_link">
                                <img src="{{ $accessory['image_path'] }}" class="front" />
                                <img src="{{ $accessory['image_path'] }}" class="back" />
                            </a>
                            <a href="{{ route('site.store.accessory', ['slug' => $accessory['slug']]) }}">
                                {{ $accessory['name_' . locale()] }} </a>
                            <p>{{ $accessory['specifications']['data'][0]['price'] }}
                                {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}
                            </p>
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
