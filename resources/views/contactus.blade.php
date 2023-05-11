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
                                        <span>درباره ما</span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end bradcrumb --> --}}


        <div class="content about-us py-3">
            <section class="m-4">
                <div class="container">
                    <div class="row content">
                        <div class="col-12  col-sm-6 col-lg-3 contact-card">
                            <div class="box-icon-contact-us">
                                <div class="card">
                                    <div class="card-body d-flex flex-column p-4">
                                        <i class="bi bi-mailbox align-self-end text-success fs-1"></i>
                                        <h5 class="card-title">آدرس ایمیل</h5>
                                        <p>
                                            tsicommerce.gmail.com </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  col-sm-6 col-lg-3 contact-card">
                            <div class="box-icon-contact-us">
                                <div class="card">
                                    <div class="card-body d-flex flex-column px-4 py-3">
                                        <i class="bi bi-telephone-fill align-self-end text-primary fs-1"></i>
                                        <h5 class="card-title">تلفن های تماس</h5>
                                        <p>
                                            همراه :
                                            09125235525 </p>
                                        <p>
                                            ثابت :
                                            08632246370 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  col-sm-6 col-lg-3 contact-card">
                            <div class="box-icon-contact-us">
                                <div class="card">
                                    <div class="card-body d-flex flex-column p-4">
                                        <i class="bi bi-map-fill align-self-end text-success fs-1"></i>
                                        <h5 class="card-title">آدرس</h5>
                                        <p>
                                            ایران ، تهران</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  col-sm-6 col-lg-3 contact-card">
                            <div class="box-icon-contact-us">
                                <div class="card">
                                    <div class="card-body d-flex flex-column p-4">
                                        <i class="bi bi-clock-fill align-self-end text-primary fs-1"></i>
                                        <h5 class="card-title">روزهای کاری</h5>
                                        <p>
                                            شنبه تا چهارشنبه </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <!-- start about us -->
{{-- 
        <div class="about-us py-3">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class="content-box shadow-box p-5 col-md-8">
                    <h4 class="text-muted-2  fw-bold title-heading">
                        تماس با ما
                    </h4>
                    <p class="text-muted-2 lh-lg my-3" style="text-align: justify;">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                        و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته.
                    </p>
                    <div class="comment-form mt-5">
                        <h6 class="tab-title mt-3">دیدگاه خود را بنویسید</h6>
                        <form action="">

                            <div class="form-group mb-2">
                                <label for="commentbody" class="form-label my-3">دیدگاه شما <span
                                        class="text-danger ms-1">*</span></label>
                                <textarea id="commentbody" rows="7" class="form-control" placeholder="دیدگاه شما" required></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-inline w-100">
                                            <label for="commentName" class="form-label my-3">نام شما
                                                <span class="text-danger ms-1">*</span></label>
                                            <input type="text" id="commentName" class="form-control"
                                                placeholder="نام شما" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inline w-100 mb-2">
                                            <label for="commentEmail" class="form-label my-3">ایمیل
                                                شما<span class="text-danger ms-1">*</span></label>
                                            <input type="email" id="commentEmail" class="form-control text-end"
                                                placeholder="ایمیل شما" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" name="" id="commentCheckBox" class="form-check-input"
                                    required>
                                <label for="commentCheckBox" class="form-check-label text-muted">
                                    ذخیره
                                    نام، ایمیل و وبسایت من در مرورگر برای زمانی که دوباره دیدگاهی
                                    می‌نویسم.
                                </label>
                            </div>
                            <input type="submit" value="ثبت" class="btn btn-success rounded-pill w-100 mt-3 shadow-sm">
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- end about us -->


    </div>
    <!-- end content -->
@endsection

@section('pagetitle')
    ارتباط با ما
@endsection
