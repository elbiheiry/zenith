<header>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex center_content">
                <a href="{{ route('site.index') }}" class="navbar-brand">
                    <img src="{{ surl('images/logo.png') }}" />
                </a>
                <div class="btns">
                    @if (auth()->guard('site')->check())
                        <div class="dropdown profile_link" id="two">
                            <button class="link dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-user"></i>
                                <span>{{ locale() == 'en' ? 'Profile' : 'الملف الشخصي' }}</span>
                            </button>
                            <div class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton">
                                <a href="{{ route('site.profile.index') }}"
                                    class="{{ request()->routeIs('site.profile.index') ? 'active' : '' }}"><i
                                        class="far fa-user"></i>
                                    {{ locale() == 'en' ? 'My Account' : 'الملف الشخصي' }}
                                </a>
                                <a href="{{ route('site.profile.children') }}"
                                    class="{{ request()->routeIs('site.profile.children') ? 'active' : '' }}"><i
                                        class="fa fa-users"></i>
                                    {{ locale() == 'en' ? 'Children' : 'الأبناء' }}
                                </a>
                                <a href="{{ route('site.profile.orders') }}"
                                    class="{{ request()->routeIs('site.profile.orders') ? 'active' : '' }}"><i
                                        class="fa fa-th"></i>
                                    {{ locale() == 'en' ? 'Order history' : 'الطلبات' }}
                                </a>
                                <a href="{{ route('site.profile.settings') }}"
                                    class="{{ request()->routeIs('site.profile.settings') ? 'active' : '' }}">
                                    <i class="fa fa-cog"></i> {{ locale() == 'en' ? 'Settings' : 'الإعدادات' }}
                                </a>
                                <a href="javascript:; logout_btn" onclick="$('#logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                    {{ locale() == 'en' ? 'Logout' : 'تسجيل الخروج' }}
                                </a>
                            </div>
                        </div>
                        <button class="icon fa fa-shopping-cart cart_head" type="button">
                            <span id="cart-counter"> {{ \Cart::getContent()->count() }} </span>
                        </button>
                    @else
                        <a href="{{ route('site.login') }}" class="link login_btn">
                            <i class="far fa-user"></i>
                            <span> {{ locale() == 'en' ? 'Store Sign in' : 'تسجيل دخول' }}</span>
                        </a>
                    @endif
                    <!--<button class="icon fa fa-search search_btn" type="button"></button>-->
                    @if (locale() == 'en')
                        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="flag">
                            ع
                        </a>
                    @else
                        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="flag">
                            EN
                        </a>
                    @endif

                    <button class="menu-btn icon fa fa-bars" type="button" data-toggle="collapse"
                        data-target="#main-nav"></button>
                </div>
            </div>
            <!--End Col-12-->
        </div>
    </div>
    <!--End Container-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav">
                    <li><a href="{{ route('site.index') }}"
                            class="{{ request()->routeIs('site.index') ? 'active' : '' }}">
                            {{ locale() == 'en' ? 'Home' : 'الرئيسية' }} </a></li>
                    <li>
                        <a class="{{ request()->routeIs('site.parent') ? 'active' : '' }}"
                            href="{{ route('site.parent') }}">
                            {{ locale() == 'en' ? 'Parental program' : 'برنامج الاّباء' }} </a>
                    </li>
                    @if (auth()->guard('site')->check())
                        @if (count($allSchools) > 1)
                            <li id="one" class="dropdown">
                                <a class="{{ request()->routeIs('site.store') ? 'active' : '' }}" href="#"
                                    data-toggle="dropdown">
                                    {{ locale() == 'en' ? 'store' : 'المتجر' }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @foreach ($allSchools as $item)
                                        <a href="{{ route('site.store', ['slug' => $item->slug]) }}"
                                            class="dropdown-item">
                                            {{ $item->translate(locale())->name }} </a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li>
                                <a class="{{ request()->routeIs('site.store') ? 'active' : '' }}"
                                    href="{{ route('site.store', ['slug' => $allSchools['0']->slug]) }}">
                                    {{ locale() == 'en' ? 'store' : 'المتجر' }} </a>
                            </li>
                        @endif

                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!--End Nav-->
</header>

@if (auth()->guard('site')->check())
    <form id="logout-form" action="{{ route('site.logout') }}" method="post">
        @csrf
    </form>
@endif
