<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    @yield('title_and_meta')
    <!-- Fav Icon -->
    <link rel="icon" href="{{asset('assets/images/icon.png')}}" type="image/x-icon" />
    <!-- Stylesheets -->
    <link href="{{asset('assets/css/font-awesome-all.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/color.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/rtl.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
    
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-236612671-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-236612671-1');
    </script>
    
    <script>
    ;(function() {
        var script = document.createElement('script');
        script.id = '395a2788-66da-4673-88c2-280d7292f68e';
        script.type = 'module';
        script.src = 'https://pageimprove.io';
        document.head.appendChild(script);
    })()
</script>
</head>

<!-- page wrapper -->
<body>
<div class="fixed-links">
    <a href="tel:0097470338000" target="_blank">
        <i class="flaticon-phone-call"></i>
    </a>
    <a class="whatsapp" href="https://wa.me/0097470338000" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
<div class="boxed_wrapper blue-color rtl">

    @include('layout.header',['icons'=>$icons,'discount'=>$discount])

    @yield('page_content')

    @include('layout.footer',['about'=>$about])

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="flaticon-up-arrow"></span>
    </button>
</div>

<!-- jequery plugins -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/validation.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
<script src="{{asset('assets/js/scrollbar.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/bxslider.js')}}"></script>



<!-- main-js -->
<script src="{{asset('assets/js/script.js')}}"></script>
</body>
<!-- End of .page_wrapper -->
</html>
