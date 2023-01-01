<!-- Footer
    ==========================================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h3>{{ locale() == 'en' ? 'Contact Info' : 'بيانات التواصل' }}</h3>
                <ul class="contact_info">
                    <li>
                        <i class="fa fa-map-marker-alt"></i>
                        <a href="javascript:;">
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
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <h3>{{ locale() == 'en' ? 'My Account' : 'الحساب' }}</h3>
                <ul class="quick_links">
                    <li>
                        <a href="{{ route('site.profile.index') }}">
                            {{ locale() == 'en' ? 'My Account' : 'الحساب الشخصي' }}</a>
                    </li>
                    <li>
                    	<a href="{{ route('site.profile.children') }}">{{ locale() == 'en' ? 'Children' : 'الأبناء' }}</a>
                    </li>
                    <li>
                    	<a href="{{ route('site.profile.settings') }}">{{ locale() == 'en' ? 'Settings' : 'الاعدادات' }}</a>
                    </li>
                    <li>
                    	<a href="{{ route('site.cart') }}">{{ locale() == 'en' ? 'Cart' : 'عربة الشراء' }}</a>
                    </li>
                    <li>
                    	<a href="{{ route('site.profile.orders') }}">
                            {{ locale() == 'en' ? 'Order History' : 'تاريخ العمليات' }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-12">
                <h3>{{ locale() == 'en' ? 'Parental Portal' : 'الاّباء' }}</h3>
                <ul class="quick_links">
                    <div class="row">
                        <div class="col-6">
                            <li>
                                <a class="{{ request()->routeIs('site.about') ? 'active' : '' }}"
                                    href="{{ route('site.about') }}"> {{ locale() == 'en' ? 'About us' : 'من نحن' }}</a>
                            </li>
                            <li>
                                <a href="{{ route('site.school') }}">
                                    {{ locale() == 'en' ? 'for Schools' : 'للمدراس' }}
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://zenitharabia.com/">{{ locale() == 'en' ? 'About' : 'عن' }}
                                    Zenith Arabia </a>
                            </li>
                            <li>
                                <a href="{{ route('site.contact') }}">
                                    {{ locale() == 'en' ? 'Contact Us' : 'تواصل معنا' }}</a>
                            </li>
                            
                        </div>
                        <div class="col-6">
                             <li>
                                <a href="{{ route('site.terms') }}">
                                    {{ locale() == 'en' ? 'Terms and conditions' : 'الشروط والاحكام' }} </a>
                            </li>
                            <li>
                                <a href="{{ route('site.privacy') }}">
                                    {{ locale() == 'en' ? 'Privacy Policy' : 'سياسة الخصوصية' }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('site.refund') }}">
                                    {{ locale() == 'en' ? 'Return & Refund Policy' : 'سياسة الإسترجاع والإسترداد' }} </a>
                            </li>
                            <li>
                                <a href="{{ route('site.shipping') }}">
                                    {{ locale() == 'en' ? 'Delivery & Shipping Policy' : 'سياسة التوصيل والشحن' }}
                                </a>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <h3>{{ locale() == 'en' ? 'Follow us' : 'تابعنا علي' }}</h3>
                <ul class="social">
                    @if ($settings['facebook'] != null)
                        <li>
                            <a href="{{ $settings['facebook'] }}" class="facebook_bc fab fa-facebook-f"
                                target="_blank"></a>
                        </li>
                    @endif
                    @if ($settings['twitter'] != null)
                        <li>
                            <a href="{{ $settings['twitter'] }}" class="twitter_bc fab fa-twitter" target="_blank"></a>
                        </li>
                    @endif
                    @if ($settings['linkedin'] != null)
                        <li>
                            <a href="{{ $settings['linkedin'] }}" class="linkedin_bc fab fa-linkedin-in"
                                target="_blank"></a>
                        </li>
                    @endif
                    @if ($settings['youtube'] != null)
                        <li>
                            <a href="{{ $settings['youtube'] }}" class="youtube_bc fab fa-youtube" target="_blank"></a>
                        </li>
                    @endif
                    @if ($settings['instagram'] != null)
                        <li>
                            <a href="{{ $settings['instagram'] }}" class="instagram_bc fab fa-instagram"
                                target="_blank"></a>
                        </li>
                    @endif
                </ul>
                <h3>{{ locale() == 'en' ? 'partners' : 'الشركاء' }}</h3>
                <ul class="payment">
                    <li><img src="{{ surl('images/payments/visa.png') }}" alt="" /></li>
                    <li><img src="{{ surl('images/payments/applepay.png') }}" alt="" /></li>
                    <li><img src="{{ surl('images/payments/mada.png') }}" alt="" /></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid copyrights">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>© {{ locale() == 'en' ? 'All Rights Reserved' : 'جميع الحقوق محفوظة' }} Zenith Arabia 2022.</p>

                    <div class="power">
                        {{ locale() == 'en' ? 'powered by' : 'تم بواسطة' }} :
                        <a href="https://brandbourne.com/" target="_blank">
                            <img src="https://brandbourne.com/assets/site/images/fav-icon.png" />
                            Brandbourne</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
