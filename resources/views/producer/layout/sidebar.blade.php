
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>جدول‌های پایه - قالب مدیریتی Qovex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{url('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="{{url('assets/css/app.css')}}" id="app-style" rel="stylesheet" type="text/css">
	<!-- Theme Color -->
	<meta name="theme-color" content="#283D92">

</head>

<body data-layout="detached" data-topbar="colored">

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-right">

                            <div class="dropdown d-inline-block d-lg-none ml-2">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="جستجو ..." aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="dropdown d-none d-sm-inline-block">
                                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="" src="{{url('assets/images/flags/us.jpg')}}" alt="Header Language" height="16">
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{url('assets/images/flags/spain.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">اسپانیایی</span>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown d-none d-lg-inline-block ml-1">
                                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen"></i>
                                </button>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bell-outline"></i>
                                    <span class="badge badge-danger badge-pill">3</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0"> اعلان ها </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="small"> مشاهده همه</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 230px;">
                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="bx bx-cart"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1 primary-font">سفارش شما ثبت شد</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 دقیقه پیش</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <img src="assets/images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1 primary-font">تونی استارک</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 ساعت پیش</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="bx bx-badge-check"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1 primary-font">محصول شما ارسال شد</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 دقیقه پیش</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <img src="{{url('assets/images/users/avatar-4.jpg')}}" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1 primary-font">استیو راجرز</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 ساعت پیش</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-2 border-top">
                                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle mr-1"></i> مشاهده بیشتر ...
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="{{url('assets/images/users/avatar-2.jpg')}}" alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ml-1">{{Auth::user()->name}}</span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> پروفایل</a>
                                    {{-- <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> کیف پول من</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> تنظیمات</a>
                                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> قفل صفحه</a>
                                    <div class="dropdown-divider"></div> --}}
                                    <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> خروج</a>
                                </div>
                            </div>


                        </div>
                        <div>
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="19">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect" id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>

                            <!-- App Search-->
                            <form class="app-search d-none d-lg-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="جستجو ...">
                                    <span class="bx bx-search-alt"></span>
                                </div>
                            </form>

                            {{-- <div class="dropdown dropdown-mega d-none d-lg-inline-block ml-2">
                                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                    مگا منو
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-megamenu">
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h5 class="font-size-14 mt-0">اجزای رابط کاربری</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="javascript:void(0);">لایت باکس</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">انتخاب‌گر بازه</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">هشدار Sweet</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">امتیاز</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">فرم ها</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">جدول ها</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">نمودار ها</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-4">
                                                    <h5 class="font-size-14 mt-0">برنامه ها</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="javascript:void(0);">تجارت الکترونیک</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">تقویم</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">ایمیل</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">پروژه ها</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">وظایف</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">تماس</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-4">
                                                    <h5 class="font-size-14 mt-0">صفحات بیشتر</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="javascript:void(0);">نوار کناری روشن</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">نوار کناری فشرده</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">طرح منوی افقی</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">تعمیرات</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">به زودی</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">خط زمانی</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">سوالات متداول</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5 class="font-size-14 mt-0">اجزاء</h5>
                                                    <div class="px-lg-2">
                                                        <div class="row no-gutters">
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/github.png" alt="Github">
                                                                    <span>گیت هاب</span>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                                    <span>بیت باکت</span>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                                    <span>دریبل</span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="row no-gutters">
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                                    <span>دراپ باکس</span>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                                    <span>میل چیمپ</span>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <a class="dropdown-icon-item" href="#">
                                                                    <img src="assets/images/brands/slack.png" alt="slack">
                                                                    <span>اسلک</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div>
                                                        <div class="card text-white mb-0 overflow-hidden text-white-50" style="background-image: url('assets/images/megamenu-img.png');background-size: cover;">
                                                            <div class="card-img-overlay"></div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <h4 class="text-white mb-3">فروش</h4>

                                                                        <h5 class="text-white-50">تا <span class="font-size-24 text-white">50 %</span> تخفیف</h5>
                                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                                                        <div class="mb-4">
                                                                            <a href="#" class="btn btn-success btn-sm">مشاهده بیشتر</a>
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
                        </div>

                    </div>
                </div>
            </header> <!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{url('assets/images/users/avatar-2.jpg')}}" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16 line-height-h">{{Auth::user()->name}}</a>
                {{-- <p class="text-body mt-1 mb-0 font-size-13">طراح رابط کاربری</p> --}}

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">منو</li>

                <li>
                    <a href="javascript:%20void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i><span class="badge badge-pill badge-info float-right">2</span>
                        <span>داشبورد</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html">داشبورد 1</a></li>
                        <li><a href="index-2.html">داشبورد 2</a></li>
                    </ul>
                </li>

               

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">جدول‌های پایه</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript:%20void(0);">جدول ها</a></li>
                                        <li class="breadcrumb-item active">جدول‌های پایه</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    
                    @yield('content')

                

                    

                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    تمام حقوق برای استارتاپ tsi محفوظ است
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{url('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{url('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{url('assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- App js -->
    <script src="{{url('assets/js/app.js')}}"></script>

</body>

</html>