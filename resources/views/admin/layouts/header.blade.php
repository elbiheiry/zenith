<!-- Header
        ====================================-->
<header>
    <button class="toggle-btn icon-btn">
        <i class="fa fa-bars"></i>
    </button>

    <ul class="top-header-links">
        <!--End li-->
        <li>
            <button type="button" class="dropdown-toggle open_fullscreen">
                <i class="fa fa-expand"></i>
            </button>
            <button type="button" class="dropdown-toggle exist_fullscreen">
                <i class="fa fa-compress"></i>
            </button>
        </li>
        <!--End li-->
        <li>
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" data-display="static"
                aria-haspopup="true" aria-expanded="false">
                <img src="{{ aurl('images/fav-icon.png') }}" />
                <span>{{ auth()->user()->name }}</span>
            </button>
            <div class="dropdown-menu">
                <div class="menu-heading">
                    <img src="{{ aurl('images/fav-icon.png') }}" />
                    <h3>{{ auth()->user()->name }}</h3>
                    <p><span></span>online</p>
                </div>
                <ul>
                    <li>
                        <a href="{{ route('admin.profile.index') }}">
                            <i class="fa fa-user"></i>
                            profile
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" onclick="$('#logout-form').submit()">
                            <i class="fa fa-power-off"></i>
                            logout
                        </a>
                    </li>
                </ul>
            </div>
            <!--End Dropdown Menu-->
        </li>
        <!--End li-->
    </ul>
</header>
<!--End Header -->
<form id="logout-form" action="{{ route('admin.logout') }}" method="post">
    @csrf
</form>
