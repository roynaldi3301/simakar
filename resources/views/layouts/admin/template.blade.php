<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://smkmaarifkarangreja.online/media_library/images/deb9bc9f4d37db158509665da2e88634.png">
    <title>@yield('title')</title>
    @yield('cssatas')
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/extra-libs/calendar/calendar.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    @toastr_css
    @yield('cssbawah')

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos">SMK Ma'arif Karangreja</div>
            <div class="lds-pos">SMK Ma'arif Karangreja</div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <!-- Logo icon -->
                        {{-- <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img width="240" height="60" src="{{ asset('assets/images/maarif.png') }}" alt="homepage" class="light-logo" />

                        </b> --}}
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img width="245" height="65" src="{{ asset('assets/images/maarif.png') }}" alt="homepage" class="light-logo" /> -->

                        </b>
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://cdn.iconscout.com/icon/free/png-512/avatar-372-456324.png" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->

            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('dashboard') }}" aria-expanded="false"><i
                                    class="fab fa-windows"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="fas fa-database"></i><span
                                    class="hide-menu">Induk Data</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('rombel.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Manajemen
                                            Kelas</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('mapel.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Manajemen Mata
                                            Pelajaran</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('guru.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Manajemen Guru
                                            & Karyawan</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('siswa.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Manajemen
                                            Siswa</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('user.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Manajemen
                                            User</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="fab fa-wordpress-simple"></i><span class="hide-menu">CMS Website</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Kategori</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Posting
                                            Artikel</span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">File
                                            Manager</span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Feed
                                            Back</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-school"></i><span
                                    class="hide-menu">PPDB</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Pengaturan
                                            PPDB</span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Calon Peserta
                                            Didik Baru</span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Proses
                                            Seleksi</span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Pendaftar
                                            Diterima</span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Pendaftar Tidak
                                            Diterima</span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Percetakan</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-move-resize-variant"></i><span
                                    class="hide-menu">Pembiayaan</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Dashboard</span></a></li>
                                <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Data Tagihan
                                            Siswa</span></a></li>
                                <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Pembantu
                                            Kas</span></a></li>
                                <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Setting</span></a></li>
                                <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Cetak</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-cash-multiple"></i><span class="hide-menu">E Voting</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Pemilih</span></a>
                                </li>
                                <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Kandidat</span></a></li>
                                <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Penghitungan
                                            Suara</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-desktop-mac"></i><span
                                    class="hide-menu">CBT Online</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Mata Pelajaran
                                            -
                                            Guru</span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Peserta
                                            Ujian</span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Bank
                                            Soal</span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Analisa</span></a>
                                </li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Percetakan</span></a></li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Setting
                                            Ujian</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings"></i><span
                                    class="hide-menu"> Settings</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('settings.source') }}"
                                        class="sidebar-link"><i class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Source</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Informasi
                                            Sekolah</span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Pengaturan
                                            lain</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="ml-8auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item float-right"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('bread')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>

            <footer class="footer text-center">
                A Small Masterpiece from<a href=""> Roynaldi </a> for <a href="https://www.smkmaarifkarangreja.online">
                    SMK Ma'arif Karangreja </a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}""></script>
    <script src=" {{ asset('dist/js/jquery.ui.touch-punch-improved.js') }}""></script>
    <script src="{{ asset('dist/js/jquery-ui.min.js') }}""></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=" {{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}""></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=" {{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/calendar/cal-init.js') }}"></script>

    <!-- Charts js Files -->
    @yield('jsatas')
    <script src="{{ asset('assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/chart/chart-page-init.js') }}"></script>
    @yield('jsbawah')
</body>
{{-- @jquery --}}
@toastr_js
@toastr_render

</html>
