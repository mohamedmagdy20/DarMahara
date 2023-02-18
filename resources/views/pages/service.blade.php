@extends('master')

@section('title_and_meta')
    <title>دار المهارة لأعمال التنظيف | خدمة {{ $service->name }}</title>
    <meta name="description" content="{{ $service->meta_description }}"/>
    <meta name="keywords" content="{{ $service->keywords }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="دار المهارة لأعمال التنظيف | خدمة {{ $service->name }}"/>
    <meta property="og:description"
          content="{{ $service->meta_description }}"/>
    <meta property="og:url" content="{{URL('/services/') . $service->url}}"/>
    <meta property="og:site_name" content="دار المهارة لأعمال التنظيف"/>
    <meta property="og:image" content="{{$service->image}}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description"
          content="{{ $service->meta_description }}"/>
    <meta name="twitter:title" content="دار المهارة لأعمال التنظيف | خدمة {{ $service->name }}"/>
    <meta name="twitter:image" content="{{$service->image}}"/>
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
                    <h1 class="fw-bold" style="font-size: 36px">{{ $service->name }}</h1>
                </div>
                <ul class="bread-crumb clearfix mt-4">
                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                    <li><a href="{{url('/services')}}">الخدمات</a></li>
                    <li>تفاصيل الخدمة</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <!-- service-details -->
    <section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-10 content-side">
                    <div class="service-details-content text-right">
                        <div class="content-one">
                            <figure class="image-box">
                                <img class="img img-fluid max-h-fitted-400" src="{{url('uploads/services'.'/'.$service->image)}}" alt="{{ $service->image_alt }}" />
                            </figure>
                            <h2 class="mb-3">{{ $service->name }}</h2>
                            <div class="text">
                                <p>
                                    {!! $service->description !!}
                                </p>
                            </div>
                            <div class="action d-flex text-right mt-5">
                                <a href="tel:0097470338000" class="theme-btn-three thm-btn ml-2">
                                    <i class="fa fa-phone ml-1"></i>
                                    اتصل بنا الآن
                                </a>
                                <a href="https://wa.me/0097470338000" target="_blank" class="btn btn-success d-inline-flex align-items-center px-4 ml-2">
                                    <i class="fab fa-whatsapp ml-2"></i>
                                    تواصل واتساب
                                </a>
                                <a href="{{ url('/') . '#contactSection' }}" class="btn btn-secondary d-inline-flex align-items-center px-4">
                                    استفسر عن الخدمة
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->

    <!-- about-service -->
    <section class="about-service bg-light">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 mb-4">
                    <div class="sec-title text-center">
                        <h3 class="fw-xbold mb-5">المزيد من الخدمات</h3>
                    </div>
                </div>
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
                                    ><img src="{{url('uploads/services'.'/'.$service->image)}}" alt="{{ $service->image_alt }}"
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
