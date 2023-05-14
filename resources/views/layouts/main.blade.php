<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>@yield('pagetitle')</title>
    <link rel="shortcut icon" href="{{ url('img/Tsi/favicon.png" type="image/x-icon') }}">
    <link rel="stylesheet" href="{{ url('main/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ url('main/css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ url('main/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('main/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('main/js/plugin/countdown/countdown.css') }}">
    <link rel="stylesheet" href="{{ url('main/js/plugin/back-to-top/jquery-backToTop.min.css') }}">
    <link rel="stylesheet" href="{{ url('main/js/plugin/hint-css/hint-css.css') }}">
    <link rel="stylesheet" href="{{ url('main/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('main/css/responsive.css') }}">
    <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="alert  ash-bg-2  fade show mb-0 rounded-0 d-lg-flex d-none py-2 align-items-center" role="alert">
        <div class="row w-100 align-items-center ">
            <div class="col-6 text-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-bell me-2" viewBox="0 0 16 16">
                    <path
                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                </svg>
                همه خدماتی که برای کسب و کارت لازم داری، همه زیر یه سقف با <strong class="fs-6">TSICommerce</strong>
            </div>
            <div class="col-6 text-start">
                <a href="services.html" target="_blank"
                    class="btn btn-warning rounded waves-effect waves-light">مشاهده<svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg></a>
            </div>
        </div>
        <button type="button" class="btn-close mx-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <header>
        <div class="container-fluid ash-bg ">
            <div class="row top-menu justify-content-between align-items-center pt-2">
                <div class="col-lg-2 col-4 order-lg-1 order-2">
                    <div class="top-menu-logo">
                        <a href="{{ route('index') }}"><img src="{{ url('img/Tsi/LOGO-TSI-white.png') }}"
                                alt="logo of tsi platform" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-lg-block order-lg-2 order-3">
                    <div class="top-menu-search ">
                        <form action="{{ route('searchproduct') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input name="name" type="text" class="search-txt h-25 rounded"
                                    placeholder="نام محصول مورد نظر خود را وارد کنید">
                                <button type="submit" class="search-btn  input-group-text rounded-pill">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-12 order-lg-3 order-4 ash-pad my-3 container-fluid">
                    <div class="top-menu-btn">
                        <div class="row justify-content-evenly align-content-center">
                            <ul class="nav col-5 justify-content-start justify-content-sm-center">
                                <li class="nav-item "><a href="{{ route('login') }}"><button
                                            class="auth-btn-index rounded pointer">
                                            <span class="bi bi-person fs-5"></span>
                                            <p class="ash-text3-s">ورود یا عضویت</p>
                                        </button></a></li>
                            </ul>
                            {{-- <ul class="nav col-4 justify-content-start justify-content-sm-center">
                                <li class="nav-item">
                                    <button class="auth-btn-index dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="px-1">FA</span>
                                        <!-- <h6 class="p-1 ash-text2-s">فارسی</h6> -->
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item d-flex" href="#">
                                                <span class="text-dark">EN</span>
                                                <h6 class="p-1 text-dark ash-text2-s">انگلیسی</h6>
                                            </a></li>
                                        <!-- <li><a class="dropdown-item d-flex" href="#"><img class="w-25 px-1" src="img/Tsi/flog4.png" alt="">
                                        <p class="text-dark">انگلیسی</p></a></li> -->
                                    </ul>
                                </li>

                            </ul> --}}
                            {{-- <ul class="nav col-3 justify-content-start justify-content-sm-center">
                                <li class="nav-item "><button class="auth-btn-index rounded pointer"
                                        data-bs-toggle="modal" data-bs-target="#loginModal">
                                        <span class="bi bi-chat-dots-fill ash-text3-s px-1"></span>
                                        پیام
                                    </button></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-4 order-lg-4 order-1 ">
                    <div class="top-menu-menu d-lg-flex d-none">
                        <ul class="navbar-nav">
                            <li class="position-relative m-0"></li>
                            <li class="nav-item main-menu-head"><a href=""
                                    class="nav-link border-animate fromCenter"><i class="bi bi-list"></i>
                                    دسته بندی کالاها
                                </a>
                                <ul class="main-menu">

                                    @foreach ($categorys as $category)
                                        @if ($category->subcat == 0)
                                            <li><a href=""><i
                                                        class="{{ $category->icon }}"></i>{{ $category->title }}</a>
                                                <ul class="main-menu-sub back-menu">
                                                    <li>زیر دسته ها
                                                        <i class="bi bi-chevron-left"></i>
                                                    </li>

                                                    @foreach ($categorys as $cat)
                                                        @if ($category->id == $cat->subcat)
                                                            <li><a href="">{{ $cat->title }}</a></li>
                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach


                                </ul>
                            </li>
                            <li class="nav-item"><a href="{{ route('services') }}"
                                    class="nav-link border-animate fromCenter">
                                    خدمات<i class="bi bi-bookmark-check-fill fs-6 "></i></a>
                                <!-- <ul class="level-one">
                                    <li><a href="">منو شماره 1</a></li>
                                    <li><a href="">منو شماره 2</a></li>
                                    <li class="position-relative"><a href="">منو شماره 3 <i
                                                class="bi bi-chevron-left"></i></a>
                                        <ul class="level-two">
                                            <li><a href="">1 زیر منو شماره </a></li>
                                            <li><a href="">2 زیر منو شماره </a></li>
                                            <li><a href="">3 زیر منو شماره </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">منو شماره 4</a></li>
                                    <li><a href="">منو شماره 5</a></li>
                                    <li><a href="">منو شماره 6</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-item"><a href="" class="nav-link border-animate fromCenter">زنجیره
                                    اصالت<i class="bi bi-link-45deg"></i></a>
                            </li>
                            <!-- <li class="nav-item"><a href="" class="nav-link border-animate fromCenter"> <i
                                        class="bi bi-tag"></i> ارتباط با ما</a></li> -->
                            <li class="nav-item"><a href=""
                                    class="nav-link border-animate fromCenter">پشتیبانی 24 ساعته<i
                                        class="bi bi-headphones"></i></a>
                            </li>
                        </ul>
                    </div>


                    <div class="responsive-menu d-block d-lg-none">
                        <div class="responsive-menu-icon">
                            <span id="showResponsiveMenu" class="pointer"><i class="bi bi-list"></i></span>
                        </div>
                        <div class="rm-body">
                            <div class="rm-overlay"></div>
                            <div class="rm-items">
                                <div class="rm-item-close pointer">
                                    <i class="bi bi-x"></i>
                                </div>
                                <div class="rm-item-img pt-4">
                                    <img src="{{ url('img/Tsi/LOGO-TSI.png') }}" alt="">
                                </div>
                                <br><br>
                                <ul class="rm-item-menu navbar-nav">
                                    <li class="nav-item bg-ul-f7"><a href="index.html" class="nav-link">صفحه اصلی</a>
                                    </li>
                                    <li class="nav-item bg-ul-f7">
                                        <a class="nav-link py-2 showSubMenu">کالاها و محصولات</a>
                                        <span><i class="bi bi-chevron-left"></i></span>

                                        <ul class="navbar-nav h-0 bg-ul-f7">
                                            <hr>
                                            @foreach ($categorys as $category)
                                                @if ($category->subcat == 0)
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link">{{ $category->title }}</a></li>
                                                @endif
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li class="nav-item bg-ul-f7">
                                        <a href="" class="nav-link">خدمات و سرویس ها</a>

                                    </li>
                                    <li class="nav-item bg-ul-f7">
                                        <a href="" class="nav-link">زنجیره اصالت</a>
                                        <!-- <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                        <ul class="navbar-nav h-0">
                                            <li class="nav-item">
                                                <a class="nav-link" href="">برند</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0 bg-ul-f7">
                                                    <li class="nav-item"><a href="" class="nav-link">ایسر</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link">مایکروسافت</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link">ایسوس</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link">اپل</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link">سونی</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="">بر اساس قیمت</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0 bg-ul-f7">
                                                    <li class="nav-item"><a href="" class="nav-link">ارزان</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link">اقتصادی</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link">گران</a></li>
                                                </ul>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item bg-ul-f7">
                                        <a href="" class="nav-link">پشتیبانی 24 ساعته</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row border-top border-light">
                <div class="header-contact  col-12">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12">
                            <ul class="nav  header-contact-right">
                                <li class="nav-item ash-black"><a href="{{ route('products') }}"
                                        class="nav-link font-14"><i class="bi bi-archive-fill mx-1"></i>کالاها و
                                        محصولات</a></li>
                                <li class="nav-item ash-black"><a href="{{ route('supplier') }}"
                                        class="nav-link font-14"><i class="bi bi-boxes mx-1"></i>تامین کنندگان</a>
                                </li>
                                {{-- <li class="nav-item ash-black"><a href="merchant.html" class="nav-link font-14"><i
                                            class="bi bi-people-fill mx-1"></i>بازرگانان</a></li> --}}
                                <!-- <li class="nav-item"><a href="" class="nav-link font-14">درباره ما</a></li> -->
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')




    <footer class="shadow-md ash-footer-bg">
        <div class="container-fluid">
            <div class="footer">
                <div class="row">
                    <div class="col-lg-3 px-lg-5">
                        <div class="footer-item">
                            <h5>درباره ی ما</h5>
                            <ul class="footer-item-link ">
                                <li><a href="">درباره ی TSICommerce</a></li>
                                <li><a href="">اخبار و وبلاگ </a></li>
                                <li><a href="">فرصت های همکاری</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-item">
                            <h5>پشتیبانی 24 ساعته</h5>
                            <ul class="footer-item-link">
                                <li><a href="">دفتر پشتیبانی : شماره تماس</a></li>
                                <li><a href="">تیکت پشتیبانی</a></li>
                                <li><a href="">درخواست مشاوره</a></li>
                                <li><a href="">آدرس دفاتر</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-item">
                            <h5>قوانین و مقررات</h5>
                            <ul class="footer-item-link">
                                <li><a href="">مجوز ها</a></li>
                                <li><a href="">شرایط استفاده</a></li>
                                <li><a href="">پرسش های متداول</a></li>
                                <li><a href="">حریم خصوصی</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-item">
                            <div class="feed">
                                <h6>عضویت در خبرنامه اختصاصی تی اس آی:
                                </h6>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control feed-inp"
                                            placeholder="آدرس ایمیل خود را وارد کنید">
                                        <button type="submit"
                                            class="feed-btn waves-effect waves-light">ارسال</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="footer-desc-item">
                                <ul class="d-flex justify-content-md-end justify-content-center">
                                    <li><a href=""><img src="img/default-icon/enamad.png" alt=""></a></li>
                                    <li><a href=""><img src="img/default-icon/kasbokar.png" alt=""></a></li>
                                    <li><a href=""><img src="img/default-icon/rezi.png" alt=""></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="footer-desc">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-desc-item">
                                <h3>پلتفرم تی اس آی ، جدیدترین ، ایمن ترین و حرفه ای ترین راه ورود به بازار بین الملل
                                </h3>
                            </div>
                        </div>
                        <div class="row pe-0">
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="font-14">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                                <path
                                                    d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                            استان مرکزی، شهر اراک، خیابان مخابرات، میدان دارایی، پلاک 20
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="nav justify-content-lg-end justify-content-start mt-lg-0 mt-3">
                                            <li class="nav-item"><a href="" class="nav-link font-14 ps-0"
                                                    style="color:#8a8a8a">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-telephone"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                    </svg>
                                                    09332002020
                                                </a></li>
                                            <li class="nav-item "><a href=""
                                                    class="nav-link font-14 ps-sm-1 ps-0" style="color:#8a8a8a">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-envelope"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                    </svg>
                                                    info@site.com
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="d-flex align-items-center justify-content-sm-end justify-content-center flex-wrap mt-sm-0 mt-3">
                                <h6 class="mx-5">دانلود اپلیکیشن اندروید و ios ما ( به زودی )</h6>
                                <a href=""><img src="img/default-icon/Appstore.png"
                                        class="img-fluid mt-sm-0 mt-2" width="190" alt=""></a>
                                <a href="">
                                    <img src="img/default-icon/Google-Play-Store-Button.png"
                                        class="img-fluid ms-md-2 ms-0 mt-sm-0 mt-2" width="150" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script src="{{ url('main/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ url('main/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('main/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('main/js/app.js') }}"></script>
    <script src="{{ url('main/js/plugin/countdown/countdown.js') }}"></script>
    <script src="{{ url('main/js/plugin/back-to-top/jquery-backToTop.min.js') }}"></script>
    <script src="{{ url('main/js/plugin/hint-css/hint-css.js') }}"></script>
    <script src="{{ url('main/js/jquery-app.js') }}"></script>
    <script src="{{ url('main/js/plugin/waves/waves.js') }}"></script>
    <script src="{{ url('main/js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>


</body>

</html>
