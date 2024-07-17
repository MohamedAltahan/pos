        <!-- [ navigation menu ] start -->
        <nav class="pcoded-navbar menu-light brand-blue active-blue">
            <div class="navbar-wrapper">
                <div class="navbar-brand header-logo">
                    <a href="index.html" class="b-brand">
                        <div class="b-bg">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <span class="b-title">Dasho</span>
                        <img src="assets/images/logo.svg" alt="" class="logo images">
                        <img src="assets/images/logo-icon.svg" alt="" class="logo-thumb images">
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
                </div>
                <div class="navbar-content scroll-div">
                    <ul class="nav pcoded-inner-navbar">

                        {{-- <li class="nav-item pcoded-menu-caption">
                            <label>Navigation</label>
                        </li> --}}

                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                            class="nav-item active">
                            <a href="{{ route('home') }}" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-home"></i></span><span
                                    class="pcoded-mtext">{{ __('Home') }}</span></a>
                        </li>

                        <li data-username="Menu levels Menu level 2.1 Menu level 2.2" class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-menu"></i></span><span
                                    class="pcoded-mtext">{{ __('Setting') }}</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="{{ route('settings.business') }}"
                                        class="">{{ __('Business') }}</a></li>
                                <li class=""><a href="{{ route('settings.invoice') }}"
                                        class="">{{ __('Invoice') }}</a></li>
                                {{-- <li class="pcoded-hasmenu">
                                    <a href="#!" class="">Menu level 2.2</a>
                                    <ul class="pcoded-submenu">
                                        <li class=""><a href="" class="">Menu level 3.1</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </li>


                        {{-- <li data-username="Menu levels Menu level 2.1 Menu level 2.2" class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                        class="feather icon-menu"></i></span><span
                                    class="pcoded-mtext">{{ __('Setting') }}</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="" class="">{{ __('bussiness') }}</a></li>
                            </ul>
                        </li> --}}

                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ navigation menu ] end -->
