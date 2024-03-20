<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link rel="shortcut icon" href="{{ asset('images/logobulat.png') }}" type="image/x-icon">
        <meta name="description" content="" />
        <title>Beasiswa | IT Telkom Purwokerto</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Custom fonts for this tampilanhome-->
        <link
            href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
            rel="stylesheet"
        />
        <link
            href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}"
            rel="stylesheet"
        />
        <link
            href="{{ asset('tampilanhome/vendor/fontawesome-free/css/all.min.css') }}"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        />

        <link
            href="{{ asset('tampilanhome/css/sb-admin-2.min.css') }}"
            rel="stylesheet"
        />
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul
                class="navbar-nav bg-gradient-custom sidebar sidebar-dark accordion"
                id="accordionSidebar"
            >
                <!-- Sidebar - Brand -->
                <a
                    class="sidebar-brand d-flex align-items-center justify-content-center"
                    href=""
                >
                    <div class="sidebar-brand-icon rotate-n-15">
                        {{-- <i class="fas fa-laugh-wink"></i> --}}
                    </div>
                    {{-- <div class="sidebar-brand-text mx-3">Beasiswaku</div> --}}
                    <div class="logo">
                        <img src="{{ asset('images/logoaja.jpg') }}" alt="Logo" />
                    </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0" />

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fas fa-fw fa-home" style="font-size: 24px; padding-right: 10px;"></i>
                        <span style="font-size: 24px;">Dashboard</span>
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beasiswa.create') }}">
                        <i class="fas fa-fw fa-user" style="font-size: 24px; padding-right: 10px;"></i>
                        <span style="font-size: 24px;">Daftar</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beasiswa.index') }}">
                        <i class="fas fa-fw fa-paper-plane" style="font-size: 24px; padding-right: 10px;"></i>
                        <span style="font-size: 24px;">Hasil</span></a
                    >
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" />
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav
                        class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
                    >
                        <!-- Sidebar Toggle (Topbar) -->
                        <button
                            id="sidebarToggleTop"
                            class="btn btn-link d-md-none rounded-circle mr-3"
                        >
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Page Heading -->
                        <h1 class="h2 mb-2 text-black-800 text-center">
                            Dashboard Beasiswa | IT Telkom Purwokerto
                        </h1>

                
                    </nav>
                    <!-- End of Topbar -->
                     @yield('konten')
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <p>Beasiswa &copy;<script>document.write(new Date().getFullYear());</script> IT Telkom Purwokerto <i class="icon-heart" aria-hidden="true"></i> by <a href="https://ittelkom-pwt.ac.id" target="_blank">ittelkom-pwt</a></p>
                        </div>
                        
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </body>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('tampilanhome/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('tampilanhome/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('tampilanhome/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('tampilanhome/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('tampilanhome/js/demo/chart-pie-demo.js') }}"></script>

    <script>
        

        // Kode JavaScript Anda untuk membuat chart
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
            type: "doughnut",
            // ... (Kode konfigurasi lainnya)
        });
    </script>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
    ></script>
    @stack('js')
</html>