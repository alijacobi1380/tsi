@extends('layouts.main')


@section('content')
    <div class="content">
        {{-- <!-- start bradcrumb -->
        <div class="category-bread">
            <div class="container-fluid">
                <div class="row">
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
                                        <span>دسته بندی محصولات دیجیتال</span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end bradcrumb --> --}}


        <!-- start category -->
        <div class="category">
            <div class="container-fluid">
                {{-- <div class="filter-items shadow-box">
                    <div class="items">
                        <div class="link d-md-block d-none">
                            <a href="" class="active">پیشفرض</a>
                            <a href="" class="waves-effect waves-light">محبوب ترین</a>
                            <a href="" class="waves-effect waves-light">پرفروش ترین</a>
                            <a href="" class="waves-effect waves-light">جدیدترین</a>
                            <a href="" class="waves-effect waves-light">ارزان ترین</a>
                            <a href="" class="waves-effect waves-light">گران ترین</a>
                        </div>
                        <div class="count">
                            <p>مشاهده همه</p>
                        </div>
                        <div class="link-responsive d-md-none d-block">
                            <form action="">
                                <select class="form-select bg-light">
                                    <option>پیشفرض</option>
                                    <option>محبوب ترین</option>
                                    <option>پر فروش ترین</option>
                                    <option>جدیدترین</option>
                                    <option>ارزان ترین</option>
                                    <option>گران ترین</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-lg-3">
                        <div class="category-filters">
                            {{-- <div class="category-filter">
                                <div class="category-filter-box">
                                    <div class="category-filter-box-title">
                                        <h4 class="fw-bold">
                                            فیلتر موجودی و حراجی
                                        </h4>
                                    </div>
                                    <div class="category-filter-box-desc">
                                        <form action="">
                                            <div class="form-group form-check">
                                                <input class="form-check-input" type="radio" id="ProductOfferd"
                                                    name="available">
                                                <label class="form-check-label" for="ProductOfferd">محصولات تخفیف
                                                    خورده</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-check-input" type="radio" id="availableInStock"
                                                    name="available">
                                                <label class="form-check-label" for="availableInStock">موجود در
                                                    انبار</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="category-filter">
                                <div class="category-filter-box">
                                    <div class="category-filter-box-title">
                                        <h4 class="fw-bold">
                                            دسته بندی تامین کنندگان
                                        </h4>
                                    </div>
                                    <div class="category-filter-box-desc">
                                        <ul class="category-filter-resoult">

                                            <ul>

                                                <ul>
                                                    @foreach ($categorys as $category)
                                                        <li class="ps-3 py-1"><a
                                                                href="{{ route('productscategory', ['id' => $category->id]) }}"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="12"
                                                                    height="12" fill="currentColor"
                                                                    class="bi bi-chevron-left me-1" viewBox="0 0 16 16"
                                                                    stroke="black">
                                                                    <path fill-rule="evenodd"
                                                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                                </svg>
                                                                @if ($category->subcat == 0)
                                                                    {{ $category->title }}
                                                                @endif
                                                            </a>
                                                            <ul>
                                                                @foreach ($categorys as $cat)
                                                                    @if ($category->id == $cat->subcat)
                                                                        <li class="ps-3 py-1"><a
                                                                                href="{{ route('productscategory', ['id' => $product->id]) }}">{{ $cat->title }}</a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>

                                            </ul>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="category-filter">
                                <div class="category-filter-box">
                                    <div class="category-filter-box-title">
                                        <h4 class="fw-bold">
                                            فیلتر متنوع
                                        </h4>
                                    </div>
                                    <div class="category-filter-box-desc">
                                        <form action="">
                                            <div class="form-group form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">ریجیستر
                                                    شده</label>
                                            </div>
                                            <div class="form-group form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">طرح اصلی
                                                    بودن کالا</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="category-filter">
                                <div class="category-filter-box">
                                    <div class="category-filter-box-title">
                                        <h4 class="fw-bold">
                                            فیلتر برند
                                        </h4>
                                    </div>
                                    <div class="category-filter-box-desc">
                                        <form action="">
                                            <div class="form-group">
                                                <select class="form-select select2-box" name="state">
                                                    <option value="AL">سامسونگ</option>
                                                    <option value="WY">الجی</option>
                                                    <option value="WY">شیائومی</option>
                                                    <option value="WY">اپل</option>
                                                    <option value="WY">جی ال ایکس</option>
                                                    <option value="WY">لنوو</option>
                                                    <option value="WY">ایسوس</option>
                                                </select>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="category-filter">
                                <div class="category-filter-box">
                                    <div class="category-filter-box-title">
                                        <h4 class="fw-bold">
                                            محدوده قیمت
                                        </h4>
                                    </div>
                                    <div class="category-filter-box-desc">
                                        <form action="" method="get">
                                            <div class="form-group">
                                                <input type="range" id="catRange" name="range[]">
                                                <div class="show-more-btn mt-2">
                                                    <button class="shadow-box waves-effect waves-light"
                                                        type="submit">اعمال فیلتر <i class="bi bi-filter"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="category-filter">
                                <div class="category-filter-box">
                                    <div class="category-filter-box-title">
                                        <h4 class="fw-bold">
                                            فیلتر رنگ
                                        </h4>
                                    </div>
                                    <div class="category-filter-box-desc">
                                        <div class="color-box">
                                            <div class="color-box-item" data-toggle="tooltip" data-placement="top"
                                                title="نام رنگ مورد نظر">
                                                <span class="color bg-danger"></span>
                                            </div>
                                            <div class="color-box-item active" data-toggle="tooltip" data-placement="top"
                                                title="نام رنگ مورد نظر">
                                                <span class="color bg-primary"></span>
                                            </div>
                                            <div class="color-box-item" data-toggle="tooltip" data-placement="top"
                                                title="نام رنگ مورد نظر">
                                                <span class="color bg-warning"></span>
                                            </div>
                                            <div class="color-box-item" data-toggle="tooltip" data-placement="top"
                                                title="نام رنگ مورد نظر">
                                                <span class="color bg-success"></span>
                                            </div>
                                            <div class="color-box-item" data-toggle="tooltip" data-placement="top"
                                                title="نام رنگ مورد نظر">
                                                <span class="color bg-secondary"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="category-item">
                            <div class="row">


                                @foreach ($vitrins as $vitrin)
                                    <div class="col-12">
                                        <div class="product-row shadow-box rounded-3 mb-3">
                                            <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}">
                                                <div class="product-row-desc justify-content-start">
                                                    <div class="product-row-desc-item">
                                                        <div class="product-row-img">
                                                            <img src="{{ url('vitrinimg') }}/{{ $vitrin->logo }}"
                                                                alt="" class="" width="150">
                                                        </div>
                                                        <div class="product-row-title">
                                                            <h6 class="font-16">{{ $vitrin->username }}</h6>
                                                            <div class="product-price">
                                                                <p class="me-2" style="color:#c3c1c1">
                                                                    {{ $vitrin->desc }}</p>
                                                            </div>
                                                            <a href="{{ route('showvitrin', ['id' => $vitrin->userid]) }}"
                                                                class="btnx btnx-default">مشاهده تامین کننده</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end category -->

        {{-- <div class="show-more">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="show-more-btn">
                            <button class="shadow-box waves-effect waves-light">مشاهده بیشتر <i
                                    class="bi bi-arrow-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
@endsection

@section('pagetitle')
    تامین کنندگان
@endsection
