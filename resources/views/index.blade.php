@auth
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Văn Trí">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Home</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('./viewAdmin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('./viewAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('./viewAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('./viewAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('./viewAdmin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('./viewAdmin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('./viewAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('./viewAdmin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('./viewAdmin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('./viewAdmin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('./viewAdmin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('./viewAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('./viewAdmin/vendor/vector-map/jqvmap.min.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('./viewAdmin/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            {{-- <div class="logo">
                <a href="#">
                    {{ asset('./viewAdmin/images/icon/logo-white.png') }} 
                    <h3 style="color: white">Website Biểu Mẫu</h3>
                </a>
            </div> --}}
            <div class="account2">
                <div class="image img-cir img-120">
                    {{-- {{ asset('./viewAdmin/images/icon/avatar-big-01.jpg') }} --}}
                    <img  src="{{ asset('./viewAdmin/images/icon/logoo1.jpg') }}" alt="Ảnh" />
                </div>
                {{-- <h4 class="name">Văn Trí</h4>
                <a href="#">Sign out</a> --}}
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                {{-- <div class="account2">
                    <div class="image img-cir img-120">
                        {{ asset('./viewAdmin/images/icon/avatar-big-01.jpg') }}
                        <img src="{{ asset('./viewAdmin/images/icon/logoo.jpg') }}" alt="Ảnh" />
                    </div>
                    <h4 class="name">Văn Trí</h4>
                    <a href="#">Sign out</a> 
                </div> --}}
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('trangchu') }}">
                                <i class="fas fa-desktop"></i>Tổng quan
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar-alt"></i>Đối tượng
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('addObjects') }}">
                                        <i class="fas fa-copy"></i>Thêm</a>
                                </li>
                                <li>
                                    <a href="{{ route('listObjects') }}">
                                        <i class="fas fa-chart-bar"></i>Danh sách</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Biểu mẫu
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('addForm') }}">
                                        <i class="fas fa-copy"></i>Thêm</a>
                                </li>
                                <li>
                                    <a href="{{ route('listForm') }}">
                                        <i class="fas fa-chart-bar"></i>Danh sách</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Câu hỏi
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('addQuestion') }}">
                                        <i class="fas fa-copy"></i>Thêm</a>
                                </li>
                                <li>
                                    <a href="{{ route('listQuestion') }}">
                                        <i class="fas fa-chart-bar"></i>Danh sách</a>
                                </li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="{{ asset('') }}" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" name="search" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                            
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    {{-- <i class="zmdi zmdi-notifications"></i> --}}
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('logout') }}">
                                                <i class="zmdi zmdi-account"></i>Đăng xuất</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('newpass',['email'=>Auth::user()->email]) }}">
                                                <i class="zmdi zmdi-settings"></i>Đổi mật khẩu</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('register') }}">
                                                <i class="zmdi zmdi-plus"></i>Thêm tài khoản</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="{{asset('')}}" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="{{ asset('./viewAdmin/images/icon/logoo.jpg') }}" alt="John Doe" />
                        </div>
                        {{-- <h4 class="name">john doe</h4> --}}
                        <a href="#">Đổi Mật Khẩu</a>
                        <a href="#">Đăng xuất</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i> Biểu mẫu
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="index.html">
                                            <i class="fas fa-tachometer-alt"></i>Thêm</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">
                                            <i class="fas fa-tachometer-alt"></i> Danh sách</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i> Đối tượng
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="index.html">
                                            <i class="fas fa-tachometer-alt"></i>Thêm</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">
                                            <i class="fas fa-tachometer-alt"></i> Danh sách</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Câu hỏi
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('addQuestion') }}">
                                            <i class="fas fa-tachometer-alt"></i>Thêm</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listQuestion') }}">
                                            <i class="fas fa-tachometer-alt"></i> Danh sách</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
             <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i><a href="{{ route('addObjects') }}" style="color: white">Thêm đối tượng</a></button>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i><a href="{{ route('addQuestion') }}" style="color: white">Thêm câu hỏi</a></button>
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i><a href="{{ route('addForm') }}" style="color: white">Thêm biểu mẫu</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @yield('content')
            
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('./viewAdmin/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('./viewAdmin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('./viewAdmin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('./viewAdmin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('./viewAdmin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('./viewAdmin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/select2/select2.min.js') }}">
    </script>
    <script src="{{ asset('./viewAdmin/vendor/vector-map/jquery.vmap.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/vector-map/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/vector-map/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('./viewAdmin/vendor/vector-map/jquery.vmap.world.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('./viewAdmin/js/action.js') }}"></script>
    <script src="{{ asset('./viewAdmin/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
@else
<h1>
    <a href="{{ route('login') }}"> Mời bạn đăng nhập</a>
</h1>
@endauth

