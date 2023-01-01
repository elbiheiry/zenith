@if (auth()->guard('site')->check())
    <!-- Cart Button
    ==========================================-->
    <div class="cart_btn" id="three">
        <button>
            <i class="fa fa-shopping-cart"></i>
            <span> {{ \Cart::getContent()->count() }} </span>
        </button>
    </div>
    <!-- Cart Box
    ==========================================-->
    <div class="cart_box">
        <div class="title">
            <i class="fa fa-shopping-cart"></i>
            {{ locale() == 'en' ? 'shopping cart' : 'عربة التسوق' }}
            <button type="button" class="icon fa fa-times"></button>
        </div>
        @php
            $items = \Cart::getContent();
        @endphp
        <div class="cart_content">
            @foreach ($items as $item)
                @if ($item->associatedModel == 'product')
                    <div class="prod_list">
                        <a href="{{ route('site.store.product', ['slug' => $item['attributes']['slug']]) }}"><img
                                src="{{ $item['attributes']['image'] }}" /></a>
                        <div class="prod_list-info">
                            <a href="{{ route('site.store.product', ['slug' => $item['attributes']['slug']]) }}">
                                {{ $item['attributes']['name_' . locale()] }} </a>
                            <span>{{ $item->price }} {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span><span
                                class="num">
                                X {{ $item->quantity }}</span>
                            <button class="fa fa-times delete-cart-btn"
                                data-url="{{ route('site.cart.delete', ['id' => $item->id]) }}"></button>
                        </div>
                        <!--End prod_list-info-->
                    </div>
                @elseif ($item->associatedModel == 'accessory')
                    <div class="prod_list">
                        <a href="{{ route('site.store.accessory', ['slug' => $item['attributes']['slug']]) }}"><img
                                src="{{ $item['attributes']['image'] }}" /></a>
                        <div class="prod_list-info">
                            <a href="{{ route('site.store.accessory', ['slug' => $item['attributes']['slug']]) }}">
                                {{ $item['attributes']['name_' . locale()] }} </a>
                            <span>{{ $item->price }} {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span><span
                                class="num">
                                X {{ $item->quantity }}</span>
                            <button class="fa fa-times delete-cart-btn"
                                data-url="{{ route('site.cart.delete', ['id' => $item->id]) }}"></button>
                        </div>
                        <!--End prod_list-info-->
                    </div>
                @else
                    <div class="prod_list">
                        <a href="{{ route('site.store.bundle', ['slug' => $item['attributes']['slug']]) }}"><img
                                src="{{ $item['attributes']['image'] }}" /></a>
                        <div class="prod_list-info">
                            <a href="{{ route('site.store.bundle', ['slug' => $item['attributes']['slug']]) }}">
                                {{ $item['attributes']['name_' . locale()] }} </a>
                            <span>{{ $item->price }} {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}</span><span
                                class="num">
                                X {{ $item->quantity }}</span>
                            <button class="fa fa-times delete-cart-btn"
                                data-url="{{ route('site.cart.delete', ['id' => $item->id]) }}"></button>
                        </div>
                        <!--End prod_list-info-->
                    </div>
                @endif
            @endforeach
        </div>
        <div class="cart-content-footer">
            <div class="total">
                {{ locale() == 'en' ? 'Total' : 'الإجمالي' }} <br />
                {{ \Cart::getTotal() }} {{ locale() == 'en' ? 'SAR' : 'ريال سعودي' }}
            </div>
            <a href="{{ route('site.cart') }}" class="link">
                <span>
                    <i class="fa fa-shopping-cart"></i>
                    {{ locale() == 'en' ? 'Cart' : 'عربة التسوق' }}
                </span>
            </a>
            @if ($items->count() > 0)
                <a href="{{ route('site.checkout.index') }}" class="link">
                    <span> <i class="fa fa-check"></i> {{ locale() == 'en' ? 'checkout' : 'الدفع' }} </span>
                </a>
            @endif

        </div>
    </div>
    @push('js')
        <script>
            $(document).on('click', '.delete-cart-btn', function() {
                window.location.href = $(this).data('url');
            });
        </script>
    @endpush

@endif
