@yield('func')
<!DOCTYPE html>
<html lang="fa" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('pagetitle')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">

    @yield('cs')
    <!-- Bootstrap Css -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="{{ url('assets/css/app.css') }}" id="app-style" rel="stylesheet" type="text/css">
    <!-- Theme Color -->
    <meta name="theme-color" content="#283D92">

    @livewireStyles

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
                                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img class=""
                                        src="@if (App::getLocale() == 'fa') {{ url('assets/images/flags/iran.jpg') }} @elseif(App::getLocale() == 'en') {{ url('assets/images/flags/us.jpg') }} @endif"
                                        alt="Header Language" height="16">
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="@if (App::getLocale() == 'fa') {{ route('changelang', ['id' => 2]) }} @elseif (App::getLocale() == 'en') {{ route('changelang', ['id' => 1]) }} @endif"
                                        class="dropdown-item notify-item">
                                        <img src="@if (App::getLocale() == 'en') {{ url('assets/images/flags/iran.jpg') }} @elseif(App::getLocale() == 'fa') {{ url('assets/images/flags/us.jpg') }} @endif"
                                            alt="user-image" class="mr-1" height="12"> <span class="align-middle">
                                            @if (App::getLocale() == 'en')
                                                {{ __('messages.farsi') }}
                                            @elseif(App::getLocale() == 'fa')
                                                {{ __('messages.english') }}
                                            @endif
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown d-none d-sm-inline-block">
                                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img class=""
                                        src="@if (App::getLocale() == 'fa') {{ url('assets/images/flags/iran.jpg') }} @elseif(App::getLocale() == 'en') {{ url('assets/images/flags/us.jpg') }} @endif"
                                        alt="Header Language" height="16">
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="@if (App::getLocale() == 'fa') {{ route('changelang', ['id' => 2]) }} @elseif (App::getLocale() == 'en') {{ route('changelang', ['id' => 1]) }} @endif"
                                        class="dropdown-item notify-item">
                                        <img src="@if (App::getLocale() == 'en') {{ url('assets/images/flags/iran.jpg') }} @elseif(App::getLocale() == 'fa') {{ url('assets/images/flags/us.jpg') }} @endif"
                                            alt="user-image" class="mr-1" height="12"> <span class="align-middle">
                                            @if (App::getLocale() == 'en')
                                                {{ __('messages.farsi') }}
                                            @elseif(App::getLocale() == 'fa')
                                                {{ __('messages.english') }}
                                            @endif
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown d-none d-lg-inline-block ml-1">
                                <button type="button" class="btn header-item noti-icon waves-effect"
                                    data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen"></i>
                                </button>
                            </div>



                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect"
                                    id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ url('assets/images/users/avatar-2.jpg') }}" alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ml-1">
                                        @php
                                            echo App\Http\Controllers\ProducerController::showname(Auth::user()->name);
                                        @endphp
                                    </span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i
                                            class="bx bx-user font-size-16 align-middle mr-1"></i>{{ __('messages.showprofile') }}</a>
                                    {{-- <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> کیف پول من</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> تنظیمات</a>
                                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> قفل صفحه</a>
                                    <div class="dropdown-divider"></div> --}}
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger" href="#"><i
                                                class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                                            {{ __('messages.exit') }}</button>
                                    </form>
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

                            <button type="button"
                                class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                                id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>




                        </div>

                    </div>
                </div>
            </header> <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div class="h-100">

                    <div class="user-wid text-center py-4">
                        <div class="user-img">
                            <img src="{{ url('assets/images/users/avatar-2.jpg') }}" alt=""
                                class="avatar-md mx-auto rounded-circle">
                        </div>

                        <div class="mt-3">

                            <a href="#" class="text-dark font-weight-medium font-size-16 line-height-h">
                                @php
                                    echo App\Http\Controllers\ProducerController::showname(Auth::user()->name);
                                @endphp
                            </a>
                            <p class="text-body mt-1 mb-0 font-size-13">
                                @switch(Auth::user()->rule)
                                    @case(1)
                                        {{ __('messages.taminkonande') }}
                                    @break

                                    @case(2)
                                    @break

                                    @default
                                @endswitch
                            </p>

                        </div>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">{{ __('messages.menu') }}</li>

                            <li>
                                <a href="#" class=" waves-effect">
                                    <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span>{{ __('messages.paneldashboard') }}</span>
                                </a>
                            </li>


                            <li>
                                <a href="#" class=" waves-effect">
                                    <i class="far fa-id-card"></i>
                                    <span>{{ __('messages.panelvitrin') }}</span>
                                </a>
                            </li>


                            <li>
                                <a href="javascript:%20void(0);" class="waves-effect">
                                    <i class="mdi mdi-shopping-outline"></i>
                                    {{-- <span class="badge badge-pill badge-info float-right">2</span> --}}
                                    <span>{{ __('messages.panelproducttitle') }}</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a
                                            href="{{ route('producer.getproduct') }}">{{ __('messages.panelproductlist') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('producer.addproduct') }}">{{ __('messages.panelproductadd') }}</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('producer.payments') }}" class=" waves-effect">
                                    <i class="bx bx-dollar-circle"></i>
                                    <span>{{ __('messages.panelhesabdari') }}</span>
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('producer.producergetchat') }}" class=" waves-effect">
                                    <i class="mdi mdi-chat-outline"></i>
                                    <span>{{ __('messages.panelchat') }}</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class=" waves-effect">
                                    <i class="bx bx-happy-beaming"></i>
                                    <span>{{ __('messages.panelservices') }}</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class=" waves-effect">
                                    <i class="bx bx-like"></i>
                                    <span>{{ __('messages.panelfavorits') }}</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class=" waves-effect">
                                    <i class="mdi mdi-ticket-outline"></i>
                                    <span>{{ __('messages.panelsupport') }}</span>
                                </a>
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
                                <h4 class="page-title mb-0 font-size-18">@yield('pagetitle')</h4>



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
                                    {{ __('messages.copyright') }}
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
    <script src="{{ url('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('assets/js/app.js') }}"></script>

    @yield('sc')


    @livewireScripts

</body>

</html>
