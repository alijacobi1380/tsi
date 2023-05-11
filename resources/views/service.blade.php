@extends('layouts.main')


@section('content')
    <div class="content">
        <!-- start bradcrumb -->
        {{-- <div class="category-bread">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="product-meta-breadcrumb shadow-sm">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="#">خانه</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="#">سرویس های ما</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- end bradcrumb -->

        <!-- start about us -->

        <div class="services py-3">
            <div class="container-fluid">
                <div class="content-box shadow-box p-3 p-md-5 ash-bg-2">
                    <h4 class="text-light fw-bold title-heading">
                        به صفحه سرویس های تی اس آی خوش آمدید
                    </h4>
                    <br>
                    <!-- <h5 class="text-muted-2 fw-bold title-heading">اینجا پیداش میکنی!</h5>   -->
                    <div class="row justify-content-md-evenly justify-content-center services-row">
                        <button role="button" class="col-10 col-md-5 col-lg-3 m-2 ash-service-card">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-4 align-items-center">
                                    <img class="w-75 rounded-circle" src="img/Tsi/Service-Icons/service-1.png"
                                        alt="">
                                </div>
                                <div class="col-8 align-items-center">
                                    <h6 class="fw-bold">ویترین بین الملل</h6>
                                </div>
                            </div>
                        </button>
                        <button role="button" class="col-10 col-md-5 col-lg-3 m-2 ash-service-card">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-4 align-items-center">
                                    <img class="w-75 rounded-circle" src="img/Tsi/Service-Icons/service-2.png "
                                        alt=" ">
                                </div>
                                <div class="col-8 align-items-center">
                                    <h6 class="fw-bold">رایزن تجاری و <br> بازاریاب بین الملل</h6>
                                </div>
                            </div>
                        </button>
                        <button role="button" class="col-10 col-md-5 col-lg-3 m-2 ash-service-card">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-4 align-items-center">
                                    <img class="w-75 rounded-circle" src="img/Tsi/Service-Icons/service-5.png"
                                        alt="">
                                </div>
                                <div class="col-8 align-items-center">
                                    <h6 class="fw-bold">برندینگ، شبکه اجتماعی و محتوای دیجیتال </h6>
                                </div>
                            </div>
                        </button>
                        <button role="button" class="col-10 col-md-5 col-lg-3 m-2 ash-service-card">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-4 align-items-center">
                                    <img class="w-75 rounded-circle" src="img/Tsi/Service-Icons/service-7.png"
                                        alt="">
                                </div>
                                <div class="col-8 align-items-center">
                                    <h6 class="fw-bold">حمل بار بین الملل </h6>
                                </div>
                            </div>
                        </button>
                        <button role="button" class="col-10 col-md-5 col-lg-3 m-2 ash-service-card">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-4 align-items-center">
                                    <img class="w-75 rounded-circle" src="img/Tsi/Service-Icons/service-6.png"
                                        alt="">
                                </div>
                                <div class="col-8 align-items-center">
                                    <h6 class="fw-bold">تدوین استراتژی بازار </h6>
                                </div>
                            </div>
                        </button>
                        <button role="button" class="col-10 col-md-5 col-lg-3 m-2 ash-service-card">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-4 align-items-center">
                                    <img class="w-75 rounded-circle" src="img/Tsi/Service-Icons/service-3.png"
                                        alt="">
                                </div>
                                <div class="col-8 align-items-center">
                                    <h6 class="fw-bold">سرویس توسعه سامانه <br> و نرم افزار</h6>
                                </div>
                            </div>
                        </button>

                    </div>
                </div>

                {{-- <div class="content-box shadow-box py-5">
                    <div class="product-descs" id="prodesc">
                        <div class="container-fluid">
                            <div class="product-desc shadow-md">
                                <div class="product-desc-tab">
                                    <ul class="nav" id="productTab" role="tablist">
                                        <li class="nav-item">
                                            <button class="active waves-effect waves-light" id="productDescLess"
                                                data-bs-toggle="tab" data-bs-target="#productDescLess-pane" role="tab"
                                                type="button" aria-selected="true"><a href="#prodesc"><i
                                                        class="bi bi-briefcase"></i> فنی و تکنیکی</a></button>
                                        </li>
                                        <li class="nav-item">
                                            <button class=" waves-effect waves-light" id="productDesc" data-bs-toggle="tab"
                                                data-bs-target="#productDesc-pane" role="tab" type="button"
                                                aria-selected="true"><a href="#prodesc"><i class="bi bi-file-text"></i> خرید
                                                    و فروش</a></button>
                                        </li>
                                        <li class="nav-item">
                                            <button class=" waves-effect waves-light" id="productTable"
                                                data-bs-toggle="tab" data-bs-target="#productTable-pane" role="tab"
                                                type="button" aria-selected="false"><a href="#prodesc"><i
                                                        class="bi bi-grid"></i> تامین کنندگان </a></button>
                                        </li>
                                        <li class="nav-item">
                                            <button class=" waves-effect waves-light" id="productComment"
                                                data-bs-toggle="tab" data-bs-target="#productComment-pane" role="tab"
                                                type="button" aria-selected="false"><a href="#prodesc"><i
                                                        class="bi bi-shield-check"></i>حریم شخصی و امنیت</a></button>
                                        </li>
                                        <li class="nav-item">
                                            <button class=" waves-effect waves-light" id="productAnswer"
                                                data-bs-toggle="tab" data-bs-target="#productAnswer-pane" role="tab"
                                                type="button" aria-selected="false"><a href="#prodesc"><i
                                                        class="bi bi-question"></i>پرسش و پاسخ</a></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-desc-tab-content">
                                    <div class="tab-content" id="productTabContent">
                                        <div class="tab-pane fade show active product-desc-less-contents"
                                            id="productDescLess-pane">
                                            <div class="product-desc-content">
                                                <input type="checkbox" class="read-more-state" id="readMore3" />
                                                <!-- والد بیشتر ، کمتر ، تمام متن توضیحات باید داخل این تگ قرار بگیرند -->
                                                <div class="read-more-wrap">
                                                    <h2 class="title gold mb-2">فنی</h2>
                                                    <p>
                                                        اگر به دنبال تهیه یک هدفون بی‌سیم گیمینگ هستید، هدفون بلوتوثی
                                                        مدل K55 به‌عنوان
                                                        یکی از جدیدترین گزینه‌های موجود در بازار ارزش بررسی را دارد. این
                                                        مدل با ابعادی
                                                        کوچک تولید شده است. ابعاد و وزن کم آن، جابه‌جایی این وسیله و
                                                        استفاده طولانی‌مدت
                                                        از آن را آسان می‌کند و باعث خستگی گوش‌ها نخواهد شد. این مدل برای
                                                        اتصال به
                                                        دستگاه‌ به بلوتوث نسخه 5.0 مجهز شده است و در مدت زمان اندکی،
                                                        اتصال با گوشی
                                                        موبایل اندروید یا ios شما برقرار خواهد شد. هدفون بی سیم K55
                                                        دارای یک میکروفون با
                                                        کیفیت است و ...
                                                    </p>
                                                    <!-- متن بیشتر -->
                                                    <div class="read-more-target">
                                                        اگر به دنبال تهیه یک هدفون بی‌سیم گیمینگ هستید، هدفون بلوتوثی
                                                        مدل K55 به‌عنوان
                                                        یکی از جدیدترین گزینه‌های موجود در بازار ارزش بررسی را دارد. این
                                                        مدل با ابعادی
                                                        کوچک تولید شده است. ابعاد و وزن کم آن، جابه‌جایی این وسیله و
                                                        استفاده طولانی‌مدت
                                                        از آن را آسان می‌کند و باعث خستگی گوش‌ها نخواهد شد. این مدل برای
                                                        اتصال به
                                                        دستگاه‌ به بلوتوث نسخه 5.0 مجهز شده است و در مدت زمان اندکی،
                                                        اتصال با گوشی
                                                        موبایل اندروید یا ios شما برقرار خواهد شد. هدفون بی سیم K55
                                                        دارای یک میکروفون با
                                                        کیفیت است و این ویژگی، آن را برای مکالمه مناسب می‌سازد. از
                                                        ویژگی‌های اصلی این
                                                        محصول محفظه نگهدارنده یا همان کیس آن است. این کیس قابلیت شارژ
                                                        هدفون را دارد.
                                                        برای شارژ آن کافی است از درگاه USB-C تعبیه شده بر روی کیس و کابل
                                                        شارژ درون
                                                        بسته‌بندی استفاده کنید. گفتنی است باتری 400 میلی‌آمپر ساعتی این
                                                        هدفون در حدود
                                                        4-6 ساعت مکالمه و 4-6 ساعت پخش موسیقی را پاسخ‌گو خواهد بود.
                                                    </div>
                                                    <!-- پایان متن بیشتر -->
                                                </div>
                                                <!-- پایان والد بیشتر کمتر -->
                                                <label for="readMore3" class="read-more-trigger"></label>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade product-desc-contents" id="productDesc-pane">
                                            <div class="product-desc-content">
                                                <input type="checkbox" class="read-more-state" id="readMore3" />
                                                <!-- والد بیشتر ، کمتر ، تمام متن توضیحات باید داخل این تگ قرار بگیرند -->
                                                <div class="read-more-wrap">
                                                    <h2 class="title gold mb-2">فنی</h2>
                                                    <p>
                                                        اگر به دنبال تهیه یک هدفون بی‌سیم گیمینگ هستید، هدفون بلوتوثی
                                                        مدل K55 به‌عنوان
                                                        یکی از جدیدترین گزینه‌های موجود در بازار ارزش بررسی را دارد. این
                                                        مدل با ابعادی
                                                        کوچک تولید شده است. ابعاد و وزن کم آن، جابه‌جایی این وسیله و
                                                        استفاده طولانی‌مدت
                                                        از آن را آسان می‌کند و باعث خستگی گوش‌ها نخواهد شد. این مدل برای
                                                        اتصال به
                                                        دستگاه‌ به بلوتوث نسخه 5.0 مجهز شده است و در مدت زمان اندکی،
                                                        اتصال با گوشی
                                                        موبایل اندروید یا ios شما برقرار خواهد شد. هدفون بی سیم K55
                                                        دارای یک میکروفون با
                                                        کیفیت است و ...
                                                    </p>
                                                    <!-- متن بیشتر -->
                                                    <div class="read-more-target">
                                                        اگر به دنبال تهیه یک هدفون بی‌سیم گیمینگ هستید، هدفون بلوتوثی
                                                        مدل K55 به‌عنوان
                                                        یکی از جدیدترین گزینه‌های موجود در بازار ارزش بررسی را دارد. این
                                                        مدل با ابعادی
                                                        کوچک تولید شده است. ابعاد و وزن کم آن، جابه‌جایی این وسیله و
                                                        استفاده طولانی‌مدت
                                                        از آن را آسان می‌کند و باعث خستگی گوش‌ها نخواهد شد. این مدل برای
                                                        اتصال به
                                                        دستگاه‌ به بلوتوث نسخه 5.0 مجهز شده است و در مدت زمان اندکی،
                                                        اتصال با گوشی
                                                        موبایل اندروید یا ios شما برقرار خواهد شد. هدفون بی سیم K55
                                                        دارای یک میکروفون با
                                                        کیفیت است و این ویژگی، آن را برای مکالمه مناسب می‌سازد. از
                                                        ویژگی‌های اصلی این
                                                        محصول محفظه نگهدارنده یا همان کیس آن است. این کیس قابلیت شارژ
                                                        هدفون را دارد.
                                                        برای شارژ آن کافی است از درگاه USB-C تعبیه شده بر روی کیس و کابل
                                                        شارژ درون
                                                        بسته‌بندی استفاده کنید. گفتنی است باتری 400 میلی‌آمپر ساعتی این
                                                        هدفون در حدود
                                                        4-6 ساعت مکالمه و 4-6 ساعت پخش موسیقی را پاسخ‌گو خواهد بود.
                                                    </div>
                                                    <!-- پایان متن بیشتر -->
                                                </div>
                                                <!-- پایان والد بیشتر کمتر -->
                                                <label for="readMore3" class="read-more-trigger"></label>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="productTable-pane">
                                            <div class="product-desc-content">
                                                <input type="checkbox" class="read-more-state" id="readMore3" />
                                                <!-- والد بیشتر ، کمتر ، تمام متن توضیحات باید داخل این تگ قرار بگیرند -->
                                                <div class="read-more-wrap">
                                                    <h2 class="title gold mb-2">فنی</h2>
                                                    <p>
                                                        اگر به دنبال تهیه یک هدفون بی‌سیم گیمینگ هستید، هدفون بلوتوثی
                                                        مدل K55 به‌عنوان
                                                        یکی از جدیدترین گزینه‌های موجود در بازار ارزش بررسی را دارد. این
                                                        مدل با ابعادی
                                                        کوچک تولید شده است. ابعاد و وزن کم آن، جابه‌جایی این وسیله و
                                                        استفاده طولانی‌مدت
                                                        از آن را آسان می‌کند و باعث خستگی گوش‌ها نخواهد شد. این مدل برای
                                                        اتصال به
                                                        دستگاه‌ به بلوتوث نسخه 5.0 مجهز شده است و در مدت زمان اندکی،
                                                        اتصال با گوشی
                                                        موبایل اندروید یا ios شما برقرار خواهد شد. هدفون بی سیم K55
                                                        دارای یک میکروفون با
                                                        کیفیت است و ...
                                                    </p>
                                                    <!-- متن بیشتر -->
                                                    <div class="read-more-target">
                                                        اگر به دنبال تهیه یک هدفون بی‌سیم گیمینگ هستید، هدفون بلوتوثی
                                                        مدل K55 به‌عنوان
                                                        یکی از جدیدترین گزینه‌های موجود در بازار ارزش بررسی را دارد. این
                                                        مدل با ابعادی
                                                        کوچک تولید شده است. ابعاد و وزن کم آن، جابه‌جایی این وسیله و
                                                        استفاده طولانی‌مدت
                                                        از آن را آسان می‌کند و باعث خستگی گوش‌ها نخواهد شد. این مدل برای
                                                        اتصال به
                                                        دستگاه‌ به بلوتوث نسخه 5.0 مجهز شده است و در مدت زمان اندکی،
                                                        اتصال با گوشی
                                                        موبایل اندروید یا ios شما برقرار خواهد شد. هدفون بی سیم K55
                                                        دارای یک میکروفون با
                                                        کیفیت است و این ویژگی، آن را برای مکالمه مناسب می‌سازد. از
                                                        ویژگی‌های اصلی این
                                                        محصول محفظه نگهدارنده یا همان کیس آن است. این کیس قابلیت شارژ
                                                        هدفون را دارد.
                                                        برای شارژ آن کافی است از درگاه USB-C تعبیه شده بر روی کیس و کابل
                                                        شارژ درون
                                                        بسته‌بندی استفاده کنید. گفتنی است باتری 400 میلی‌آمپر ساعتی این
                                                        هدفون در حدود
                                                        4-6 ساعت مکالمه و 4-6 ساعت پخش موسیقی را پاسخ‌گو خواهد بود.
                                                    </div>
                                                    <!-- پایان متن بیشتر -->
                                                </div>
                                                <!-- پایان والد بیشتر کمتر -->
                                                <label for="readMore3" class="read-more-trigger"></label>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade product-comment-content" id="productComment-pane">
                                            <h4 class="text-muted-2 fw-bold">امتیاز کاربران به :</h4>
                                            <span class="fw-bold d-block mt-2 text-muted font-12">هندفری بلوتوث (103
                                                نفر)
                                            </span>
                                            <div class="product-desc-content">
                                                <input type="checkbox" class="read-more-state" id="readMore3" />
                                                <!-- والد بیشتر ، کمتر ، تمام متن توضیحات باید داخل این تگ قرار بگیرند -->
                                                <div class="read-more-wrap">
                                                    <h2 class="title gold mb-2">فنی</h2>
                                                    <p>
                                                        اگر به دنبال تهیه یک هدفون بی‌سیم گیمینگ هستید، هدفون بلوتوثی
                                                        مدل K55 به‌عنوان
                                                        یکی از جدیدترین گزینه‌های موجود در بازار ارزش بررسی را دارد. این
                                                        مدل با ابعادی
                                                        کوچک تولید شده است. ابعاد و وزن کم آن، جابه‌جایی این وسیله و
                                                        استفاده طولانی‌مدت
                                                        از آن را آسان می‌کند و باعث خستگی گوش‌ها نخواهد شد. این مدل برای
                                                        اتصال به
                                                        دستگاه‌ به بلوتوث نسخه 5.0 مجهز شده است و در مدت زمان اندکی،
                                                        اتصال با گوشی
                                                        موبایل اندروید یا ios شما برقرار خواهد شد. هدفون بی سیم K55
                                                        دارای یک میکروفون با
                                                        کیفیت است و ...
                                                    </p>
                                                    <!-- متن بیشتر -->
                                                    <div class="read-more-target">
                                                        اگر به دنبال تهیه یک هدفون بی‌سیم گیمینگ هستید، هدفون بلوتوثی
                                                        مدل K55 به‌عنوان
                                                        یکی از جدیدترین گزینه‌های موجود در بازار ارزش بررسی را دارد. این
                                                        مدل با ابعادی
                                                        کوچک تولید شده است. ابعاد و وزن کم آن، جابه‌جایی این وسیله و
                                                        استفاده طولانی‌مدت
                                                        از آن را آسان می‌کند و باعث خستگی گوش‌ها نخواهد شد. این مدل برای
                                                        اتصال به
                                                        دستگاه‌ به بلوتوث نسخه 5.0 مجهز شده است و در مدت زمان اندکی،
                                                        اتصال با گوشی
                                                        موبایل اندروید یا ios شما برقرار خواهد شد. هدفون بی سیم K55
                                                        دارای یک میکروفون با
                                                        کیفیت است و این ویژگی، آن را برای مکالمه مناسب می‌سازد. از
                                                        ویژگی‌های اصلی این
                                                        محصول محفظه نگهدارنده یا همان کیس آن است. این کیس قابلیت شارژ
                                                        هدفون را دارد.
                                                        برای شارژ آن کافی است از درگاه USB-C تعبیه شده بر روی کیس و کابل
                                                        شارژ درون
                                                        بسته‌بندی استفاده کنید. گفتنی است باتری 400 میلی‌آمپر ساعتی این
                                                        هدفون در حدود
                                                        4-6 ساعت مکالمه و 4-6 ساعت پخش موسیقی را پاسخ‌گو خواهد بود.
                                                    </div>
                                                    <!-- پایان متن بیشتر -->
                                                </div>
                                                <!-- پایان والد بیشتر کمتر -->
                                                <label for="readMore3" class="read-more-trigger"></label>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="productAnswer-pane">
                                            <h4 class="text-muted-2 fw-bold mt-4">پرسش و پاسخ</h4>
                                            <span class="fw-bold d-block mt-2 text-muted font-12">پرسش خود را در هر زمینه
                                                ای که پیدا نکردید اینجا
                                                مطرح
                                                نمایید</span>

                                            <div class="box_questions mt-4">
                                                <form>
                                                    <div class="form-group">
                                                        <textarea class="form-control mb-3" rows="3" placeholder="هر سوالی در مورد این محصول به ذهنتان میرسید بپرسید!"></textarea>
                                                    </div>
                                                </form>
                                                <div class="row">
                                                    <div class="col-lg-2 col-12 text-center">
                                                        <a href="#" class="btn btn_custom3 btn-lg shadow-sm">ثبت
                                                            پرسش</a>
                                                    </div>
                                                    <div class="col-lg-9 col-12 m-0 p-0 pt-3 pt-lg-0 email_check">
                                                        <form action="">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    اولین پاسخی که به پرسش من داده شد، از طریق ایمیل به
                                                                    من اطلاع
                                                                    دهید. <br>
                                                                    با انتخاب دکمه “ثبت پرسش”، موافقت خود را با <a
                                                                        href="#" class="primary-span">قوانین
                                                                        انتشار
                                                                        محتوا</a>
                                                                    در تی اس آی
                                                                    اعلام می کنم.
                                                                </label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="box_filter mt-5 border-bottom">
                                                    <div class="row">
                                                        <div class="col-md-4 pb-3">
                                                            <p class="title-comment-product">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-arrow-down-left-circle-fill"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-5.904-2.803a.5.5 0 1 1 .707.707L6.707 10h2.768a.5.5 0 0 1 0 1H5.5a.5.5 0 0 1-.5-.5V6.525a.5.5 0 0 1 1 0v2.768l4.096-4.096z" />
                                                                </svg>
                                                                پرسش ها و پاسخ ها
                                                                <small class="text-muted">( ۲۲
                                                                    پرسش )</small>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-8 bf2 text-md-right text-center">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">مرتب سازی بر اساس :</li>
                                                                <li class="list-inline-item"><a href="#">جدیدترین
                                                                        پرسش</a></li>
                                                                <li class="list-inline-item"><a href="#"
                                                                        class="active_custom">بیشترین
                                                                        پاسخ به
                                                                        پرسش</a></li>
                                                                <li class="list-inline-item"><a href="#"> پرسش های
                                                                        شما</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="box_questions mt-4">
                                                    <div class="row bs-qu">
                                                        <div class="col-lg-2 bq1 text-center">
                                                            <i class="bi bi-question-circle-fill"></i>
                                                            <br>
                                                            <span class="span1">پرسش</span>
                                                            <br>
                                                            <span class="span2">فرزاد عباسقلی زاده</span>
                                                        </div>
                                                        <div class="col-lg-10 bq2">
                                                            <p>سلام چطوری دو گوشی همزمان پخش میکنه ؟ </p>

                                                            <div class="row bq-footer">
                                                                <div class="col-md-5 col-6 my-flex-align-end">
                                                                    <span class="date"> ۱۶ مهر ۱۳۹۷
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-7 col-6 text-end pe-0">
                                                                    <a href="#" class="d-none d-sm-block">
                                                                        <span class="primary-span">به این پرسش پاسخ دهید
                                                                            (۱ پاسخ)</span>
                                                                    </a><a href="#"
                                                                        class="d-sm-none d-block">پاسخ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row bs-qu">
                                                        <div class="col-lg-2 bq1 text-center">
                                                            <i class="bi bi-chat-dots-fill"></i>
                                                            <br>
                                                            <span class="span1">پاسخ</span>
                                                            <br>
                                                            <span class="span2">حسین زارع</span>
                                                        </div>
                                                        <div class="col-lg-10 bq2 bg-transparent">
                                                            <p>حوه راه اندازی: (خیلی دربارش پرسیده بودند): اول: بلوتوث
                                                                گوشی خود را
                                                                خاموش کنید.
                                                                دوم: لطفا
                                                                کلید های چند منظوره در هر دو هدفون را همزمان فشار دهید
                                                            </p>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-lg-5 col-12 my-flex-align-end">
                                                                    <span class="date">۲۲ مهر ۱۳۹۷
                                                                    </span>
                                                                </div>
                                                                <div class=" col-lg-7 col-12 text-start p-0">
                                                                    <div class="comments_likes">
                                                                        <div class="row">
                                                                            <div class="col-sm-9 col-lg-8">
                                                                                <span
                                                                                    class="mr-4 mt-1 text-sm-end text-center">
                                                                                    ایا این نظر برایتان مفید بود ؟
                                                                                </span>
                                                                            </div>
                                                                            <div
                                                                                class="col-sm-3 col-lg-4 text-sm-end text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center justify-content-sm-between justify-content-center">
                                                                                    <a href="#"
                                                                                        class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"><svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            width="16" height="16"
                                                                                            fill="currentColor"
                                                                                            class="bi bi-hand-thumbs-up-fill"
                                                                                            viewBox="0 0 16 16">
                                                                                            <path
                                                                                                d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                                                                        </svg> 70</a>
                                                                                    <a href="#"
                                                                                        class="btn btn-like btn-like-dislike mt-1 mt-md-0"><svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            width="16" height="16"
                                                                                            fill="currentColor"
                                                                                            class="bi bi-hand-thumbs-down-fill"
                                                                                            viewBox="0 0 16 16">
                                                                                            <path
                                                                                                d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
                                                                                        </svg> 7</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="box_questions mt-4">
                                                    <div class="row bs-qu">
                                                        <div class="col-lg-2 bq1 text-center">
                                                            <i class="bi bi-question-circle-fill"></i>
                                                            <br>
                                                            <span class="span1">پرسش</span>
                                                            <br>
                                                            <span class="span2">فرزاد عباسقلی زاده</span>
                                                        </div>
                                                        <div class="col-lg-10 bq2">
                                                            <p>سلام چطوری دو گوشی همزمان پخش میکنه ؟ </p>

                                                            <div class="row bq-footer">
                                                                <div class="col-md-5 col-6 my-flex-align-end">
                                                                    <span class="date"> ۱۶ مهر ۱۳۹۷
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-7 col-6 text-end pe-0">
                                                                    <a href="#" class="d-none d-sm-block">
                                                                        <span class="primary-span">به این پرسش پاسخ دهید
                                                                            (۱ پاسخ)</span>
                                                                    </a><a href="#"
                                                                        class="d-sm-none d-block">پاسخ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row bs-qu">
                                                        <div class="col-lg-2 bq1 text-center">
                                                            <i class="bi bi-chat-dots-fill"></i>
                                                            <br>
                                                            <span class="span1">پاسخ</span>
                                                            <br>
                                                            <span class="span2">حسین زارع</span>
                                                        </div>
                                                        <div class="col-lg-10 bq2 bg-transparent">
                                                            <p>حوه راه اندازی: (خیلی دربارش پرسیده بودند): اول: بلوتوث
                                                                گوشی خود را
                                                                خاموش کنید.
                                                                دوم: لطفا
                                                                کلید های چند منظوره در هر دو هدفون را همزمان فشار دهید
                                                            </p>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-lg-5 col-12 my-flex-align-end">
                                                                    <span class="date">۲۲ مهر ۱۳۹۷
                                                                    </span>
                                                                </div>
                                                                <div class=" col-lg-7 col-12 text-start p-0">
                                                                    <div class="comments_likes">
                                                                        <div class="row">
                                                                            <div class="col-sm-9 col-lg-8">
                                                                                <span
                                                                                    class="mr-4 mt-1 text-sm-end text-center">
                                                                                    ایا این نظر برایتان مفید بود ؟
                                                                                </span>
                                                                            </div>
                                                                            <div
                                                                                class="col-sm-3 col-lg-4 text-sm-end text-center">
                                                                                <div
                                                                                    class="d-flex align-items-center justify-content-sm-between justify-content-center">
                                                                                    <a href="#"
                                                                                        class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"><svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            width="16" height="16"
                                                                                            fill="currentColor"
                                                                                            class="bi bi-hand-thumbs-up-fill"
                                                                                            viewBox="0 0 16 16">
                                                                                            <path
                                                                                                d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                                                                        </svg> 70</a>
                                                                                    <a href="#"
                                                                                        class="btn btn-like btn-like-dislike mt-1 mt-md-0"><svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            width="16" height="16"
                                                                                            fill="currentColor"
                                                                                            class="bi bi-hand-thumbs-down-fill"
                                                                                            viewBox="0 0 16 16">
                                                                                            <path
                                                                                                d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
                                                                                        </svg> 7</a>
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
                            </div>
                        </div>
                    </div>
                    <!-- end product desc -->
                </div> --}}
            </div>
        </div>

        <!-- end about us -->


    </div>
@endsection

@section('pagetitle')
    خدمات ما
@endsection
