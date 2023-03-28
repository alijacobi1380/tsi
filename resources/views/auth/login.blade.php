<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>TSICommerce Login</title>
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
                <div class="row" style="min-height:inherit;">
                    <div class="col-lg-8">
                        <div class="auth-forms">
                            <div class="auth-forms-item">
                                <div class="auth-title">
                                    <div class="auth-logo d-lg-none d-block">
                                        <a href="index.html"><img src="{{ url('img/Tsi/LOGO-TSI.png') }}"
                                                class="img-fluid" alt=""></a>
                                    </div>
                                    <h3>وارد شوید</h3>
                                    <p class="my-3 text-muted">اگر قبلا ثبت نام کرده اید وارد شوید</p>
                                </div>
                                <div class="auth-form">
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                                <input name="email" value="{{ old('email') }}" type="text"
                                                    class="form-control" placeholder="نام کاربری یا ایمیل">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-key"></i></span>
                                                <input name="password" type="password" placeholder="رمز عبور"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-check form-check-box text-start">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                مرا فراموش نکن
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button type="submit" class="btn-login me-2 waves-effect waves-light"><i
                                                    class="bi bi-person"></i>
                                                ورود به
                                                سایت</button>
                                            <a class="btn-login forget waves-effect waves-light" href="forget.html"><i
                                                    class="bi bi-person"></i>
                                                فراموشی رمز عبور
                                            </a>
                                        </div>

                                    </form>
                                    <div class="register-box">
                                        <div class="dash-border">
                                            <span>یا</span>
                                        </div>
                                        <div class="register-link">
                                            <a href="register.html"
                                                class="btn btn-outline-secondary waves-effect waves-light">ثبت نام <i
                                                    class="bi bi-person-plus ms-1"></i></a>
                                        </div>
                                    </div>
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
                                    <a href="index.html"><img src="img/Tsi/LOGO-TSI-reg.png" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <h5 class="fw-bold">خوش آمدید</h5>
                                <p class="my-3">
                                    اگر قبلا ثبت نام کرده اید <br> میتوانید از این قسمت وارد شوید
                                </p>
                                <div class="register-links d-flex align-content-center justify-content-center">
                                    <a href="index.html" class="register-link-s">خانه</a>
                                    <br>
                                    <a href="#" class="register-link-s">پرسش های متداول</a>
                                    <br>
                                    <a href="#" class="register-link-s">پشتیبانی</a>
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
