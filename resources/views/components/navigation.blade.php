<nav class="mainmenu-nav" id="mobilemenu-popup">
    <div class="d-block d-lg-none">
        <div class="mobile-nav-header">
            <div class="mobile-nav-logo">
                <a href="index-1.html">
                    <img class="light-mode" src="assets/media/logo-2.svg" alt="Site Logo">
                    <img class="dark-mode" src="assets/media/logo-3.svg" alt="Site Logo">
                </a>
            </div>
            <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <ul class="mainmenu">
        <li><a href="{{ route('index',['lang' => app()->getLocale()]) }}">{{ __('menu.home')}}</a></li>
        <li><a href="{{ route('about',['lang' => app()->getLocale()]) }}">{{ __('menu.about')}}</a></li>
        <li class="menu-item-has-children">
            <a href="javascript:void(0);">{{ __('menu.service')}}</a>
            <ul class="axil-submenu">
                <li><a href="index-1.html">برنامه نویسی وب</a></li>
                <li><a href="index-2.html">برنامه نویسی موبایل</a></li>
                <li><a href="index-3.html">همه</a></li>
            </ul>
        </li>

        <li class="menu-item-has-children">
            <a href="javascript:void(0);">{{ __('menu.tech')}}</a>
            <ul class="axil-submenu">
                <li><a href="#">استک PHP/Laravel</a></li>
                <li><a href="#">استک موبایل Flutter</a></li>
                <li><a href="#">همه</a></li>
            </ul>
        </li>
        <li><a href="#">{{ __('menu.blog')}}</a></li>
        <li><a href="{{ route('process',['lang' => app()->getLocale()]) }}">{{ __('menu.process')}}</a></li>
        <li><a href="{{ route('brief',['lang' => app()->getLocale()]) }}">{{ __('menu.brief')}}</a></li>

    </ul>
</nav>