@extends('master')

@section('title_and_meta')
    <title>دار المهارة لأعمال التنظيف | خدمات دار المهارة</title>
    <meta name="description" content="دار المهارة هي شركة مختصة بالتنظيفات العامة ومكافحة الحشرات في قطر"/>
    <meta name="keywords" content="التنظيفات,مكافحة الحشرات,تنظيف الفيلات الجديدة,مكافحة النمل الأبيض,جلى الرخام,غسيل الكنب,غسيل السجاد,غسيل خزان المياه,دار المهارة,دار المهاره,أعمال التنظيف,تنظيف,المهارة"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="دار المهارة لأعمال التنظيف | خدمات دار المهارة"/>
    <meta property="og:description"
          content="دار المهارة هي شركة مختصة بالتنظيفات العامة ومكافحة الحشرات في قطر"/>
    <meta property="og:url" content="{{URL('/')}}"/>
    <meta property="og:site_name" content="دار المهارة لأعمال التنظيف"/>
    <meta property="og:image" content="{{asset('assets/images/logo.webp')}}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description"
          content="دار المهارة هي شركة مختصة بالتنظيفات العامة ومكافحة الحشرات في قطر"/>
    <meta name="twitter:title" content="دار المهارة لأعمال التنظيف"/>
    <meta name="twitter:image" content="{{asset('assets/images/logo.webp')}}"/>
@endsection

@section('page_content')
    <!-- Page Title -->
    <section
        class="page-title style-two centred"
        style="
          background-image: url({{ asset('assets/images/cleaning-services.webp') }});
          background-repeat: no-repeat;
          background-size: cover;
        "
    >
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>خدمات دار المهارة</h1>
                </div>
                <ul class="bread-crumb clearfix mt-4">
                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                    <li>الخدمات</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <!-- about-service -->
    <section class="about-service">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-sm-12 service-block mb-4">
                    <div
                        class="service-block-three wow fadeInUp animated animated h-100"
                        data-wow-delay="00ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="{{ '/services/' . $service->url }}"
                                ><img src="{{ $service->image }}" alt="{{ $service->image_alt }}"
                                    /></a>
                            </figure>
                            <div class="lower-content">
                                <h4><a href="{{ '/services/' . $service->url }}">{{ $service->name }}</a></h4>
                                <p class="mb-4 card-short-desc">
                                    {{ $service->short_description }}
                                </p>
                                <a href="{{ '/services/' . $service->url }}" class="theme-btn-three thm-btn">
                                    تفاصيل الخدمة
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- about-service end -->

    <!-- subscribe-section -->
    <section class="subscribe-section bg-color-1">
        <div class="auto-container">
            <div class="row clearfix text-right">
                <div class="col-lg-6 col-md-6 col-sm-12 text-column mb-md-0 mb-4">
                    <div
                        class="text d-flex justify-content-md-start justify-content-center"
                    >
                        <h3 class="pl-0">تواصل معنا الآن</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div
                        class="text h-100 d-flex justify-content-md-end justify-content-center align-items-center"
                    >
                        <a href="{{url('/') . '#contactSection'}}" class="fs-xl text-white ml-4">
                            <i class="flaticon-email-1" style="font-size: 40px"></i>
                        </a>
                        <a href="tel:0097470338000" target="_blank" class="fs-xl text-white">
                            <i class="flaticon-phone-call" style="font-size: 40px"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->
@endsection
