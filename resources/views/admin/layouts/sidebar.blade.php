<!-- Side Menu
        ==========================================-->
<aside class="side-menu">
    <button class="toggle-btn">
        <i class="fa fa-times"></i>
    </button>
    <a href="{{ route('admin.dashboard') }}" class="logo">
        <img src="{{ aurl('images/logo.png') }}" />
    </a>
    <ul>
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                - Dashboard
            </a>
        </li>
        <li class="{{ request()->routeIs('admin.settings.index') ? 'active' : '' }}">
            <a href="{{ route('admin.settings.index') }}">
                - Site settings
            </a>
        </li>
        <li
            class="sub-menu {{ request()->routeIs('admin.home.index') || request()->routeIs('admin.sliders.index') ? 'active' : '' }}">
            <a rel="noreferrer" href="javascript:void(0);">
                - Home page
                <i class="fa fa-angle-down"></i>
            </a>
            <ul>
                <li class="{{ request()->routeIs('admin.sliders.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.sliders.index') }}">
                        Slideshow
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.home.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.home.index') }}">
                        Content
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ request()->routeIs('admin.about.index') ? 'active' : '' }}">
            <a href="{{ route('admin.about.index') }}">
                - About us
            </a>
        </li>
        <li
            class="sub-menu {{ request()->routeIs('admin.accessories.specifications.index') || request()->routeIs('admin.accessories.images.index') || request()->routeIs('admin.accessories.index') || request()->routeIs('admin.accessories.create') || request()->routeIs('admin.accessories.edit') || request()->routeIs('admin.products.specifications.index') || request()->routeIs('admin.colors.index') || request()->routeIs('admin.capacities.index') || request()->routeIs('admin.products.images.index') || request()->routeIs('admin.products.index') || request()->routeIs('admin.products.create') || request()->routeIs('admin.products.edit') ? 'active' : '' }}">
            <a rel="noreferrer" href="javascript:void(0);">
                - Store
                <i class="fa fa-angle-down"></i>
            </a>
            <ul>
                <li
                    class="{{ request()->routeIs('admin.products.specifications.index') || request()->routeIs('admin.products.images.index') || request()->routeIs('admin.products.index') || request()->routeIs('admin.products.create') || request()->routeIs('admin.products.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.products.index') }}">
                        - Products
                    </a>
                </li>
                <li
                    class="{{ request()->routeIs('admin.accessories.specifications.index') || request()->routeIs('admin.accessories.images.index') || request()->routeIs('admin.accessories.index') || request()->routeIs('admin.accessories.create') || request()->routeIs('admin.accessories.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.accessories.index') }}">
                        - Accessories
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.capacities.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.capacities.index') }}">
                        - Capacities
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.colors.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.colors.index') }}">
                        - Colors
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('admin.bundles.accessories.index') || request()->routeIs('admin.bundles.index') || request()->routeIs('admin.bundles.create') || request()->routeIs('admin.bundles.edit') ? 'active' : '' }}">
            <a href="{{ route('admin.bundles.index') }}">
                - Bundles
            </a>
        </li>
        <li
            class="{{ request()->routeIs('admin.orders.index') || request()->routeIs('admin.orders.show') ? 'active' : '' }}">
            <a href="{{ route('admin.orders.index') }}">
                - Orders
            </a>
        </li>
        <li
            class="sub-menu {{ request()->routeIs('admin.requests.index') || request()->routeIs('admin.requests.show') || request()->routeIs('admin.schools.index') || request()->routeIs('admin.schools.create') || request()->routeIs('admin.schools.edit') ? 'active' : '' }}">
            <a rel="noreferrer" href="javascript:void(0);">
                - Schools
                <i class="fa fa-angle-down"></i>
            </a>
            <ul>

                <li
                    class="{{ request()->routeIs('admin.schools.index') || request()->routeIs('admin.schools.create') || request()->routeIs('admin.schools.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.schools.index') }}">
                        Schools Partners
                    </a>
                </li>
                <li
                    class="{{ request()->routeIs('admin.requests.index') || request()->routeIs('admin.requests.show') ? 'active' : '' }}">
                    <a href="{{ route('admin.requests.index') }}">
                        Schools Requests
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('admin.users.index') || request()->routeIs('admin.users.show') ? 'active' : '' }}">
            <a href="{{ route('admin.users.index') }}">
                - Users
            </a>
        </li>
        {{-- <li class="{{ request()->routeIs('admin.parental.index') ? 'active' : '' }}">
            <a href="{{ route('admin.parental.index') }}">
                - Parental program
            </a>
        </li> --}}
        <li
            class="sub-menu {{ request()->routeIs('admin.parental.index') || (request()->routeIs('admin.offers.index') && request()->type == 'parental') ? 'active' : '' }}">
            <a rel="noreferrer" href="javascript:void(0);">
                - Parental program
                <i class="fa fa-angle-down"></i>
            </a>
            <ul>
                <li class="{{ request()->routeIs('admin.parental.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.parental.index') }}">
                        Content
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.offers.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.offers.index', ['type' => 'parental']) }}">
                        Program offering
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="sub-menu {{ request()->routeIs('admin.program.index') || (request()->routeIs('admin.offers.index') && request()->type == 'school') ? 'active' : '' }}">
            <a rel="noreferrer" href="javascript:void(0);">
                - For schools
                <i class="fa fa-angle-down"></i>
            </a>
            <ul>
                <li class="{{ request()->routeIs('admin.program.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.program.index') }}">
                        Content
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.offers.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.offers.index', ['type' => 'school']) }}">
                        Program offering
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="sub-menu {{ request()->routeIs('admin.content.index') || request()->routeIs('admin.work.index') || (request()->routeIs('admin.offers.index') && request()->type == 'parents') ? 'active' : '' }}">
            <a rel="noreferrer" href="javascript:void(0);">
                - For parents
                <i class="fa fa-angle-down"></i>
            </a>
            <ul>
                <li class="{{ request()->routeIs('admin.content.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.content.index') }}">
                        Content
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.offers.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.offers.index', ['type' => 'parents']) }}">
                        Benefits
                    </a>
                </li>

                <li class="{{ request()->routeIs('admin.work.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.work.index') }}">
                        How it works
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="{{ request()->routeIs('admin.messages.index') || request()->routeIs('admin.messages.show') ? 'active' : '' }}">
            <a href="{{ route('admin.messages.index') }}">
                - Messages
            </a>
        </li>
        {{-- <li class="{{ request()->routeIs('admin.links.index') ? 'active' : '' }}">
            <a href="{{ route('admin.links.index') }}">
                - Social links
            </a>
        </li> --}}
        <li
            class="sub-menu {{ request()->routeIs('admin.privacy.index') || request()->routeIs('admin.terms.index') || request()->routeIs('admin.refund.index') || request()->routeIs('admin.shipping.index') ? 'active' : '' }}">
            <a rel="noreferrer" href="javascript:void(0);">
                - Info Pages
                <i class="fa fa-angle-down"></i>
            </a>
            <ul>
                <li class="{{ request()->routeIs('admin.privacy.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.privacy.index') }}">
                        - Privacy policy
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.terms.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.terms.index') }}">
                        - Terms and conditions
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.refund.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.refund.index') }}">
                        - return & refund policy
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.shipping.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.shipping.index') }}">
                        - delivery & shipping policy
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--End Ul-->
</aside>
<!--End Aside-->
