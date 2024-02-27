@extends('layouts.main')


@section('content')
    <div class="content" style="padding: 10px 0;">
        <!-- start product meta -->
        <div class="product-meta">
            <div class="container-fluid">
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="product-meta-breadcrumb shadow-sm">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="#">خانه</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">محصولات</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <span>گوشی موبایل شیائومی مدل Poco M4 Pro 5G دو سیم کارت ظرفیت 128/6
                                            گیگابایت</span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div> --}}
                <div class="summary shadow-sm">
                    <div class="row">
                        <div class="col-lg-4">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                class="swiper product-gallery">
                                {{-- <div class="summary-offer">
                                    <span></span>9%</span>
                                </div> --}}
                                {{-- <div class="icon-product-box">
                                    <div class="icon-product-box-item hint--right" data-bs-toggle="modal"
                                        data-bs-target="#shareModal" data-hint="زنجیره اصالت">
                                        <i class="bi bi-boxes"></i>
                                    </div>
                                    <div class="icon-product-box-item hint--right" data-hint="افزودن به محصولات مورد علاقه">
                                        <i class="bi bi-heart"></i>
                                    </div>
                                </div> --}}
                                <div class="swiper-wrapper" title="برای بزرگنمایی تصویر دابل کلیک کنید">
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="img-fluid" src="{{ url('productimages') }}/{{ $product->image }}" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="img-fluid" src="{{ url('productimages') }}/{{ $product->image }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next d-none d-lg-flex"></div>
                                <div class="swiper-button-prev d-none d-lg-flex"></div>
                                <div class="swiper-pagination d-none d-lg-block"></div>
                            </div>
                            <div thumbsSlider="" class="swiper product-gallery-thumb">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ url('productimages') }}/{{ $product->image }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 border-right-product">
                            <div class="summary-entry mt-lg-0 mt-4">
                                <div class="se-title">
                                    <a href="{{ route('showvitrin', ['id' => $product->userid]) }}">
                                        <div class="alert alert-info d-flex align-items-center " role="alert">
                                            <i class="bi bi-box p-2 mx-3"></i>
                                            <h5>فروشنده : <span>{{ $product->username }}</span></h5>
                                        </div>
                                    </a>
                                    <h5 class="bg-light p-4 rounded ">{{ $product->title }}</h5>
                                    {{-- <h6 class="text-muted">Xiaomi Poco M4 Pro 5G Dual SIM 128GB, 6GB Ram Mobile Phone --}}
                                    </h6>
                                </div>


                            </div>
                            <div class="se-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="se-label">
                                            <ul class="nav">
                                                <li class="nav-item original"><span class="badge text-white ms-2"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-patch-check-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                                        </svg> اصالت کالا</span></li>
                                            </ul>
                                        </div>
                                        <div class="se-desc">
                                            <h6>ویژگی محصول:</h6>
                                            <input type="checkbox" class="read-more-state" id="readMore1" />
                                            <ul class="read-more-wrap">
                                                <li>
                                                    <span class="title">رنگ :</span>
                                                    <span class="desc">{{ $product->productcolor }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">وزن :</span>
                                                    <span class="desc">{{ $product->productvazn }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">جنس :</span>
                                                    <span class="desc">{{ $product->productjens }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">بسته بندی :</span>
                                                    <span class="desc">{{ $product->productpack }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">قابلیت سفارشی سازی : </span>
                                                    <span class="desc">{{ $product->productcustom }}</span>
                                                </li>
                                                <li class="read-more-target">
                                                    <span class="title">زمان تحویل :</span>
                                                    <span class="desc">{{ $product->productdeliver }}</span>
                                                </li>

                                            </ul>
                                            <label for="readMore1" class="read-more-trigger"></label>
                                            <div class="se-alert">
                                                <div class="free-shipping">
                                                    <div class="title">
                                                        <h6 class="fw-bold">ارسال بین المللی</h6>
                                                        <p>همین حالا درخواست حمل و نقل <br> بین المللی خود را ثبت کنید
                                                        </p>
                                                    </div>
                                                    <img src="{{ url('img/icon-1/free-shipping.svg') }}" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 m-auto mt-lg-2 mt-3">
                                        <div class="se-cart shadow-sm">
                                            <div class="se-cart-detail">
                                                {{-- <span class="scd-item text-muted">
                                                    <i class="bi bi-flag"></i>
                                                    کشور سازنده:
                                                    <a href="">فنلاند</a>
                                                </span> --}}
                                                <span class="scd-item text-muted">
                                                    <i class="bi bi-shop"></i>
                                                    دسته بندی:
                                                    {{ $product->categoryname }}
                                                </span>
                                                {{-- <span class="scd-item text-muted">
                                                    <i class="bi bi-tag"></i>
                                                    برچسب:
                                                    <a href="">کالای دیجیتال</a>,
                                                    <a href="">تلفن همراه</a>,
                                                    <a href="">شیائومی</a>,
                                                    <a href="">ارزان کالا</a>,
                                                </span> --}}
                                            </div>
                                            <div class="se-cart-form">

                                                <div class="row align-items-center">
                                                    <div class="col-sm-7">
                                                        <a
                                                            href="{{ route('showvitrin', ['id' => $product->userid]) }}">
                                                            <button
                                                                class="shadow-sm fw-bold btn-add-to-cart mt-sm-0 mt-2 waves-effect waves-light">پروفایل
                                                                تامین کننده</button>
                                                        </a>
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
        </div>
        <!-- end product meta -->
    </div>


    <div class="product-box mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product-box-title">
                        <h2 class="slider-title fs-3">محصولات مشابه پیشنهادی</h2>
                        <a href="category.html">مشاهده همه <i class="bi bi-chevron-left"></i></a>
                    </div>
                    <div class="swiper product-box-items pt-md-0 pt-4 prodcut-box-one-slider">
                        <div class="swiper-wrapper">


                            @foreach ($products as $product)
                                <div class="swiper-slide">
                                    <div class="product-box-item">
                                        <div class="product-box-item-img">
                                            <a href="">
                                                <img src="{{ url('productimages') }}/{{ $product->image }}"
                                                    alt="" class="img-fluid one-image">
                                                <img src="{{ url('productimages') }}/{{ $product->image }}"
                                                    alt="" class="img-fluid two-image">
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
                                        <a
                                            href="{{ route('showproduct', ['id' => $product->id, 'title' => $product->title]) }}">
                                            <div class="product-box-item-desc">
                                                <div class="product-box-item-title">
                                                    <h6>
                                                        {{ $product->title }}
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
@endsection

@section('pagetitle')
    {{ $product->title }}
@endsection
