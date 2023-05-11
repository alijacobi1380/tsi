@extends('layouts.main')


@section('content')
    <div class="content">
        <div class="dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ui-boxs">
                            <div class="ui-box">
                                <div class="ui-box-item">
                                    <div class="ui-box-item-desc" style="border-radius: 10px;background-color: #fff;">
                                        <div class="dashboard-user-img-profile">
                                            <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}" width="200"
                                                height="200" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <div class="dashboard-user-info">
                                            <h2 class="user-name pt-2">{{ $vitrin->username }}</h2>
                                            {{-- <h6 class="text-muted py-2">{{$vitrin->desc}}</h6> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ui-box">
                                <div class="ui-box-item">
                                    <div class="ui-box-item-title" style="padding: 15px;">
                                        <h4 class="fw-bold">ویترین اختصاصی</h4>
                                    </div>
                                    <div class="ui-box-item-desc p-0">
                                        <ul class="nav flex-column sidebar-menu">
                                            <li class="nav-item active">
                                                <a href="dashboard.html" class="nav-link">
                                                    <i class="bi bi-house"></i>
                                                    <span>پروفایل</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('vitrinimg') }}/{{ $vitrin->catalog }}" download=""
                                                    class="nav-link">
                                                    <i class="bi bi-messenger"></i>
                                                    <span>دانلود کاتالوگ</span>
                                                </a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a href="Tel: 123-456-7890" class="nav-link">
                                                    <i class="bi bi-whatsapp"></i>
                                                    <span>پیام مستقیم</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="https://google.com" target="_blank" class="nav-link">
                                                    <i class="bi bi-globe"></i>
                                                    <span>وبسایت شرکت</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="https://google.com" target="_blank" class="nav-link">
                                                    <i class="bi bi-instagram"></i>
                                                    <span> شبکه اجتماعی </span>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="content-box" style="padding:12px;">
                            <div class="row">
                                <div class="col-12 dashboard-cart-col ash-bg-4 mb-2 p-4  align-items-center rounded">
                                    <div class="row flex-row-reverse justify-content-between">
                                        {{-- <div class="col-2 text-center"><a href="#"><i
                                                    class="bi bi-heart fs-4 text-danger"></i>
                                                <p class="ash-text3-s">علاقه مندی</p>
                                            </a></div> --}}
                                        @if ($vitrin->esalat != 0)
                                            <div class="col-2 text-center"><i
                                                    class="bi bi-bounding-box fs-4  text-primary"></i>
                                                <p class="ash-text3-s">زنجیره اصالت</p>
                                            </div>
                                        @endif
                                        @if ($vitrin->taeed != 0)
                                            <div class="col-2 text-center"><i
                                                    class="bi bi-patch-check-fill fs-4 text-success"></i>
                                                <p class="ash-text3-s"> مورد تایید</p>
                                            </div>
                                        @endif
                                        @if ($vitrin->konsers != 0)
                                            <div class="col-2 text-center"><i
                                                    class="bi bi-ui-radios-grid fs-4 text-primary"></i>
                                                <p class="ash-text3-s">عضو کنسرسیوم</p>
                                            </div>
                                        @endif
                                        @if ($vitrin->danesh != 0)
                                            <div class="col-2 text-center"><i class="bi bi-stack fs-4 text-warning"></i>
                                                <p class="ash-text3-s">دانش بنیان</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12 dashboard-cart-col">
                                    <div class="dashboard-cart ">
                                        <img class="w-100 h-100 p-2 ash-b-ra "
                                            src="{{ url('vitrinimg') }}/{{ $vitrin->baner }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ui-box">
                                        <div class="ui-box-item ui-box-white">
                                            <div class="ui-box-item-title">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="fw-bold">
                                                        اطلاعات تکمیلی
                                                    </h4>
                                                    <!-- <a class="btn-main btn-main-primary waves-effect waves-light waves-effect waves-light" href="">ویرایش <i
                                                                                                                                                                                                            class="bi bi-pencil-fill"></i></a> -->
                                                </div>
                                            </div>
                                            <div class="ui-box-item-desc p-0">
                                                <table class="table main-table shadow-none main-table-2">
                                                    <tr>
                                                        <td colspan="2">
                                                            <h6 class="text-muted">نام برند </h6>
                                                            <p class="fw-bold mt-2">{{ $vitrin->username }}</p>
                                                        </td>
                                                        <td colspan="2">
                                                            <h6 class="text-muted"> نیروی انسانی</h6>
                                                            <p class="fw-bold mt-2">
                                                                @switch($vitrin->size)
                                                                    @case(1)
                                                                        کوچک
                                                                    @break

                                                                    @case(2)
                                                                        متوسط
                                                                    @break

                                                                    @case(3)
                                                                        بزرگ
                                                                    @break

                                                                    @default
                                                                @endswitch
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h6>کشور</h6>
                                                            <p class="fw-bold mt-2">{{ $vitrin->country }}</p>
                                                        </td>
                                                        <td colspan="2">
                                                            <h6>استان</h6>
                                                            <p class="fw-bold mt-2">{{ $vitrin->state }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h6>شهر</h6>
                                                            <p class="fw-bold mt-2">{{ $vitrin->city }}</p>
                                                        </td>
                                                        {{-- <td colspan="2">
                                                            <h6>شروع فعالیت</h6>
                                                            <p class="fw-bold mt-2">1995</p>
                                                        </td> --}}

                                                    </tr>
                                                    {{-- <tr>
                                                        <td colspan="4">
                                                            <h6>آدرس: </h6>
                                                            <p class="fw-bold mt-2">ایران ، استان فارس
                                                            </p>
                                                        </td>
                                                    </tr> --}}
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if (
                                    $vitrin->prop1 != '' ||
                                        $vitrin->prop2 != '' ||
                                        $vitrin->prop3 != '' ||
                                        $vitrin->prop4 != '' ||
                                        $vitrin->prop5 != '')
                                    <div class="col-lg-6">
                                        <div class="ui-box">
                                            <div class="ui-box-item ui-box-white">
                                                <div class="ui-box-item-title">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h4 class="fw-bold">
                                                            ویژگی های ما
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="ui-box-item-desc">
                                                    <div class="product-list-row">
                                                        <div class="product-row">
                                                            <a href="product.html">
                                                                <div
                                                                    class="product-row-desc flex-column justify-content-evenly">
                                                                    @if ($vitrin->prop1 != '')
                                                                        <div class="product-row-desc-item">
                                                                            <i
                                                                                class="bi bi-check-circle-fill p-2 my-2 text-success"></i>
                                                                            <h6>{{ $vitrin->prop1 }}</h6>
                                                                        </div>
                                                                    @endif
                                                                    @if ($vitrin->prop2 != '')
                                                                        <div class="product-row-desc-item">
                                                                            <i
                                                                                class="bi bi-check-circle-fill p-2 my-2 text-success"></i>
                                                                            <h6>{{ $vitrin->prop2 }}</h6>
                                                                        </div>
                                                                    @endif
                                                                    @if ($vitrin->prop3 != '')
                                                                        <div class="product-row-desc-item">
                                                                            <i
                                                                                class="bi bi-check-circle-fill p-2 my-2 text-success"></i>
                                                                            <h6>{{ $vitrin->prop3 }}</h6>
                                                                        </div>
                                                                    @endif
                                                                    @if ($vitrin->prop4 != '')
                                                                        <div class="product-row-desc-item">
                                                                            <i
                                                                                class="bi bi-check-circle-fill p-2 my-2 text-success"></i>
                                                                            <h6>{{ $vitrin->prop4 }}</h6>
                                                                        </div>
                                                                    @endif
                                                                    @if ($vitrin->prop5 != '')
                                                                        <div class="product-row-desc-item">
                                                                            <i
                                                                                class="bi bi-check-circle-fill p-2 my-2 text-success"></i>
                                                                            <h6>{{ $vitrin->prop5 }}</h6>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif


                                <div class="col-12">
                                    <div class="ui-box">
                                        <div class="ui-box-item ui-box-white">
                                            <div class="ui-box-item-title">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="fw-bold">
                                                        درباره ی ما
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="ui-box-item-desc">
                                                <div class="notifi-desc p-2">
                                                    <i class="bi bi-1-circle-fill text-info"></i>
                                                    <p class="d-inline">
                                                        {!! $vitrin->aboutus !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="partner">
                                    <div class="container-fluid">
                                        <div class="partner-parrent ash-bg-4 rounded">
                                            <div class="d-flex align-items-center justify-content-between pb-3">
                                                <div class="pbt-header-title">
                                                    <h6 class="slider-title">گواهینامه ها و افتخارات ما</h6>
                                                </div>
                                            </div>
                                            <div class="swiper partnerSwipper-showcase">
                                                <div class="swiper-wrapper">

                                                    @if ($vitrin->cert1 != '')
                                                        <div class="swiper-slide partner-item">

                                                            <img src="{{ url('vitrinimg') }}/{{ $vitrin->cert1 }}"
                                                                class="img-fluid" alt="">

                                                        </div>
                                                    @endif
                                                    @if ($vitrin->cert2 != '')
                                                        <div class="swiper-slide partner-item">

                                                            <img src="{{ url('vitrinimg') }}/{{ $vitrin->cert2 }}"
                                                                class="img-fluid" alt="">

                                                        </div>
                                                    @endif
                                                    @if ($vitrin->cert3 != '')
                                                        <div class="swiper-slide partner-item">

                                                            <img src="{{ url('vitrinimg') }}/{{ $vitrin->cert3 }}"
                                                                class="img-fluid" alt="">

                                                        </div>
                                                    @endif
                                                    @if ($vitrin->cert4 != '')
                                                        <div class="swiper-slide partner-item">

                                                            <img src="{{ url('vitrinimg') }}/{{ $vitrin->cert4 }}"
                                                                class="img-fluid" alt="">

                                                        </div>
                                                    @endif
                                                    @if ($vitrin->cert5 != '')
                                                        <div class="swiper-slide partner-item">

                                                            <img src="{{ url('vitrinimg') }}/{{ $vitrin->cert5 }}"
                                                                class="img-fluid" alt="">

                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end partner -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="ui-boxs">
                            <div class="ui-box">
                                <div class="ui-box-item ui-box-white">
                                    <div class="ui-box-item-title" style="padding: 15px;">
                                        <h2 class="fw-bold">
                                            همه ی محصولات
                                        </h2>
                                    </div>
                                    <div class="ui-box-item-desc p-0">
                                        <div class="div">
                                            <div class="ui-box-item-desc" style="padding: 20px 30px;">
                                                <div class="row">

                                                    @foreach ($products as $product)
                                                        <div class="col-md-3 border-1 border py-2">
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
                                                                            <span class="favorite hint--right"
                                                                                data-hint="افزودن به برگزیده ها"><i
                                                                                    class="bi bi-heart"></i></span>
                                                                        </div>
                                                                    </div> --}}
                                                                </div>
                                                                <a href="product.html">
                                                                    <div class="product-box-item-desc">
                                                                        <div class="product-box-item-title">
                                                                            <h6>
                                                                                {{ $product->title }}
                                                                            </h6>
                                                                        </div>
                                                                        {{-- <div class="product-box-price default">
                                                                            <span class="new-price">590,000 تومان</span>
                                                                        </div> --}}
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach


                                                    <div
                                                        class="col-md-3 border-1 border py-2 justify-content-center align-items-center d-flex">
                                                        <div
                                                            class="product-box-item p-4 d-flex justify-content-center align-items-center ">
                                                            <a href="{{ route('productsuser', ['id' => $vitrin->userid]) }}">
                                                                <h3>مشاهده بیشتر +</h3>
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
        </div>
        <!-- end dashboard -->
    </div>
@endsection

@section('pagetitle')
    ویترین {{ $vitrin->username }}
@endsection
