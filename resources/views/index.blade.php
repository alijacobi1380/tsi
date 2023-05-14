@extends('layouts.main')


@section('content')
    <div class="home py-3">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 mt-lg-0">
                    <div class="swiper homeSlider sugget-Moment h-100">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide rounded-circle">
                                <a href=""><img src="{{ url('img/Tsi/Tsi-1-B.jpg') }}" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <div class="swiper-slide rounded-circle">
                                <a href=""><img src="{{ url('img/Tsi/Tsi-2.jpg') }}" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <div class="swiper-slide rounded-circle">
                                <a href=""><img src="{{ url('img/Tsi/Tsi-3.jpg') }}" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <!-- <div class="swiper-slide rounded-circle">
                                                                                                    <a href=""><img src="img/Tsi/amazon1.jpg" class="img-fluid" alt=""></a>
                                                                                                </div> -->
                        </div>
                        <div class="swiper-button-next d-none d-lg-flex"></div>
                        <div class="swiper-button-prev d-none d-lg-flex"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main slider -->

    <div class="partner">
        <div class="container-fluid">
            <div class="partner-parrent  ash-bg-2">
                <div class="d-flex align-items-center justify-content-between pb-3">
                    <div class="pbt-header-title">
                        <h6 class="slider-title ash-text2">سرویس های ویژه </h6>
                    </div>
                    <div class="pbt-header-link">
                        <a href="category.html" class="fromCenter border-animate  px-md-5 px-4 ash-fs ash-text3 "> بیشتر
                            +</a>
                    </div>
                </div>
                <div class="swiper partnerSwipper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide partner-item ash-border">
                            <a href="#">
                                <img src="img/Tsi/Service-Icons/service-Tsi-4.png" class="img-fluid" alt="">
                                <h6 class="ash-text2">ویترین بین الملل</h6>
                            </a>
                        </div>
                        <div class="swiper-slide partner-item ash-border">
                            <a href="#">
                                <img src="img/Tsi/Service-Icons/service-Tsi-5.png" class="img-fluid" alt="">
                                <h6 class="ash-text2">بازاریاب بین الملل</h6>
                            </a>
                        </div>
                        <div class="swiper-slide partner-item ash-border">
                            <a href="#">
                                <img src="img/Tsi/Service-Icons/service-Tsi-6.png" class="img-fluid" alt="">
                                <h6 class="ash-text2">برندینگ دیجیتال</h6>
                            </a>
                        </div>
                        <div class="swiper-slide partner-item ash-border">
                            <a href="#">
                                <img src="img/Tsi/Service-Icons/service-Tsi-3.png" class="img-fluid" alt="">
                                <h6 class="ash-text2">حمل بار بین الملل</h6>
                            </a>
                        </div>
                        <div class="swiper-slide partner-item ash-border">
                            <a href="#">
                                <img src="img/Tsi/Service-Icons/service-Tsi-9.png" class="img-fluid" alt="">
                                <h6 class="ash-text2">تدوین استراتژی بازار</h6>
                            </a>
                        </div>
                        <div class="swiper-slide partner-item ash-border">
                            <a href="#">
                                <img src="img/Tsi/Service-Icons/service-Tsi-10.png" class="img-fluid" alt="">
                                <h6 class="ash-text4-s">توسعه سامانه و نرم افزار</h6>
                            </a>
                        </div>
                        <div class="swiper-slide partner-item ash-border">
                            <a href="#">
                                <img src="img/Tsi/Service-Icons/service-Tsi-11.png" class="img-fluid" alt="">
                                <h6 class="ash-text2">زنجیره اصالت</h6>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="swiper-button-next sb2" style="top: 36%;"></div>
                                                                                        <div class="swiper-button-prev sb2" style="top: 36%;"></div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- end partner -->


    <div class="banner-product mb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="banner-product-item bg-danger d-flex align-items-center justify-content-between"
                        style="background: linear-gradient(to left top,#22A39F,#434242)">
                        <div class="banner-product-desc h-100 px-3">
                            <h4 class="text-white mb-5">راهنمای تامین کنندگان</h4>
                            <a href="" class="btn btn-outline-light waves-effect waves-light">مشاهده و بررسی</a>
                        </div>
                        <div class="banner-product-img">
                            <img src="img/banner-product/boxes.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-product-item bg-danger d-flex align-items-center justify-content-between"
                        style="background: linear-gradient(to left top,#6D9886,#2a4050)">
                        <div class="banner-product-desc h-100 px-3">
                            <h4 class="text-white mb-5">راهنمای بازرگانان
                            </h4>
                            <a href="" class="btn btn-outline-light waves-effect waves-light">مشاهده و بررسی</a>
                        </div>
                        <div class="banner-product-img">
                            <img src="img/banner-product/mobile-logo2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-product-item bg-danger d-flex align-items-center justify-content-between"
                        style="background: linear-gradient(to left top,#51557E,#5a5e39)">
                        <div class="banner-product-desc h-100 px-3">
                            <h4 class="text-white mb-5">راهنمای کالا و خدمات
                            </h4>
                            <a href="" class="btn btn-outline-light waves-effect waves-light">مشاهده و بررسی</a>
                        </div>
                        <div class="banner-product-img">
                            <img src="img/banner-product/pooshak.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner-product -->
    <!-- <div class="container my-4">
                                                                                <div class="products-table">
                                                                                    <div class="row">
                                                                                        <div class="col-12 col-md-4 col-lg-3">
                                                                                            <div class="product-box-item">
                                                                                                <div class="product-box-item-img">
                                                                                                    <a href="">
                                                                                                        <img src="img/product/product-image3.jpg" alt="" class="img-fluid one-image">
                                                                                                        <img src="img/product/product-image4.jpg" alt="" class="img-fluid two-image">
                                                                                                    </a>
                                                                                                    <div class="product-box-item-hover">
                                                                                                        <div class="product-box-item-hover-btn">
                                                                                                            <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                    class="bi bi-eye fs-3"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a href="product.html">
                                                                                                    <div class="product-box-item-desc">
                                                                                                        <div class="product-box-item-title">
                                                                                                            <h6>
                                                                        محصولات الکترونیکی</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-4 col-lg-3">
                                                                                            <div class="product-box-item">
                                                                                                <div class="product-box-item-img">
                                                                                                    <a href="">
                                                                                                        <img src="img/product/product-image3.jpg" alt="" class="img-fluid one-image">
                                                                                                        <img src="img/product/product-image4.jpg" alt="" class="img-fluid two-image">
                                                                                                    </a>
                                                                                                    <div class="product-box-item-hover">
                                                                                                        <div class="product-box-item-hover-btn">
                                                                                                            <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                    class="bi bi-eye fs-3"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a href="product.html">
                                                                                                    <div class="product-box-item-desc">
                                                                                                        <div class="product-box-item-title">
                                                                                                            <h6>
                                                                        محصولات الکترونیکی</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-4 col-lg-3">
                                                                                            <div class="product-box-item">
                                                                                                <div class="product-box-item-img">
                                                                                                    <a href="">
                                                                                                        <img src="img/product/product-image3.jpg" alt="" class="img-fluid one-image">
                                                                                                        <img src="img/product/product-image4.jpg" alt="" class="img-fluid two-image">
                                                                                                    </a>
                                                                                                    <div class="product-box-item-hover">
                                                                                                        <div class="product-box-item-hover-btn">
                                                                                                            <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                    class="bi bi-eye fs-3"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a href="product.html">
                                                                                                    <div class="product-box-item-desc">
                                                                                                        <div class="product-box-item-title">
                                                                                                            <h6>
                                                                        محصولات الکترونیکی</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-4 col-lg-3">
                                                                                            <div class="product-box-item">
                                                                                                <div class="product-box-item-img">
                                                                                                    <a href="">
                                                                                                        <img src="img/product/product-image3.jpg" alt="" class="img-fluid one-image">
                                                                                                        <img src="img/product/product-image4.jpg" alt="" class="img-fluid two-image">
                                                                                                    </a>
                                                                                                    <div class="product-box-item-hover">
                                                                                                        <div class="product-box-item-hover-btn">
                                                                                                            <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                    class="bi bi-eye fs-3"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a href="product.html">
                                                                                                    <div class="product-box-item-desc">
                                                                                                        <div class="product-box-item-title">
                                                                                                            <h6>
                                                                        محصولات الکترونیکی</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-4 col-lg-3">
                                                                                            <div class="product-box-item">
                                                                                                <div class="product-box-item-img">
                                                                                                    <a href="">
                                                                                                        <img src="img/product/product-image3.jpg" alt="" class="img-fluid one-image">
                                                                                                        <img src="img/product/product-image4.jpg" alt="" class="img-fluid two-image">
                                                                                                    </a>
                                                                                                    <div class="product-box-item-hover">
                                                                                                        <div class="product-box-item-hover-btn">
                                                                                                            <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                    class="bi bi-eye fs-3"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a href="product.html">
                                                                                                    <div class="product-box-item-desc">
                                                                                                        <div class="product-box-item-title">
                                                                                                            <h6>
                                                                        محصولات الکترونیکی</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-4 col-lg-3">
                                                                                            <div class="product-box-item">
                                                                                                <div class="product-box-item-img">
                                                                                                    <a href="">
                                                                                                        <img src="img/product/product-image3.jpg" alt="" class="img-fluid one-image">
                                                                                                        <img src="img/product/product-image4.jpg" alt="" class="img-fluid two-image">
                                                                                                    </a>
                                                                                                    <div class="product-box-item-hover">
                                                                                                        <div class="product-box-item-hover-btn">
                                                                                                            <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                    class="bi bi-eye fs-3"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a href="product.html">
                                                                                                    <div class="product-box-item-desc">
                                                                                                        <div class="product-box-item-title">
                                                                                                            <h6>
                                                                        محصولات الکترونیکی</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-4 col-lg-3">
                                                                                            <div class="product-box-item">
                                                                                                <div class="product-box-item-img">
                                                                                                    <a href="">
                                                                                                        <img src="img/product/product-image3.jpg" alt="" class="img-fluid one-image">
                                                                                                        <img src="img/product/product-image4.jpg" alt="" class="img-fluid two-image">
                                                                                                    </a>
                                                                                                    <div class="product-box-item-hover">
                                                                                                        <div class="product-box-item-hover-btn">
                                                                                                            <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                    class="bi bi-eye fs-3"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a href="product.html">
                                                                                                    <div class="product-box-item-desc">
                                                                                                        <div class="product-box-item-title">
                                                                                                            <h6>
                                                                        محصولات الکترونیکی</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-4 col-lg-3">
                                                                                            <div class="product-box-item">
                                                                                                <div class="product-box-item-img">
                                                                                                    <a href="">
                                                                                                        <img src="img/product/product-image3.jpg" alt="" class="img-fluid one-image">
                                                                                                        <img src="img/product/product-image4.jpg" alt="" class="img-fluid two-image">
                                                                                                    </a>
                                                                                                    <div class="product-box-item-hover">
                                                                                                        <div class="product-box-item-hover-btn">
                                                                                                            <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                    class="bi bi-eye fs-3"></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a href="product.html">
                                                                                                    <div class="product-box-item-desc">
                                                                                                        <div class="product-box-item-title">
                                                                                                            <h6>
                                                                        محصولات الکترونیکی</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div> -->

    {{-- <div class="container-fluid">
        <div class="offer my-4">
            <div class="row">
                <div class="col-lg-8 col-xxl-9">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper"
                        id="offerItem">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="offer-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="offer-discount">
                                            </div>
                                            <div class="offer-img">
                                                <img src="img/Products/loostr.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="offer-content">
                                                <div class="offer-desc">
                                                    <div class="se-title">
                                                        <h5>پرچمداری از صنایع روشنایی
                                                        </h5>
                                                        <h6 class="text-muted">لوستر حاله ای پذیرایی - بدنه طلا - دیزاین
                                                            4458 اسپشیال
                                                        </h6>
                                                    </div>
                                                    <div class="se-desc">
                                                        <h6 class="text-success">فروشنده : تولیدی لوستر راه شب</h6>
                                                        <h6>ویژگی محصول:</h6>
                                                        <ul>
                                                            <li>
                                                                <span class="title">حداقل تعداد سفارش :</span>
                                                                <span class="desc">50 عدد</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">زمان شیپینگ :</span>
                                                                <span class="desc">16 روز کاری</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">ضمانت نامه :</span>
                                                                <span class="desc">سرویس آزاد ایران صنعت</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="offer-btn">
                                                    <a href="product.html"><i class="bi bi-box-fill px-3"></i>ارتباط با
                                                        تامین کننده</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="offer-discount">
                                            </div>
                                            <div class="offer-img">
                                                <img src="img/Products/furniture.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="offer-content">
                                                <div class="offer-desc">
                                                    <div class="se-title">
                                                        <h5>پرچمداری از صنایع چوبی
                                                        </h5>
                                                        <h6 class="text-muted">مبل چستر طراحی تاکید انگلند - رویه مخمل
                                                        </h6>
                                                    </div>
                                                    <div class="se-desc">
                                                        <h6 class="text-success">فروشنده : مبل چستر پروداکشن</h6>
                                                        <h6>ویژگی محصول:</h6>
                                                        <ul>
                                                            <li>
                                                                <span class="title">حداقل تعداد سفارش :</span>
                                                                <span class="desc">19 عدد</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">زمان شیپینگ :</span>
                                                                <span class="desc">5 روز کاری</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">ضمانت نامه :</span>
                                                                <span class="desc">سرویس طلایی بیمه اتحادیه اروپا </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="offer-btn">
                                                    <a href="product.html"><i class="bi bi-box-fill px-3"></i>ارتباط با
                                                        تامین کننده</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="offer-discount">
                                            </div>
                                            <div class="offer-img">
                                                <img src="img/Products/handmade.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="offer-content">
                                                <div class="offer-desc">
                                                    <div class="se-title">
                                                        <h5>پرچمداری از صنایع دستی و هنری
                                                        </h5>
                                                        <h6 class="text-muted">ست منبت کاری شده طلاکوب - استاد معیریان
                                                        </h6>
                                                    </div>
                                                    <div class="se-desc">
                                                        <h6 class="text-success">فروشنده : گالری معیریان</h6>
                                                        <h6>ویژگی محصول:</h6>
                                                        <ul>
                                                            <li>
                                                                <span class="title">حداقل تعداد سفارش :</span>
                                                                <span class="desc">5 عدد</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">زمان شیپینگ :</span>
                                                                <span class="desc">23 روز کاری</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">ضمانت نامه :</span>
                                                                <span class="desc">سرویس آزاد ایران آرت</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="offer-btn">
                                                    <a href="product.html"><i class="bi bi-box-fill px-3"></i>ارتباط با
                                                        تامین کننده</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="offer-discount">
                                            </div>
                                            <div class="offer-img">
                                                <img src="img/Products/nuts.webp" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="offer-content">
                                                <div class="offer-desc">
                                                    <div class="se-title">
                                                        <h5>پرچمداری از کشاورزی و خشکبار
                                                        </h5>
                                                        <h6 class="text-muted">پکیج محصولات درجه 1 صادراتی مغز خشکبار ایران
                                                        </h6>
                                                    </div>
                                                    <div class="se-desc">
                                                        <h6 class="text-success">فروشنده : کارخانه آجیل و خشکبار نادری</h6>
                                                        <h6>ویژگی محصول:</h6>
                                                        <ul>
                                                            <li>
                                                                <span class="title">حداقل تعداد سفارش :</span>
                                                                <span class="desc">2 تن</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">زمان شیپینگ :</span>
                                                                <span class="desc">23 روز کاری</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">ضمانت نامه :</span>
                                                                <span class="desc">سرویس آزاد ایران صنعت</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="offer-btn">
                                                    <a href="product.html"><i class="bi bi-box-fill px-3"></i>ارتباط با
                                                        تامین کننده</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="offer-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="offer-discount">
                                            </div>
                                            <div class="offer-img">
                                                <img src="img/Products/barcelete.webp" alt=""
                                                    class="img-fluid W-100">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="offer-content">
                                                <div class="offer-desc">
                                                    <div class="se-title">
                                                        <h5>پرچمداری از صنایع دانش بنیان
                                                        </h5>
                                                        <h6 class="text-muted">دستبند و انگشتر هوشمند توییتی دانگل مکس
                                                            8954XCV
                                                        </h6>
                                                    </div>
                                                    <div class="se-desc">
                                                        <h6 class="text-success">فروشنده : استارت آپ جوانان آینده </h6>
                                                        <h6>ویژگی محصول:</h6>
                                                        <ul>
                                                            <li>
                                                                <span class="title">حداقل تعداد سفارش :</span>
                                                                <span class="desc">1200 عدد</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">زمان شیپینگ :</span>
                                                                <span class="desc">30 روز کاری</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">ضمانت نامه :</span>
                                                                <span class="desc">سرویس آزاد ایران پیما</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="offer-btn">
                                                    <a href="product.html"><i class="bi bi-box-fill px-3"></i>ارتباط با
                                                        تامین کننده</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination d-lg-none d-block"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 d-lg-block d-none">
                    <div class="offer-item-link">
                        <div thumbsSlider="" class="swiper" id="offerItemLink">
                            <div class="swiper-wrapper">

                                @foreach ($slidercateogrys as $slp)
                                    <div class="swiper-slide">
                                        <div class="offer-item-link-item shadow-sm">
                                            <h6>{{ $slp->title }}</h6>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end offers  -->

    <div class="main-category py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="main-category-title">
                    <h4 class="main-title fs-3">دسته بندی های محصولات</h4>
                </div>

                @foreach ($indexcategorys as $indexcats)
                    <div class="col-lg-2 col-sm-4 col-6 mb-3">
                        <a href="category.html">
                            <div class="cart-small">
                                <div class="cart-small-icon">
                                    <img width="50" src="{{ url('categorys') }}/{{ $indexcats->image }}"
                                        alt="" class="img-fluid">
                                </div>
                                <div class="cart-small-desc ms-lg-3 text-center">
                                    <h6>{{ $indexcats->title }}</h6>
                                    <p class="text-muted d-none d-lg-block">
                                        @php
                                            $prnum = 0;
                                        @endphp
                                        @foreach ($products as $product)
                                            @if ($product->categoryid == $indexcats->id)
                                                @php
                                                    $prnum++;
                                                @endphp
                                            @endif
                                        @endforeach
                                        {{ $prnum }} محصول
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach




            </div>
        </div>
    </div>
    <!-- end main main-category -->

    <div class="banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="banner-item">
                        <a href="category.html">
                            <img src="img/banner/Two-Slided-Bane-1.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="banner-item">
                        <a href="category.html">
                            <img src="img/banner/Two-Slided-Bane-2.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <div class="product-box mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product-box-title">
                        <h2 class="slider-title fs-3">جدیدترین کالاها و محصولات</h2>
                        <a href="category.html">مشاهده همه <i class="bi bi-chevron-left"></i></a>
                    </div>
                    <div class="swiper product-box-items pt-md-0 pt-4 prodcut-box-one-slider">
                        <div class="swiper-wrapper">

                            @foreach ($lastproducts as $lsp)
                                <div class="swiper-slide">
                                    <div class="product-box-item">
                                        <div class="product-box-item-img">
                                            <a
                                                href="{{ route('showproduct', ['id' => $lsp->id, 'title' => $lsp->title]) }}">
                                                <img src="{{ url('productimages') }}/{{ $lsp->image }}" alt=""
                                                    class="img-fluid one-image">
                                                <img src="{{ url('productimages') }}/{{ $lsp->image }}" alt=""
                                                    class="img-fluid two-image">
                                            </a>
                                            <div class="product-box-item-hover">
                                                <div class="product-box-item-hover-btn">
                                                    {{-- <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                            class="bi bi-eye"></i></span>
                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                            class="bi bi-heart"></i></span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('showproduct', ['id' => $lsp->id, 'title' => $lsp->title]) }}">
                                            <div class="product-box-item-desc">
                                                <div class="product-box-item-title">
                                                    <h6>
                                                        {{ $lsp->title }}
                                                    </h6>
                                                </div>
                                                <div class="product-box-price default m-2">
                                                    <button class="btn-add-to-cart-3">مشاهده محصول</button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach


                            <div class="swiper-slide">
                                <div class="product-box-item see-more-item">
                                    <div class="see-all">
                                        <a href="category.html">
                                            <i class="bi bi-arrow-left-circle"></i>
                                            <p>مشاهده همه</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product box -->

    {{-- <div class="product-box-custom">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-4 col-11 my-2">
                    <div class="swiper  bg-cc-ashi-1" id="suggetMoment">
                        <h6 class="fw-bold p-2 px-3 my-3 ash-text2">آخرین درخواست های ثبت شده</h6>
                        <hr class="border-bottom border-2 border-light">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide ">
                                <div class="product-box-item bg-transparent">
                                    <div class="row">
                                        <div class="col-12 my-1 bg-light rounded">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-4"><img class="w-100 m-2 rounded-circle"
                                                        src="img/product/laptop2.jpg" alt=""></div>
                                                <div class="col-8">شرکت داده گستران رایانه پی
                                                    <br><a class="ash-fs-2" href="#">تولید و تجهیز قطعات خودرویی</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 my-1 bg-light rounded">
                                            <div class="row align-items-center">
                                                <div class="col-4"><img class="w-100 m-2 rounded-circle"
                                                        src="img/product/laptop4.jpg" alt=""></div>
                                                <div class="col-8">شرکت داده گستران رایانه پی
                                                    <br><a class="ash-fs-2" href="#">تولید و تجهیز قطعات خودرویی</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 my-1 bg-light rounded">
                                            <div class="row align-items-center">
                                                <div class="col-4"><img class="w-100 m-2 rounded-circle"
                                                        src="img/product/mobile.png" alt=""></div>
                                                <div class="col-8">شرکت داده گستران رایانه پی
                                                    <br><a class="ash-fs-2" href="#">تولید و تجهیز قطعات خودرویی</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="swiper-progress-bar">
                                                                                        <span class="slide_progress-bar"></span>
                                                                                    </div> -->
                    </div>
                </div>
                <div class="col-md-4 col-11 my-2 pb-4 ash-card bg-cc-ashi-3 text-center rounded align-items-center">
                    <h6 class="fw-bold p-2 mt-3 ash-text2 bg-cc-ashi-4 rounded-pill">کنسرسیوم های صادراتی</h6>
                    <hr class="border-bottom border-2 border-light">
                    <div class="row  justify-content-center align-items-center pt-lg-5">
                        <div
                            class="col-10 m-2 pointer  d-flex bg-light rounded ash-height justify-content-evenly align-items-center">
                            <a class="h-100 d-flex align-items-center" href="#">
                                <img class=" rounded-circle h-75 px-3" src="img/Tsi/rounded-flag/roshanaei-01.png"
                                    alt="">
                                <div class="text-concer">
                                    <h5> صنایع روشنایی</h5>
                                    <p class="ash-fs-1">وضعیت : در حال تشکیل</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="col-10 m-2 pointer  d-flex bg-light rounded ash-height justify-content-evenly align-items-center">
                            <a class="h-100 d-flex align-items-center" href="#">
                                <img class=" rounded-circle h-75 px-3" src="img/Tsi/rounded-flag/Keshavarzi-01-01.png"
                                    alt="">
                                <div class="text-concer">
                                    <h5> صنایع کشاورزی</h5>
                                    <p class="ash-fs-1">وضعیت : در حال تشکیل</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="col-10 m-2 pointer  d-flex bg-light rounded ash-height justify-content-evenly align-items-center">
                            <a class="h-100 d-flex align-items-center" href="#">
                                <img class=" rounded-circle h-75 px-3" src="img/Tsi/rounded-flag/Aico-01.png"
                                    alt="">
                                <div class="text-concer">
                                    <h5> صنایع دانش بنیان</h5>
                                    <p class="ash-fs-1">وضعیت : در حال تشکیل</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="col-10 m-2 pointer  d-flex bg-light rounded ash-height justify-content-evenly align-items-center">
                            <a class="h-100 d-flex align-items-center" href="#">
                                <img class=" rounded-circle h-75 px-3" src="img/Tsi/rounded-flag/Sakhteman-01-01.png"
                                    alt="">
                                <div class="text-concer">
                                    <h5> صنایع ساختمانی</h5>
                                    <p class="ash-fs-1">وضعیت : در حال تشکیل</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="col-10 m-2 pointer  d-flex bg-light rounded ash-height justify-content-evenly align-items-center">
                            <a class="h-100 d-flex align-items-center" href="#">
                                <img class=" rounded-circle h-75 px-3" src="img/Tsi/rounded-flag/Honari-01.png"
                                    alt="">
                                <div class="text-concer">
                                    <h5> صنایع دستی و هنر</h5>
                                    <p class="ash-fs-1">وضعیت : در حال تشکیل</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-11 my-2 ">
                    <div class="swiper bg-cc-ashi-2" id="suggetMoment">
                        <h6 class="fw-bold p-2 px-3 my-3 ash-text2">محبوبترین تامین کنندگان</h6>
                        <hr class="border-bottom border-2 border-light">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide ">
                                <div class="product-box-item bg-transparent">
                                    <div class="row">
                                        <div class="col-12 my-1 bg-light rounded ">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-4 "><img class="w-100 m-2 rounded"
                                                        src="img/product/laptop2.jpg" alt=""></div>
                                                <div class="col-8">شرکت داده گستران رایانه پی
                                                    <br><a class="ash-fs-2" href="#">تولید و تجهیز قطعات خودرویی</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 my-1 bg-light rounded">
                                            <div class="row align-items-center">
                                                <div class="col-4"><img class="w-100 m-2 rounded"
                                                        src="img/product/laptop4.jpg" alt=""></div>
                                                <div class="col-8">شرکت داده گستران رایانه پی
                                                    <br><a class="ash-fs-2" href="#">تولید و تجهیز قطعات خودرویی</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 my-1 bg-light rounded">
                                            <div class="row align-items-center">
                                                <div class="col-4"><img class="w-100 m-2 rounded"
                                                        src="img/product/mobile.png" alt=""></div>
                                                <div class="col-8">شرکت داده گستران رایانه پی
                                                    <br><a class="ash-fs-2" href="#">تولید و تجهیز قطعات خودرویی</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
    <!-- end product box two -->

    {{-- <div class="product-box mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product-box-title">
                        <h2 class="slider-title fs-3">فروش های ویژه</h2>
                        <a href="category.html">مشاهده همه <i class="bi bi-chevron-left"></i></a>
                    </div>
                    <div class="swiper product-box-items pt-md-0 pt-4 prodcut-box-one-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="offer-discount">
                                    <span>٪48 تخفیف</span>
                                </div>
                                <div class="product-box-item">
                                    <div class="product-box-item-img">
                                        <a href="">
                                            <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                            <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                        </a>
                                        <div class="product-box-item-hover">
                                            <div class="product-box-item-hover-btn">
                                                <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                    data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                        class="bi bi-eye"></i></span>
                                                <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                        class="bi bi-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="product.html">
                                        <div class="product-box-item-desc">
                                            <div class="product-box-item-title">
                                                <h6>
                                                    ساعت های هوشمند شیائومی 9 <br> پلاس مای
                                                </h6>
                                            </div>
                                            <div class="product-box-price default m-2">
                                                <button class="btn-add-to-cart-2">ارتباط با تامین کننده</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="offer-discount">
                                    <span>٪10 تخفیف</span>
                                </div>
                                <div class="product-box-item">
                                    <div class="product-box-item-img">
                                        <a href="">
                                            <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                            <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                        </a>
                                        <div class="product-box-item-hover">
                                            <div class="product-box-item-hover-btn">
                                                <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                    data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                        class="bi bi-eye"></i></span>
                                                <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                        class="bi bi-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="product.html">
                                        <div class="product-box-item-desc">
                                            <div class="product-box-item-title">
                                                <h6>
                                                    ساعت های هوشمند شیائومی 9 <br> پلاس مای
                                                </h6>
                                            </div>
                                            <div class="product-box-price default m-2">
                                                <button class="btn-add-to-cart-2">ارتباط با تامین کننده</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="offer-discount">
                                    <span>٪48 تخفیف</span>
                                </div>
                                <div class="product-box-item">
                                    <div class="product-box-item-img">
                                        <a href="">
                                            <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                            <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                        </a>
                                        <div class="product-box-item-hover">
                                            <div class="product-box-item-hover-btn">
                                                <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                    data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                        class="bi bi-eye"></i></span>
                                                <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                        class="bi bi-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="product.html">
                                        <div class="product-box-item-desc">
                                            <div class="product-box-item-title">
                                                <h6>
                                                    ساعت های هوشمند شیائومی 9 <br> پلاس مای
                                                </h6>
                                            </div>
                                            <div class="product-box-price default m-2">
                                                <button class="btn-add-to-cart-2">ارتباط با تامین کننده</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="offer-discount">
                                    <span>٪20 تخفیف</span>
                                </div>
                                <div class="product-box-item">
                                    <div class="product-box-item-img">
                                        <a href="">
                                            <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                            <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                        </a>
                                        <div class="product-box-item-hover">
                                            <div class="product-box-item-hover-btn">
                                                <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                    data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                        class="bi bi-eye"></i></span>
                                                <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                        class="bi bi-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="product.html">
                                        <div class="product-box-item-desc">
                                            <div class="product-box-item-title">
                                                <h6>
                                                    ساعت های هوشمند شیائومی 9 <br> پلاس مای
                                                </h6>
                                            </div>
                                            <div class="product-box-price default m-2">
                                                <button class="btn-add-to-cart-2">ارتباط با تامین کننده</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="offer-discount">
                                    <span>٪70 تخفیف</span>
                                </div>
                                <div class="product-box-item">
                                    <div class="product-box-item-img">
                                        <a href="">
                                            <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                            <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                        </a>
                                        <div class="product-box-item-hover">
                                            <div class="product-box-item-hover-btn">
                                                <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                    data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                        class="bi bi-eye"></i></span>
                                                <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                        class="bi bi-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="product.html">
                                        <div class="product-box-item-desc">
                                            <div class="product-box-item-title">
                                                <h6>
                                                    ساعت های هوشمند شیائومی 9 <br> پلاس مای
                                                </h6>
                                            </div>
                                            <div class="product-box-price default m-2">
                                                <button class="btn-add-to-cart-2">ارتباط با تامین کننده</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="offer-discount">
                                    <span>٪8 تخفیف</span>
                                </div>
                                <div class="product-box-item">
                                    <div class="product-box-item-img">
                                        <a href="">
                                            <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                            <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                        </a>
                                        <div class="product-box-item-hover">
                                            <div class="product-box-item-hover-btn">
                                                <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                    data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                        class="bi bi-eye"></i></span>
                                                <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                        class="bi bi-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="product.html">
                                        <div class="product-box-item-desc">
                                            <div class="product-box-item-title">
                                                <h6>
                                                    ساعت های هوشمند شیائومی 9 <br> پلاس مای
                                                </h6>
                                            </div>
                                            <div class="product-box-price default m-2">
                                                <button class="btn-add-to-cart-2">ارتباط با تامین کننده</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="offer-discount">
                                    <span>٪36 تخفیف</span>
                                </div>
                                <div class="product-box-item">
                                    <div class="product-box-item-img">
                                        <a href="">
                                            <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                            <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                        </a>
                                        <div class="product-box-item-hover">
                                            <div class="product-box-item-hover-btn">
                                                <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                    data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                        class="bi bi-eye"></i></span>
                                                <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                        class="bi bi-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="product.html">
                                        <div class="product-box-item-desc">
                                            <div class="product-box-item-title">
                                                <h6>
                                                    ساعت های هوشمند شیائومی 9 <br> پلاس مای
                                                </h6>
                                            </div>
                                            <div class="product-box-price default m-2">
                                                <button class="btn-add-to-cart-2">ارتباط با تامین کننده</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="offer-discount">
                                    <span>٪48 تخفیف</span>
                                </div>
                                <div class="product-box-item">
                                    <div class="product-box-item-img">
                                        <a href="">
                                            <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                            <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                        </a>
                                        <div class="product-box-item-hover">
                                            <div class="product-box-item-hover-btn">
                                                <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                    data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                        class="bi bi-eye"></i></span>
                                                <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                        class="bi bi-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="product.html">
                                        <div class="product-box-item-desc">
                                            <div class="product-box-item-title">
                                                <h6>
                                                    ساعت های هوشمند شیائومی 9 <br> پلاس مای
                                                </h6>
                                            </div>
                                            <div class="product-box-price default m-2">
                                                <button class="btn-add-to-cart-2">ارتباط با تامین کننده</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="offer-discount">
                                    <span>٪9 تخفیف</span>
                                </div>
                                <div class="product-box-item">
                                    <div class="product-box-item-img">
                                        <a href="">
                                            <img src="img/product/wach2.jpg" alt="" class="img-fluid one-image">
                                            <img src="img/product/wach3.jpg" alt="" class="img-fluid two-image">
                                        </a>
                                        <div class="product-box-item-hover">
                                            <div class="product-box-item-hover-btn">
                                                <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                    data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                        class="bi bi-eye"></i></span>
                                                <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                        class="bi bi-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="product.html">
                                        <div class="product-box-item-desc">
                                            <div class="product-box-item-title">
                                                <h6>
                                                    ساعت های هوشمند شیائومی 9 <br> پلاس مای
                                                </h6>
                                            </div>
                                            <div class="product-box-price default m-2">
                                                <button class="btn-add-to-cart-2">ارتباط با تامین کننده</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-box-item see-more-item">
                                    <div class="see-all">
                                        <a href="category.html">
                                            <i class="bi bi-arrow-left-circle"></i>
                                            <p>مشاهده همه</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product box --> --}}

    <div class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-item">
                        <a href="category.html">
                            <img src="img/Tsi/blockchain-baner.jpg" alt="" class="img-fluid shadow-md">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-item">
                        <a href="category.html">
                            <img src="img/Tsi/suppurter-baner.jpg" alt="" class="img-fluid shadow-md">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!-- <div class="product-box mb-4">
                                                                            <div class="container-fluid">
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="product-box-title">
                                                                                            <h2 class="slider-title fs-3">همکاران ما</h2>
                                                                                            <a href="category.html">مشاهده همه <i class="bi bi-chevron-left"></i></a>
                                                                                        </div>
                                                                                        <div class="swiper product-box-items  prodcut-box-one-slider">
                                                                                            <div class="swiper-wrapper">
                                                                                                <div class="swiper-slide">
                                                                                                    <div class="product-box-item">
                                                                                                        <div class="product-box-item-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/Corporate/dadgostari.png" alt="" class="img-fluid one-image w-50">
                                                                                                                <img src="img/Corporate/dadgostari.png" alt="" class="img-fluid two-image w-100 p-5">
                                                                                                            </a>
                                                                                                            <div class="product-box-item-hover">
                                                                                                                <div class="product-box-item-hover-btn">
                                                                                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                            class="bi bi-eye"></i></span>
                                                                                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                                                                                            class="bi bi-heart"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="product.html">
                                                                                                            <div class="product-box-item-desc">
                                                                                                                <div class="product-box-item-title">
                                                                                                                    <h6>
                                                                                                                        دادگستری ایران<br><i>  25 سال تجربه  </i>
                                                                                                                    </h6>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="swiper-slide">
                                                                                                    <div class="product-box-item">
                                                                                                        <div class="product-box-item-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/Corporate/dinairan.png" alt="" class="img-fluid one-image w-50">
                                                                                                                <img src="img/Corporate/dinairan.png" alt="" class="img-fluid two-image w-100 p-5">
                                                                                                            </a>
                                                                                                            <div class="product-box-item-hover">
                                                                                                                <div class="product-box-item-hover-btn">
                                                                                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                            class="bi bi-eye"></i></span>
                                                                                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                                                                                            class="bi bi-heart"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="product.html">
                                                                                                            <div class="product-box-item-desc">
                                                                                                                <div class="product-box-item-title">
                                                                                                                    <h6>
                                                                                                                         سازمان آمار نیروی انسانی<br><i>  31 سال تجربه  </i>
                                                                                                                    </h6>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="swiper-slide">
                                                                                                    <div class="product-box-item">
                                                                                                        <div class="product-box-item-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/Corporate/irrenter.png" alt="" class="img-fluid one-image w-50">
                                                                                                                <img src="img/Corporate/irrenter.png" alt="" class="img-fluid two-image w-100 p-5">
                                                                                                            </a>
                                                                                                            <div class="product-box-item-hover">
                                                                                                                <div class="product-box-item-hover-btn">
                                                                                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                            class="bi bi-eye"></i></span>
                                                                                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                                                                                            class="bi bi-heart"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="product.html">
                                                                                                            <div class="product-box-item-desc">
                                                                                                                <div class="product-box-item-title">
                                                                                                                    <h6>
                                                                                                                       ایران رنت سنتر<br><i>  25 سال تجربه  </i>
                                                                                                                    </h6>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="swiper-slide">
                                                                                                    <div class="product-box-item">
                                                                                                        <div class="product-box-item-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/Corporate/iranzamn.png" alt="" class="img-fluid one-image w-50">
                                                                                                                <img src="img/Corporate/iranzamn.png" alt="" class="img-fluid two-image w-100 p-5">
                                                                                                            </a>
                                                                                                            <div class="product-box-item-hover">
                                                                                                                <div class="product-box-item-hover-btn">
                                                                                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                            class="bi bi-eye"></i></span>
                                                                                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                                                                                            class="bi bi-heart"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="product.html">
                                                                                                            <div class="product-box-item-desc">
                                                                                                                <div class="product-box-item-title">
                                                                                                                    <h6>
                                                                                                                        بانک ایران زمین<br><i>  25 سال تجربه  </i>
                                                                                                                    </h6>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="swiper-slide">
                                                                                                    <div class="product-box-item">
                                                                                                        <div class="product-box-item-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/Corporate/Polymertechmart-Logo.png" alt="" class="img-fluid one-image w-50">
                                                                                                                <img src="img/Corporate/Polymertechmart-Logo.png" alt="" class="img-fluid two-image w-100 p-5">
                                                                                                            </a>
                                                                                                            <div class="product-box-item-hover">
                                                                                                                <div class="product-box-item-hover-btn">
                                                                                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                            class="bi bi-eye"></i></span>
                                                                                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                                                                                            class="bi bi-heart"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="product.html">
                                                                                                            <div class="product-box-item-desc">
                                                                                                                <div class="product-box-item-title">
                                                                                                                    <h6>
                                                                                                                         پژوهشگاه پلیمرایران<br><i>  25 سال تجربه  </i>
                                                                                                                    </h6>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="swiper-slide">
                                                                                                    <div class="product-box-item">
                                                                                                        <div class="product-box-item-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/Corporate/pars.png" alt="" class="img-fluid one-image w-50">
                                                                                                                <img src="img/Corporate/pars.png" alt="" class="img-fluid two-image w-100 p-5">
                                                                                                            </a>
                                                                                                            <div class="product-box-item-hover">
                                                                                                                <div class="product-box-item-hover-btn">
                                                                                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                            class="bi bi-eye"></i></span>
                                                                                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                                                                                            class="bi bi-heart"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="product.html">
                                                                                                            <div class="product-box-item-desc">
                                                                                                                <div class="product-box-item-title">
                                                                                                                    <h6>
                                                                                                                        پتروشیمی ایران<br><i>  25 سال تجربه  </i>
                                                                                                                    </h6>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="swiper-slide">
                                                                                                    <div class="product-box-item">
                                                                                                        <div class="product-box-item-img">
                                                                                                            <a href="">
                                                                                                                <img src="img/Corporate/Quran-2.png" alt="" class="img-fluid one-image w-50">
                                                                                                                <img src="img/Corporate/Quran-2.png" alt="" class="img-fluid two-image w-100 p-5">
                                                                                                            </a>
                                                                                                            <div class="product-box-item-hover">
                                                                                                                <div class="product-box-item-hover-btn">
                                                                                                                    <span class="see-more hint--right" data-hint="مشاهده سریع"
                                                                                                                        data-bs-toggle="modal" data-bs-target="#productModal"><i
                                                                                                                            class="bi bi-eye"></i></span>
                                                                                                                    <span class="favorite hint--right" data-hint="افزودن به برگزیده ها"><i
                                                                                                                            class="bi bi-heart"></i></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="product.html">
                                                                                                            <div class="product-box-item-desc">
                                                                                                                <div class="product-box-item-title">
                                                                                                                    <h6>
                                                                                                                        انجمن های مذهبی <br><i>  25 سال تجربه  </i>
                                                                                                                    </h6>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                

                                                                                                <div class="swiper-slide">
                                                                                                    <div class="product-box-item see-more-item">
                                                                                                        <div class="see-all">
                                                                                                            <a href="category.html">
                                                                                                                <i class="bi bi-arrow-left-circle"></i>
                                                                                                                <p>مشاهده همه</p>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="swiper-button-next"></div>
                                                                                            <div class="swiper-button-prev"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->
    <!-- end product box -->

    <div class="partner">
        <div class="container-fluid">
            <div class="partner-parrent ash-bg-4 rounded">
                <div class="d-flex align-items-center justify-content-between pb-3">
                    <div class="pbt-header-title">
                        <h6 class="slider-title">برخی همکاران ما</h6>
                    </div>
                </div>
                <div class="swiper partnerSwipper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/Corporate/dadgostari.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/Corporate/dinairan.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/Corporate/iranzamn.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/Corporate/pars.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/Corporate/Polymertechmart-Logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide partner-item">
                            <a href="#">
                                <img src="img/Corporate/Quran-2.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next sb2" style="top: 36%;"></div>
                    <div class="swiper-button-prev sb2" style="top: 36%;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end partner -->

    <div class="banner m-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 ash-bg-2 text-light rounded text-center p-4">
                    <h2 class="fw-bolder">رسالت ما چیست ؟</h2>
                    <p class="p-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و
                        سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد .
                        >لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                        نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                        حال و آینده .
                    </p>
                    <a href="{{ route('aboutus') }}" type="button" class="btn btn-primary bg-gradient">مطالعه صفحه ی
                        درباره ی ما</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagetitle')
    صفحه اصلی
@endsection
