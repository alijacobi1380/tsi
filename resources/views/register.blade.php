<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>TSICommerce Platform </title>
    <link rel="shortcut icon" href="{{ url('img/Tsi/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('js/plugin/countdown/countdown.css') }}">
    <link rel="stylesheet" href="{{ url('js/plugin/back-to-top/jquery-backToTop.min.css') }}">
    <link rel="stylesheet" href="{{ url('js/plugin/hint-css/hint-css.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
</head>

<body>

    <div class="auths">
        <div class="container">
            <div class="auth shadow-box">
                <div class="row" style="min-height: inherit;">
                    <div class="col-lg-8">
                        <div class="auth-forms">
                            <div class="auth-forms-item">
                                <div class="auth-logo d-lg-none d-block">
                                    <a href="index.html"><img src="img/Tsi/LOGO-TSI.png" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="auth-title">
                                    <h3>ثبت نام کنید</h3>
                                    <p class="my-3 text-muted">اگر قبلا ثبت نام کرده اید وارد شوید</p>
                                </div>
                                <div class="auth-form">
                                    <form action="{{ route('registercheck') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                <input name="name" type="text" class="form-control"
                                                    placeholder="نام برند یا نام شخصی">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                                <input name="email" type="text" class="form-control"
                                                    placeholder="ایمیل">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-key"></i></span>
                                                <input name="password" type="password" placeholder="رمز عبور"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        {{-- <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>نقش کاربری خود را انتخاب کنید</option>
                                                    <option value="1">تامین کننده</option>
                                                    <option value="2">بازرگان</option>
                                                    <option value="3">پشتیبان</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-translate"></i></span>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>انتخاب زبان پروفایل کاربری</option>
                                                    <option value="1">فارسی FA</option>
                                                    <option value="2">انگلیسی EN</option>
                                                    <option value="3">اسپانیایی ESP</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                            <div class="input-group text-center">
                                                <div class="form-check form-switch form-check-reverse py-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckReverse">
                                                    <label class="form-check-label" for="flexSwitchCheckReverse"><a
                                                            href="#" class=" text-primary"> قوانین و مقررات را
                                                            مطالعه کرده و می پذیرم . </a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex justify-content-center flex-column align-items-center flex-wrap">
                                            <button type="submit" class="btn-login w-25 waves-effect waves-light"><i
                                                    class="bi bi-person"></i>
                                                ثبت نام در سایت
                                            </button>
                                            <a class="btn-login login w-25 waves-effect waves-light"
                                                href="{{ route('login') }}"><i class="bi bi-lock"></i>
                                                ورود به سایت
                                            </a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="auth-side d-lg-block d-none">
                            <div class="background">
                                <div class="cube"></div>
                                <div class="cube"></div>
                                <div class="cube"></div>
                                <div class="cube"></div>
                                <div class="cube"></div>
                            </div>
                            <div class="auth-desc">
                                <div class="auth-logo">
                                    <a href="{{ route('index') }}"><img src="img/Tsi/LOGO-TSI-reg.png"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <h5 class="fw-bold">خوش آمدید</h5>
                                <p class="my-3">
                                    اگر قبلا ثبت نام کرده اید <br> میتوانید از این قسمت وارد شوید
                                </p>
                                <div class="register-links d-flex align-content-center justify-content-center">
                                    <a href="{{ route('index') }}" class="register-link-s">خانه</a>
                                    <br>
                                    <a href="{{ route('terms') }}" class="register-link-s">قوانین مقررات</a>
                                    <br>
                                    <a href="{{ route('contactus') }}" class="register-link-s">پشتیبانی</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('js/jquery-app.js') }}"></script>
    <script src="{{ url('js/plugin/waves/waves.js') }}"></script>




</body>

</html>
