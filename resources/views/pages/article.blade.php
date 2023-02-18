@extends('master')

@section('title_and_meta')
    <title>دار المهارة لأعمال التنظيف | خدمة {{ $article->name }}</title>
    <meta name="description" content="{{ $article->meta_description }}"/>
    <meta name="keywords" content="{{ $article->keywords }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="دار المهارة لأعمال التنظيف | خدمة {{ $article->name }}"/>
    <meta property="og:description"
          content="{{ $article->meta_description }}"/>
    <meta property="og:url" content="{{URL('/articles/') . $article->url}}"/>
    <meta property="og:site_name" content="دار المهارة لأعمال التنظيف"/>
    <meta property="og:image" content="{{$article->image}}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description"
          content="{{ $article->meta_description }}"/>
    <meta name="twitter:title" content="دار المهارة لأعمال التنظيف | خدمة {{ $article->name }}"/>
    <meta name="twitter:image" content="{{$article->image}}"/>
@endsection

@section('page_content')
    <!-- Page Title -->
    <section
        class="page-title style-two centred"
        style="
          background-image: url({{ url('assets/images/cleaning-articles.webp') }});
          background-repeat: no-repeat;
          background-size: cover;
        "
    >
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1 class="fw-bold" style="font-size: 36px">{{ $article->name }}</h1>
                </div>
                <ul class="bread-crumb clearfix mt-4">
                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                    <li><a href="{{url('/articles')}}">الخدمات</a></li>
                    <li>تفاصيل الخدمة</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <!-- article-details -->
    <section class="article-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-10 content-side">
                    <div class="article-details-content text-right">
                        <div class="content-one">
                            <figure class="image-box">
                                <img class="img img-fluid max-h-fitted-400" src="{{ asset('uploads/articles'."/".$article->image) }}" alt="{{ $article->image_alt }}" />
                            </figure>
                            <h2 class="mb-3">{{ $article->name }}</h2>
                            <div class="text">
                                <p>
                                    {!! $article->description !!}
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
    <!-- article-details end -->

    <!-- about-article -->
    <section class="about-article bg-light">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12 mb-4">
                    <div class="sec-title text-center">
                        <h3 class="fw-xbold mb-5">المزيد من الخدمات</h3>
                    </div>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                @foreach ($articles as $article)
                    <div class="news-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image" style="width: 100%; height: 200px; object-fit: contain">
                                    <a href="{{route('article', $article->url)}}">
                                        <img src="{{asset('uploads/articles'."/".$article->image)}}" alt="{{$article->alt_image}}"/>
                                    </a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <div class="category">
                                    <a href="{{route('article', $article->url)}}">{{$article->meta_title}}</a>
                                </div>
                                <h4>
                                    <a href="{{route('article', $article->url)}}">{{$article->name}}</a>
                                </h4>
                                <div class="link">
                                    <a href="{{ route('article', $article->url) }}">إقرأ المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>
    </section>
    <!-- about-article end -->

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
