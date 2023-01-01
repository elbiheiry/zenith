<div class="col-lg-3">
    <div class="profile_card p-15 mb-0">
        {{-- <img src="{{ $user->image }}" class="profile_img" /> --}}
        <h3 class="mb-0">{{ $user->parent }}</h3>
    </div>
    <ul class="profile_links">
        <li>
            <a href="{{ route('site.profile.index') }}"
                class="{{ request()->routeIs('site.profile.index') || request()->routeIs('site.profile.edit') ? 'active' : '' }}"><i
                    class="far fa-user"></i>
                {{ locale() == 'en' ? 'My Account' : 'الملف الشخصي' }}
            </a>
        </li>
        <li>
            <a href="{{ route('site.profile.children') }}"
                class="{{ request()->routeIs('site.profile.children') ? 'active' : '' }}"><i class="fa fa-users"></i>
                {{ locale() == 'en' ? 'Children' : 'الأبناء' }}
            </a>
        </li>
        <li>
            <a href="{{ route('site.profile.orders') }}"
                class="{{ request()->routeIs('site.profile.orders') || request()->routeIs('site.profile.orders.show') ? 'active' : '' }}"><i
                    class="fa fa-th"></i>
                {{ locale() == 'en' ? 'Order history' : 'الطلبات' }}
            </a>
        </li>
        <li>
            <a href="{{ route('site.profile.settings') }}"
                class="{{ request()->routeIs('site.profile.settings') ? 'active' : '' }}">
                <i class="fa fa-cog"></i> {{ locale() == 'en' ? 'Settings' : 'الإعدادات' }}
            </a>
        </li>
    </ul>
    <button class="link w-100 logout_btn" onclick="$('#logout-form').submit()">
        <i class="fa fa-sign-out"></i>
        <span> {{ locale() == 'en' ? 'Logout' : 'تسجيل الخروج' }} </span>
    </button>
</div>
