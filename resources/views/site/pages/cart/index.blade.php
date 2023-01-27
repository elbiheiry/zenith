@extends('site.layouts.master')
@push('title')
    {{ locale() == 'en' ? 'Cart' : 'سلة المشتريات' }}
@endpush
@section('content')
    <section class="page_head" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex center_content">
                    <h3>{{ locale() == 'en' ? 'Cart' : 'سلة المشتريات' }}</h3>
                    <ul>
                        <li><a href="{{ route('site.index') }}"> {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                        <li>{{ locale() == 'en' ? 'Cart' : 'سلة المشتريات' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="colored">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    @if ($items->count() > 0)
                        @foreach ($items as $item)
                            <div class="cart_item">
                                <button class="icon fa fa-times delete-cart-btn"
                                    data-url="{{ route('site.cart.delete', ['id' => $item->id]) }}"></button>
                                <img src="{{ $item['attributes']['image'] }}"
                                    alt="{{ $item['attributes']['name_' . locale()] }}" />
                                <form class="cart_item_details" id="update_cart_{{ $item->id }}" method="put"
                                    action="{{ route('site.cart.update') }}">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                    @if ($item->associatedModel == 'product')
                                        <a href="{{ route('site.store.product', ['slug' => $item['attributes']['slug']]) }}"
                                            class="title"> {{ $item['attributes']['name_' . locale()] }} (SKU :
                                            {{ $item['attributes']['sku'] }}) </a>

                                        <span class="price">{{ $item['price'] }}
                                            {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label> {{ locale() == 'en' ? 'Color' : 'اللون' }} </label>
                                                    <select class="form-control color-input" name="color_id"
                                                        data-id="update_cart_{{ $item->id }}">
                                                        <option value="{{ $item->spec->color_id }}">
                                                            {{ $item->spec->color->translate(locale())->name }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            @if ($item->spec->capacity)
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="form-group">
                                                        <label> {{ locale() == 'en' ? 'Capacity' : 'المساحة' }} </label>
                                                        <select class="form-control" name="capacity_id">
                                                            <option value="{{ $item->capacity_id }}">
                                                                {{ $item->spec->capacity->translate(locale())->name }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($item->spec->connectivity)
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="form-group">
                                                        <label> {{ locale() == 'en' ? 'Connectivity' : 'التوصيل' }}
                                                        </label>
                                                        <select class="form-control" name="connectivity">
                                                            <option value="{{ $item->spec->connectivity }}" selected>
                                                                {{ $item->spec->connectivity }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($item->spec->type)
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="form-group">
                                                        <label> {{ locale() == 'en' ? 'Type' : 'النوع' }}
                                                        </label>
                                                        <select class="form-control" name="type">
                                                            <option value="{{ $item->spec->type }}" selected>
                                                                {{ $item->spec->type }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label> {{ locale() == 'en' ? 'Quantity' : 'الكمية' }} </label>
                                                    <div class="cat-number">
                                                        <a href="#" class="number-down down"
                                                            data-id="update_cart_{{ $item->id }}">
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <input value="{{ $item->quantity }}" class="form-control"
                                                            type="number" name="quantity" />
                                                        <a href="#" class="number-up up"
                                                            data-id="update_cart_{{ $item->id }}">
                                                            <i class="fa fa-angle-up"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($item->associatedModel == 'accessory')
                                        <a href="{{ route('site.store.accessory', ['slug' => $item['attributes']['slug']]) }}"
                                            class="title"> {{ $item['attributes']['name_' . locale()] }} (SKU :
                                            {{ $item['attributes']['sku'] }}) </a>

                                        <span class="price">{{ $item['price'] }}
                                            {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span>
                                        <div class="row">
                                            @if ($item->spec->color_id != null)
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="form-group">
                                                        <label> {{ locale() == 'en' ? 'Color' : 'اللون' }} </label>
                                                        <select class="form-control color-input" name="color_id"
                                                            data-id="update_cart_{{ $item->id }}">
                                                            <option value="{{ $item->spec->color_id }}">
                                                                {{ $item->spec->color->translate(locale())->name }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($item->spec->locale)
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="form-group">
                                                        <label> {{ locale() == 'en' ? 'Locale' : 'االلغة' }} </label>
                                                        <select class="form-control color-input" name="locale"
                                                            data-id="update_cart_{{ $item->id }}">
                                                            <option value="{{ $item->locale }}">
                                                                {{ $item->spec->locale }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label> {{ locale() == 'en' ? 'Quantity' : 'الكمية' }} </label>
                                                    <div class="cat-number">
                                                        <a href="#" class="number-down down"
                                                            data-id="update_cart_{{ $item->id }}">
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <input value="{{ $item->quantity }}" class="form-control"
                                                            type="number" name="quantity" />
                                                        <a href="#" class="number-up up"
                                                            data-id="update_cart_{{ $item->id }}">
                                                            <i class="fa fa-angle-up"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <a href="{{ route('site.store.bundle', ['slug' => $item['attributes']['slug']]) }}"
                                            class="title"> {{ $item['attributes']['name_' . locale()] }} </a>

                                        <span class="price">{{ $item['price'] }}
                                            {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label> {{ locale() == 'en' ? 'Quantity' : 'الكمية' }} </label>
                                                    <div class="cat-number">
                                                        <a href="#" class="number-down down"
                                                            data-id="update_cart_{{ $item->id }}">
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <input value="{{ $item->quantity }}" class="form-control"
                                                            type="number" name="quantity" />
                                                        <a href="#" class="number-up up"
                                                            data-id="update_cart_{{ $item->id }}">
                                                            <i class="fa fa-angle-up"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <button class="d-none update_cart_{{ $item->id }}" type="submit"></button>
                                </form>
                            </div>
                        @endforeach
                    @else
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="alert alert-danger text-center">
                                {{ locale() == 'en' ? 'No products added to cart yet' : 'لاتوجد منتجات في سلة الشراء حتي الاّن' }}
                            </div>
                        </div>
                    @endif

                </div>
                <div class="col-lg-3">
                    <div class="block-item">
                        <div class="form-title">{{ locale() == 'en' ? 'Bill Info' : 'بيانات الدفع' }}</div>
                        <div class="cart_total">
                            <h3 class="total">
                                {{ locale() == 'en' ? 'Total' : 'الإجمالي' }}
                                <span id="total-price"> {{ number_format(\Cart::getTotal(), 2) }}
                                    {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span>
                            </h3>
                            @if ($items->count() > 0)
                                <a href="{{ route('site.checkout.index') }}" class="link">
                                    <span>{{ locale() == 'en' ? 'Checkout' : 'الي الدفع' }} <i
                                            class="fa fa-long-arrow-alt-right"></i></span></a>
                            @endif

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
        $(document).ready(function() {
            $('.down, .up').click(function() {
                var id = $(this).data('id');
                $('.' + id).trigger('click');
            });

            $('.color-input').change(function() {
                var id = $(this).data('id');
                $('.' + id).trigger('click');
            })
        });

        $('.delete-cart-btn').on('click', function() {
            window.location.href = $(this).data('url');
        });

        $('.cart_item_details').on('submit', function() {
            var url = $(this).attr('action');
            $.ajax({
                url: url,
                method: 'put',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {

                    notification("success", response.message, "fas fa-check");
                    $('#cart-area').html(response.html);
                    $('#total-price').html(response.total +
                        "{{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}");
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
