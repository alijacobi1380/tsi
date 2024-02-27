@extends('layouts.main')


@section('content')
    <div class="home py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 mt-lg-0 mt-3 order-lg-2 order-1">
                    <div class="swiper homeSlider homeSlider-two sugget-Moment">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide rounded-circle">
                                <a href=""><img src="img/slider/taamin-slider-1.png" class="img-fluid h-100"
                                        alt=""></a>
                            </div>
                            <div class="swiper-slide rounded-circle">
                                <a href=""><img src="img/slider/taamin-slider-2.png" class="img-fluid h-100"
                                        alt=""></a>
                            </div>
                            <div class="swiper-slide rounded-circle">
                                <a href=""><img src="img/slider/taamin-slider-3.png" class="img-fluid h-100"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-button-next d-none d-lg-flex"></div>
                        <div class="swiper-button-prev d-none d-lg-flex"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
                <div class="col-lg-3 mt-lg-0 mt-3 order-lg-1 order-2">
                    <div class="swiper sgm-two" id="suggetMoment">
                        <div class="swiper-wrapper position-relative">
                            @foreach ($vitrins as $vitrin)
                                <div class="swiper-slide">
                                    <div class="product-box-item">
                                        <div class="sugget-title">
                                            <h6 class="fw-bold"> تامین کنندگان تصادفی</h6>
                                        </div>
                                        <div class="product-box-item-img">
                                            <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}"
                                                    alt="{{ $vitrin->username }}" class="img-fluid">
                                            </a>

                                        </div>
                                        <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                            <div class="product-box-item-desc">
                                                <div class="product-box-item-title">
                                                    <h6>
                                                        {{ $vitrin->username }}
                                                    </h6>
                                                </div>
                                                <div class="product-box-price">
                                                    <div class="d-flex justify-content-center">
                                                        <button class="btn-add-to-cart">ارتباط با تامین کننده</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-progress-bar">
                            <span class="slide_progress-bar"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main slider -->

    <!-- <div class="feature">
                                                                                                                    <div class="container-fluid">
                                                                                                                        <div class="row row-cols-5 g-3">
                                                                                                                            <div class="col">
                                                                                                                                <div class="feture-item shadow-sm">
                                                                                                                                    <div class="feture-icon">
                                                                                                                                        <img width="50" src="img/icon-1/history.png" alt="" class="img-fluid">
                                                                                                                                    </div>
                                                                                                                                    <div class="feture-desc ms-lg-3 text-center">
                                                                                                                                        <h6>بازگشـت وجـه
                                                                                                                                        </h6>
                                                                                                                                        <p class="text-muted my-2 d-none d-lg-block">در صورت عدم رضایت</p>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col">
                                                                                                                                <div class="feture-item shadow-sm">
                                                                                                                                    <div class="feture-icon">
                                                                                                                                        <img width="50" src="img/icon-1/credit-card.png" alt="" class="img-fluid">
                                                                                                                                    </div>
                                                                                                                                    <div class="feture-desc ms-lg-3 text-center">
                                                                                                                                        <h6>تضمین قیمت
                                                                                                                                        </h6>
                                                                                                                                        <p class="text-muted my-2 d-none d-lg-block">کمترین قیمت بازار
                                                                                                                                        </p>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col">
                                                                                                                                <div class="feture-item shadow-sm">
                                                                                                                                    <div class="feture-icon">
                                                                                                                                        <img width="50" src="img/icon-1/fast.png" alt="" class="img-fluid">
                                                                                                                                    </div>
                                                                                                                                    <div class="feture-desc ms-lg-3 text-center">
                                                                                                                                        <h6>ارسـال سـریع
                                                                                                                                        </h6>
                                                                                                                                        <p class="text-muted my-2 d-none d-lg-block">امن و مطمئن</p>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col">
                                                                                                                                <div class="feture-item shadow-sm">
                                                                                                                                    <div class="feture-icon">
                                                                                                                                        <img width="50" src="img/icon-1/headphone.png" alt="" class="img-fluid">
                                                                                                                                    </div>
                                                                                                                                    <div class="feture-desc ms-lg-3 text-center">
                                                                                                                                        <h6>پشتیبانی عالی
                                                                                                                                        </h6>
                                                                                                                                        <p class="text-muted my-2 d-none d-lg-block">در صورت عدم رضایت</p>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col">
                                                                                                                                <div class="feture-item shadow-sm">
                                                                                                                                    <div class="feture-icon">
                                                                                                                                        <img width="50" src="img/icon-1/badge.png" alt="" class="img-fluid">
                                                                                                                                    </div>
                                                                                                                                    <div class="feture-desc ms-lg-3 text-center">
                                                                                                                                        <h6>اصالت کالا
                                                                                                                                        </h6>
                                                                                                                                        <p class="text-muted my-2 d-none d-lg-block">امن و مطمئن</p>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                end feature -->

    <div class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-item">
                        <a>
                            <img src="{{url('img/Tsi/nowledge-cos.jpg')}}" alt="" class="img-fluid shadow-md">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-item">
                        <a>
                            <img src="{{url('img/Tsi/rani-carpet.jpg')}}" alt="" class="img-fluid shadow-md">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!-- <div class="main-category">
                                                                                                                    <div class="container-fluid">
                                                                                                                        <div class="row justify-content-center">
                                                                                                                            <div class="main-category-title">
                                                                                                                                <h4 class="main-title">دسته بندی های فروشگاه</h4>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/abzar-khodro.png" alt="" class="img-fluid">
                                                                                                                                        <h6>ابزار خودرو</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/kalaye-degital.png" alt="" class="img-fluid">
                                                                                                                                        <h6>کالای دیجیتال</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/ashpazkhane.png" alt="" class="img-fluid">
                                                                                                                                        <h6>خانه و آشپزخانه</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/autr.png" alt="" class="img-fluid">
                                                                                                                                        <h6>زیبایی و سلامت</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/boomi.png" alt="" class="img-fluid">
                                                                                                                                        <h6>محصولات بومی و محلی</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/children.png" alt="" class="img-fluid">
                                                                                                                                        <h6>اسباب بازی،کودک و نوزاد</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/lavazem-tahrir.png" alt="" class="img-fluid">
                                                                                                                                        <h6>کتاب ، لوازم تحریر و هنر</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/milk.png" alt="" class="img-fluid">
                                                                                                                                        <h6>کالاهای سوپر مارکتی</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/mobile.png" alt="" class="img-fluid">
                                                                                                                                        <h6>موبایل</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/poshak.png" alt="" class="img-fluid">
                                                                                                                                        <h6>پوشاک</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-lg-2 col-4">
                                                                                                                                <div class="main-category-item">
                                                                                                                                    <a href="">
                                                                                                                                        <img src="img/main-category/varzeshi.png" alt="" class="img-fluid">
                                                                                                                                        <h6>ورزش و سفر</h6>
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                end main main-category -->

    <div class="product-box-two">
        <div class="container-fluid">
            <div class="pbt">
                <div class="pbt-header">
                    <div class="pbt-header-title">
                        <h6 class="slider-title"> تامین کنندگان {{ $categorys[0]->title }}</h6>
                    </div>
                    <div class="pbt-header-link">
                        <a href="{{ route('suppliercat', ['id' => $categorys[0]->id]) }}"
                            class="fromCenter border-animate">مشاهده همه</a>
                    </div>
                </div>

                @php
                    $num = 0;
                @endphp
                @foreach ($vitrins as $vitrin)
                    @if ($vitrin->productcat == $categorys[0]->id && $num < 7)
                        <div class="swiper product-box-two-ash-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-box-item shadow-sm">
                                        <div class="product-box-item-img">
                                            <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" alt=""
                                                    class="img-fluid one-image p-2">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" alt=""
                                                    class="img-fluid two-image p-2">
                                            </a>
                                            {{-- <div class="product-box-item-hover">
                                                <div class="product-box-item-hover-btn">
                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                            class="bi bi-eye"></i></span>
                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                            class="bi bi-heart"></i></span>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                            <div class="product-box-item-desc">
                                                <div class="product-box-item-title">
                                                    <h6>
                                                        {{ $vitrin->username }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="product-box-item shadow-sm see-more-item">
                                        <div class="see-all">
                                            <a href="{{ route('suppliercat', ['id' => $categorys[0]->id]) }}">
                                                <i class="bi bi-arrow-left-circle"></i>
                                                <p>مشاهده همه</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next sb2"></div>
                            <div class="swiper-button-prev sb2"></div>
                        </div>
                        @php
                            $num++;
                        @endphp
                    @endif
                @endforeach


            </div>
        </div>
    </div>
    <!-- end product box two -->

    <div class="product-box-two">
        <div class="container-fluid">
            <div class="pbt bg-ash-pbt-1">
                <div class="pbt-header">
                    <div class="pbt-header-title">
                        <h6 class="slider-title">تامین کنندگان {{ $categorys[1]->title }}</h6>
                    </div>
                    <div class="pbt-header-link">
                        <a class="fromCenter border-animate">مشاهده همه</a>
                    </div>
                </div>
                @php
                    $num = 0;
                @endphp
                @foreach ($vitrins as $vitrin)
                    @if ($vitrin->productcat == $categorys[1]->id && $num < 7)
                        <div class="swiper product-box-two-ash-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-box-item shadow-sm">
                                        <div class="product-box-item-img">
                                            <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" alt=""
                                                    class="img-fluid one-image p-2">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" alt=""
                                                    class="img-fluid two-image p-2">
                                            </a>
                                            {{-- <div class="product-box-item-hover">
                                                <div class="product-box-item-hover-btn">
                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                            class="bi bi-eye"></i></span>
                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                            class="bi bi-heart"></i></span>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                            <div class="product-box-item-desc">
                                                <div class="product-box-item-title">
                                                    <h6>
                                                        {{ $vitrin->username }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="product-box-item shadow-sm see-more-item">
                                        <div class="see-all">
                                            <a href="{{ route('suppliercat', ['id' => $categorys[1]->id]) }}">
                                                <i class="bi bi-arrow-left-circle"></i>
                                                <p>مشاهده همه</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next sb2"></div>
                            <div class="swiper-button-prev sb2"></div>
                        </div>
                        @php
                            $num++;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- end product box two -->
    <div class="product-box-two">
        <div class="container-fluid">
            <div class="pbt bg-ash-pbt-2">
                <div class="pbt-header">
                    <div class="pbt-header-title">
                        <h6 class="slider-title">تامین کنندگان {{$categorys[2]->title}}</h6>
                    </div>
                    <div class="pbt-header-link">
                        <a class="fromCenter border-animate">مشاهده همه</a>
                    </div>
                </div>
                @php
                    $num = 0;
                @endphp
                @foreach ($vitrins as $vitrin)
                    @if ($vitrin->productcat == $categorys[2]->id && $num < 7)
                        <div class="swiper product-box-two-ash-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-box-item shadow-sm">
                                        <div class="product-box-item-img">
                                            <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" alt=""
                                                    class="img-fluid one-image p-2">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" alt=""
                                                    class="img-fluid two-image p-2">
                                            </a>
                                            {{-- <div class="product-box-item-hover">
                                                <div class="product-box-item-hover-btn">
                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                            class="bi bi-eye"></i></span>
                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                            class="bi bi-heart"></i></span>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                            <div class="product-box-item-desc">
                                                <div class="product-box-item-title">
                                                    <h6>
                                                        {{ $vitrin->username }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="product-box-item shadow-sm see-more-item">
                                        <div class="see-all">
                                            <a href="{{ route('suppliercat', ['id' => $categorys[2]->id]) }}">
                                                <i class="bi bi-arrow-left-circle"></i>
                                                <p>مشاهده همه</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next sb2"></div>
                            <div class="swiper-button-prev sb2"></div>
                        </div>
                        @php
                            $num++;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- end product box two -->

    <div class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="banner-item">
                        <a>
                            <img src="{{url('img/Tsi/Supplier-banner/long-banner-tsi.jpg')}}" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <div class="product-box-two">
        <div class="container-fluid">
            <div class="pbt bg-ash-pbt-4">
                <div class="pbt-header">
                    <div class="pbt-header-title">
                        <h6 class="slider-title">تامین کنندگان {{$categorys[3]->title}}</h6>
                    </div>
                    <div class="pbt-header-link">
                        <a class="fromCenter border-animate">مشاهده همه</a>
                    </div>
                </div>
                @php
                    $num = 0;
                @endphp
                @foreach ($vitrins as $vitrin)
                    @if ($vitrin->productcat == $categorys[3]->id && $num < 7)
                        <div class="swiper product-box-two-ash-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-box-item shadow-sm">
                                        <div class="product-box-item-img">
                                            <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" alt=""
                                                    class="img-fluid one-image p-2">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" alt=""
                                                    class="img-fluid two-image p-2">
                                            </a>
                                            {{-- <div class="product-box-item-hover">
                                                <div class="product-box-item-hover-btn">
                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                            class="bi bi-eye"></i></span>
                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                            class="bi bi-heart"></i></span>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                            <div class="product-box-item-desc">
                                                <div class="product-box-item-title">
                                                    <h6>
                                                        {{ $vitrin->username }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="product-box-item shadow-sm see-more-item">
                                        <div class="see-all">
                                            <a href="{{ route('suppliercat', ['id' => $categorys[3]->id]) }}">
                                                <i class="bi bi-arrow-left-circle"></i>
                                                <p>مشاهده همه</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next sb2"></div>
                            <div class="swiper-button-prev sb2"></div>
                        </div>
                        @php
                            $num++;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- end product box two -->


    <div class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-item">
                        <a>
                            <img src="{{url('img/Tsi/furniture.jpg')}}" alt="" class="img-fluid shadow-md">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-item">
                        <a>
                            <img src="{{url('img/Tsi/luster.jpg')}}" alt="" class="img-fluid shadow-md">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <div class="product-box-two">
        <div class="container-fluid">
            <div class="pbt bg-ash-pbt-3">
                <div class="pbt-header">
                    <div class="pbt-header-title">
                        <h6 class="slider-title"> تامین کنندگان {{$categorys[4]->title}}</h6>
                    </div>
                    <div class="pbt-header-link">
                        <a class="fromCenter border-animate">مشاهده همه</a>
                    </div>
                </div>
                @php
                    $num = 0;
                @endphp
                @foreach ($vitrins as $vitrin)
                    @if ($vitrin->productcat == $categorys[4]->id && $num < 7)
                        <div class="swiper product-box-two-ash-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-box-item shadow-sm">
                                        <div class="product-box-item-img">
                                            <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" alt=""
                                                    class="img-fluid one-image p-2">
                                                <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" alt=""
                                                    class="img-fluid two-image p-2">
                                            </a>
                                            {{-- <div class="product-box-item-hover">
                                                <div class="product-box-item-hover-btn">
                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                            class="bi bi-eye"></i></span>
                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                            class="bi bi-heart"></i></span>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                            <div class="product-box-item-desc">
                                                <div class="product-box-item-title">
                                                    <h6>
                                                        {{ $vitrin->username }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="product-box-item shadow-sm see-more-item">
                                        <div class="see-all">
                                            <a href="{{ route('suppliercat', ['id' => $categorys[4]->id]) }}">
                                                <i class="bi bi-arrow-left-circle"></i>
                                                <p>مشاهده همه</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next sb2"></div>
                            <div class="swiper-button-prev sb2"></div>
                        </div>
                        @php
                            $num++;
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('pagetitle')
    تامین کنندگان
@endsection
