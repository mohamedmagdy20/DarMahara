@extends('master',['about'=>$about,'icons'=>$icons,'discount'=>$discount])

@section('title_and_meta')
    <title>دار المهارة لأعمال التنظيف | الصفحة الرئيسية</title>
    <meta name="description" content="دار المهارة هي شركة مختصة بالتنظيفات العامة ومكافحة الحشرات في قطر"/>
    <meta name="keywords" content="التنظيفات,مكافحة الحشرات,تنظيف الفيلات الجديدة,مكافحة النمل الأبيض,جلى الرخام,غسيل الكنب,غسيل السجاد,غسيل خزان المياه,دار المهارة,دار المهاره,أعمال التنظيف,تنظيف,المهارة ,{{$about->keywords}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="دار المهارة لأعمال التنظيف | الصفحة الرئيسية"/>
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
    <!-- banner-section -->
    <section class="banner-section style-two">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            <div class="slide-item">
                <div
                    class="image-layer"
                    style="background-image: url({{asset('assets/images/bg-main.webp')}})"
                ></div>
                <div class="auto-container">
                    <div class="banner-content text-center">
                        <h1 class="fw-bold std-h1 text-sec mb-2">
                            شركة دار المهارة للتنظيفات
                        </h1>
                        <p class="mb-4 fs-lg">
                            اختيارك الأمثل لخدمات التنظيف وخدمات الضيافة فى قطر
                        </p>
                        <div class="support-box d-flex justify-content-center mx-0">
                            <div class="btn-box mx-0">
                                <a href="{{url('/')}}">عن الشركة</a>
                                <a class="my-350" href="#contactSection">اطلب خدمة</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div
                    class="image-layer"
                    style="background-image: url({{asset('assets/images/bg-main-2.webp')}})"
                ></div>
                <div class="auto-container">
                    <div class="banner-content text-center">
                        <h2 class="std-h1 text-sec mb-0 fw-bold">
                            خدمة متميزة وأسعار تنافسية
                        </h2>
                        <p class="mb-4 fs-lg">
                            نقدم لعملاءنا خدمة متميزة على مدار الأسبوع وأفضل الأسعار
                        </p>
                        <div class="support-box d-flex justify-content-center mx-0">
                            <div class="btn-box mx-0 mb-0">
                                <a href="{{url('/')}}">عن الشركة</a>
                                <a class="my-350" href="{{url('/')}}">اطلب خدمة</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div
                    class="image-layer"
                    style="background-image: url({{asset('assets/images/bg-main-3.webp')}})"
                ></div>
                <div class="auto-container">
                    <div class="banner-content text-center">
                        <h2 class="fw-bold std-h1 text-sec mb-0">مكافحة الحشرات</h2>
                        <p class="mb-4 fs-lg">
                            نقوم بمكافحة والقضاء على جميع أنواع الحشرات والقوارض
                        </p>
                        <div class="support-box d-flex justify-content-center mx-0">
                            <div class="btn-box mx-0">
                                <a href="tel:0097470338000">اتصل بنـا الآن</a>
                                <a class="my-350" href="#contactSection">اطلب الخدمة</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- feature-section -->
    <section class="feature-section sec-pad bg-light" id="featureSection">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h6 class="mb-30">دار المهــارة</h6>
                <h3 class="fw-xbold mb-5">أفضل خدمة تنظيفات <br />فى قطـــر</h3>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div
                        class="feature-block-one wow fadeInUp animated animated"
                        data-wow-delay="00ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-life-insurance"></i>
                            </div>
                            <h4 class="fw-bold">جوده عالية</h4>
                            <p class="fs-md">نقدم أفضل خدمة تنظيف في قطر</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div
                        class="feature-block-one wow fadeInUp animated animated"
                        data-wow-delay="300ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-man"></i>
                            </div>
                            <h4 class="fw-bold">دعم مستمر</h4>
                            <p class="fs-md">نقدم أفضل خدمة تنظيف في قطر</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div
                        class="feature-block-one wow fadeInUp animated animated"
                        data-wow-delay="400ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-save-the-world"></i>
                            </div>
                            <h4 class="fw-bold">فريق متمرس</h4>
                            <p class="fs-md">نقدم أفضل خدمة تنظيف في قطر</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div
                        class="feature-block-one wow fadeInUp animated animated"
                        data-wow-delay="600ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-rating"></i>
                            </div>
                            <h4 class="fw-bold">100% رضاء للعملاء</h4>
                            <p class="fs-md">نقدم أفضل خدمة تنظيف في قطر</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section end -->

    <!-- feature-section -->
    <section class="feature-section sec-pad">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h6 class="mb-30">دار المهــارة</h6>
                <h2 class="fw-xbold mb-5">خدمات دار المهارة</h2>
            </div>
            <div class="row justify-content-center">
            @foreach ($services as $service )
             
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block mb-4">
                    <div
                        class="feature-block-one wow fadeInUp animated animated h-100"
                        data-wow-delay="00ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="inner-box">
                            <div class="icon">
                                <img
                                    class="mb-3"
                                    width="60"
                                    src="{{asset('assets/images/icons/'.$service->icon_image)}}"
                                    alt="{{$service->icon_image_alt}}"
                                />
                            </div>
                            <h4 class="fw-bold">{{$service->name}}</h4>
                            <p class="fs-md">
                                {{$service->short_description }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
             
            </div>
            
        </div>
    </section>
    <!-- feature-section end -->

    <!-- booking-section -->
    <section class="booking-section" id="contactSection">
        <div class="outer-container clearfix">
            <div class="single-column">
                <div class="content_block_5">
                    <div
                        class="content-box"
                        style="background-image: url({{asset('assets/images/feature-bg-2.webp')}})"
                    >
                        <div
                            class="shape"
                            style="
                    background-image: url({{asset('assets/images/shape/shape-6.png')}});
                    background-size: cover;
                  "
                        ></div>
                        <h2>
                            اختيارك <br />
                            الأمثل فى <br />قطــر
                        </h2>
                        <ul class="list-item clearfix">
                            <li>تنظيف الفلل الجديدة</li>
                            <li>مكافحة الحشرات</li>
                            <li>غسيل السجاد</li>
                            <li>جلى الرخام و الجرانيت</li>
                            <li>مكافحة النمل الأبيض</li>
                            <li>غسيل خزانات المياه</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-column">
                <div class="content_block_6">
                    <div class="content-box">
                        <div
                            class="bg-layer"
                            style="background-image: url({{asset('assets/images/shape/shape-4.png')}})"
                        ></div>
                        <div class="sec-title text-left">
                            <h6>تواصـل معنا</h6>
                            <h3 class="fw-bold">أرسل لنا رسالة الآن</h3>
                        </div>
                        <form action="{{ route('add.message') }}" method="POST" class="estimate-form">
                            @csrf
                            <div class="inner-box">
                                <div class="form-group">
                                    <input
                                        type="text"
                                        name="name"
                                        placeholder="الإسم ( مطلوب )"
                                        required
                                    />
                                    @error('name')
                                       <div class="text-danger mt-1">
                                           {{ $message }}
                                       </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input
                                        type="email"
                                        name="email"
                                        placeholder="البريد الإلكترونى ( اختيارى )"
                                    />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        name="phone"
                                        placeholder="رقم الهاتف ( مطلوب )"
                                        required
                                        min="0"
                                    />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        name="address"
                                        placeholder="العنوان( اختيارى )"
                                    />
                                </div>
                                <div class="form-group">
                                    <select class="wide text-right" name="service">
                                        @foreach($services as $service)
                                        <option value="{{ $service->name }}">
                                            {{$service->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="message-btn">
                                <button type="submit">إرســال الآن</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="single-column">
                <div class="content_block_7">
                    <div
                        class="content-box"
                        style="
                  background-image: url({{asset('assets/images/cleaning-services.webp')}});
                "
                    >
                        <div class="video-btn">
                            <a
                                href="https://www.youtube.com/watch?v=uolNPZEnNEs&amp;t=28s"
                                class="lightbox-image"
                                data-caption=""
                            >
                                <i class="flaticon-play-button"></i>
                                <span class="border-animation border-1"></span>
                                <span class="border-animation border-2"></span>
                                <span class="border-animation border-3"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- booking-section end -->

    <!-- news-section -->
    <section class="news-section style-two sec-pad" id="blogSection">
        <div class="auto-container">
            <div class="sec-title text-left">
                <h6>المقالات و الأخبار</h6>
                <h3 class="fw-bold">تابع أحدث المقالات و الأخبار</h3>
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
    </section>
    <!-- news-section end -->

    @if(session('success'))
    <div class="fixed-success-message d-flex justify-content-center">
        <i class="far fa-check-circle ml-2"></i>
        {{  session('success') }}
    </div>
    @endif

@endsection
