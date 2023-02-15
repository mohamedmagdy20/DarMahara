<!-- main-footer -->
<footer class="footer-style-two">
    <div class="footer-top-two">
        <div class="anim-icon">
            <div
                class="icon icon-1 rotate-me"
                style="background-image: url({{asset('assets/images/icons/anim-icon-1.png')}})"
            ></div>
            <div
                class="icon icon-2 rotate-me"
                style="background-image: url({{asset('assets/images/icons/anim-icon-2.png')}})"
            ></div>
            <div
                class="icon icon-3 rotate-me"
                style="background-image: url({{asset('assets/images/icons/anim-icon-3.png')}})"
            ></div>
            <div
                class="icon icon-4 rotate-me"
                style="background-image: url({{asset('assets/images/icons/anim-icon-4.png')}})"
            ></div>
            <div class="icon icon-5"></div>
            <div class="icon icon-6"></div>
            <div
                class="icon icon-7 rotate-me"
                style="background-image: url({{asset('assets/images/icons/anim-icon-1.png')}})"
            ></div>
            <div class="icon icon-8"></div>
            <div
                class="icon icon-9 rotate-me"
                style="background-image: url({{asset('assets/images/icons/anim-icon-3.png')}})"
            ></div>
            <div
                class="icon icon-10 rotate-me"
                style="background-image: url({{asset('assets/images/icons/anim-icon-1.png')}})"
            ></div>
            <div
                class="icon icon-11 rotate-me"
                style="background-image: url({{asset('assets/images/icons/anim-icon-4.png')}})"
            ></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 pl-5 footer-column">
                    <div class="footer-widget logo-widget">
                        <div class="widget-title">
                            <h4 class="fw-bold">عن الشركة</h4>
                        </div>
                        <div class="widget-content">
                            <div class="text">
                                <p class="fs-md">
                                    نحن نقدم جميع أنواع خدمات نقل الأثاث في جميع أنحاء قطر
                                    مثل الدوحة ولوسيل.
                                </p>
                            </div>
                            <figure class="footer-logo">
                                <a href="{{url('/')}}"
                                ><img
                                        src="{{asset('assets/images/logo.webp')}}"
                                        alt="Dar Elmaharah"
                                        width="150"
                                    /></a>
                            </figure>
                            <div class="copyright">
                                <p class="fs-md">&copy; جميع الحقوق محفوظة 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h4 class="fw-bold">روابط الموقع</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a class="fs-lg" href="{{url('/')}}">الرئيسية</a></li>
                                <li><a class="fs-lg" href="{{url('/services')}}">الخدمات</a></li>
                                <li>
                                    <a class="fs-lg" href="{{url('/services/مكافحة-الحشرات')}}">مكافحة الحشرات</a>
                                </li>
                                <li>
                                    <a class="fs-lg" href="{{url('/services/تنظيف-الفيلات-الجديدة')}}">تنظيف الفلل</a>
                                </li>
                                <li>
                                    <a class="fs-lg" href="{{url('/services/غسيل-السجاد')}}"
                                    >تنظيف السجاد و الاثاث</a
                                    >
                                </li>
                                <li>
                                    <a class="fs-lg" href="{{url('/services/جلى-الرخام')}}"
                                    >جلى الرخام و الجرانيت</a
                                    >
                                </li>
                                <li><a class="fs-lg" href="{{url('/') . '#blogSection'}}">المدونة</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h4 class="fw-bold">صفحات عامة</h4>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <h6><a href="{{ url('/') . '#featureSection' }}">عن الشركة</a></h6>
                                <h5>
                                    <a href="{{ url('/') . '#contactSection' }}">اتصل بنـا</a>
                                </h5>
                            </div>
                            <div class="post">
                                <h6><a href="{{url('/')}}">الأسئلة الشائعة</a></h6>
                                <h5>
                                    <a href="{{url('/')}}">الشروط و الأحكام</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- main-footer end -->
