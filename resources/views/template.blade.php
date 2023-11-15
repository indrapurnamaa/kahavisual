<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <span class="app-brand-text demo menu-text fw-bolder ms-2">Kaha Visual</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a href="{{ url('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Menu</span></li>
                    <!-- Tables -->
                    @if (Auth::guard('admin')->check())
                    <li class="menu-item {{ Request::is('paketjasa') ? 'active' : '' }}">
                        <a href="{{ route('paketjasa.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-package"></i>
                            <div>Paket Jasa</div>
                        </a>
                    </li>
                    @elseif (Auth::guard('pelanggan')->check())
                    <li class="menu-item {{ Request::is('paketjasa') ? 'active' : '' }}">
                        <a href="{{ route('paketjasa.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-package"></i>
                            <div>Paket Jasa</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('riwayatpesanan') ? 'active' : '' }}">
                        <a href="{{ route('riwayatpesanan') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-time"></i>
                            <div>Riwayat Pesanan</div>
                        </a>
                    </li>
                    @endif
                    @if (Auth::guard('admin')->check())
                        <li class="menu-header small text-uppercase"><span class="menu-header-text">Master Data</span>
                        </li>
                        <!-- Tables -->
                        <li class="menu-item {{ Request::is('datapaketjasa') ? 'active' : '' }}">
                            <a href="{{ route('datapaketjasa.index') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                                <div>Data Paket Jasa</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('pesanan') ? 'active' : '' }}">
                            <a href="{{ route('pesanan.index') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                                <div>Data Pesanan</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('pelanggan') ? 'active' : '' }}">
                            <a href="{{ route('pelanggan.index') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                                <div>Data Pelanggan</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('pembayaran') ? 'active' : '' }}">
                            <a href="{{route('pembayaran.index')}}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                                <div>Data Pembayaran</div>
                            </a>
                        </li>
                    @endif
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="d-flex">
                            @if (Auth::guard('admin')->check())
                                <div class="text-kecil">
                                    Selamat Datang, Admin
                                </div>
                            @elseif (Auth::guard('pelanggan')->check())
                                <div class="text-kecil">
                                    Selamat Datang, {{ Auth::guard('pelanggan')->user()->nama }}
                                </div>
                            @endif
                        </div>

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3"></li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    @if (Auth::guard('admin')->check())
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    @elseif (Auth::guard('pelanggan')->check())
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('assets/img/avatars/user.png') }}" alt
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    @endif
                                </a>


                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    @if (Auth::guard('admin')->check())
                                                        <div class="avatar avatar-online">
                                                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    @elseif (Auth::guard('pelanggan')->check())
                                                        <div class="avatar avatar-online">
                                                            <img src="{{ asset('assets/img/avatars/user.png') }}" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="flex-grow-1">
                                                    @if (Auth::guard('admin')->check())
                                                        <span class="fw-semibold d-block">Admin</span>
                                                        <small class="text-muted">admin</small>
                                                    @elseif (Auth::guard('pelanggan')->check())
                                                        <span
                                                            class="fw-semibold d-block text-kecil-pelanggan">{{ Auth::guard('pelanggan')->user()->nama }}</span>
                                                        <small
                                                            class="text-muted">{{ Auth::guard('pelanggan')->user()->username }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                        </ul>
                        </li>
                        <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                Kaha Visual
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>