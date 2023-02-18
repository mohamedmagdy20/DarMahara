<!-- main header -->
<header class="main-header style-two">
    <div class="logo-box">
        <figure class="logo">
            <a href="{{ url('/') }}"
            ><img src="{{asset('assets/images/logo.webp')}}" alt="Dar Elmaharah"
                /></a>
        </figure>
    </div>
    <div class="social-links hidden-content">
        <ul class="social-list clearfix">
            <li>

                <a href="#"
                ><img
                        width="30"
                        src="{{ asset('assets/images/icons/facebook.svg') }}"
                        alt="Facebook"/></a
                >
            </li>
            <li>
                <a href="https://wa.me/0097470338000" target="_blank"
                ><img
                        width="30"
                        src="{{asset('assets/images/icons/whatsapp.svg')}}"
                        alt="Whatsapp"/></a
                >
            </li>
            <li>
                <a href="index-2.html"
                ><img
                        width="30"
                        src="{{ asset('assets/images/icons/instagram.svg') }}"
                        alt="Instagram"/></a
                >
            </li>
        </ul>
    </div>
    <!-- header-top -->
    <div class="header-top">
        <div class="page-header-mobile-info">
            <div class="page-header-mobile-info-content">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info">
                            <li>
                                <img
                                    width="35"
                                    src="{{ asset('assets/images/icons/phone.svg') }}"
                                    alt="Dar Elmaharah"
                                />
                                <a href="tel:0097470338000">0097470338000</a>
                            </li>
                            <li>
                                <img
                                    width="35"
                                    src="{{asset('assets/images/icons/email.svg')}}"
                                    alt="Dar Elmaharah"
                                />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="toggle-box clearfix">
                <div class="page-header-mobile-info-toggle"></div>
                <div class="social-links">
                    <ul class="social-list clearfix">
                        @foreach ($icons as $s )
                        <li>
                            <a href="{{$s->link}}"
                               target="_blank"
                            ><img
                                    width="30"
                                    src="{{asset('assets/images/icons/'.$s->image)}}"
                                    alt="{{$s->image_alt}}"
                                /></a>
                        </li>
                    
                        @endforeach
                      
                    </ul>
                </div>
            </div>
        </div>
        <div class="top-inner hidden-content clearfix">
            <div class="right-column pull-left">
                <ul class="info">
                    <li>
                        <p class="mb-0 fs-md fw-bold text-main">
                            {!!$discount->body !!}
                        </p>
                    </li>
                </ul>
            </div>
            <div class="left-column pull-right">
                <ul class="info">
                    <li>
                        <img
                            class="ml-1"
                            width="25"
                            src="{{asset('assets/images/icons/phone.svg')}}"
                            alt="Dar Elmaharah"
                        />
                        <a class="fs-lg fw-bolder" href="tel:4412345678"
                        >0097470338000</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-box clearfix">
            <div class="menu-area pull-left clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div
                        class="collapse navbar-collapse show clearfix"
                        id="navbarSupportedContent"
                    >
                        <ul class="navigation clearfix">
                            <li class="current">
                                <a href="{{ url('/') }}">الرئيسية</a>
                            </li>
                            <li class="">
                                <a href="{{ url('/services') }}">الخدمات</a>
                            </li>
                            <li class="">
                                <a href="{{ url('/') . '#blogSection' }}">المدونة</a>
                            </li>
                            <li class="">
                                <a href="{{ url('/') . '#featureSection' }}">عن الشركة</a>
                            </li>
                            <li class="">
                                <a href="{{ url('/') . '#contactSection' }}">إتصل بنا</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-right-content pull-right clearfix">
                <div class="btn-box">
                    <a href="tel:0097470338000" class="theme-btn-three thm-btn blue-color"
                    >إتصل بنــا</a
                    >
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="menu-area pull-left">
                    <nav class="main-menu clearfix">
                        <!--come through Javascript-->
                    </nav>
                </div>
                <div class="menu-right-content pull-right clearfix">
                    <div class="btn-box">
                        <a href="tel:0097470338000" class="theme-btn-three thm-btn">
                            إتصل بنــا
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo py-4">
            <a
                class="bg-white rounded-pill d-block text-center mx-auto p-2"
                style="max-width: 230px"
                href="{{url('/')}}"
            ><img
                    class="mx-auto"
                    src="assets/images/logo.webp"
                    alt="Dar Elmaharah"
                    width="115"
                /></a>
        </div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li>
                    <a href="https://instagram.com/daralmhara?igshid=ZDdkNTZiNTM=" target="_blank"
                    ><span class="fab fa-facebook-square"></span
                        ></a>
                </li>
                <li>
                    <a href="https://instagram.com/daralmhara?igshid=ZDdkNTZiNTM=" target="_blank"
                    ><span class="fab fa-pinterest-p"></span
                        ></a>
                </li>
                <li>
                    <a href="https://instagram.com/daralmhara?igshid=ZDdkNTZiNTM=" target="_blank"><span class="fab fa-instagram"></span></a>
                </li>
                <li>
                    <a href="https://youtube.com/@cleaning" target="_blank"><span class="fab fa-youtube"></span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->
