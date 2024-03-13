<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Daftar Al Mubarok</title>

    <meta name="description" content="Daftar Santri Baru Pondok Pesantren Al Mubarok Mranggen Demak">
    <meta property="og:url" content="https://www.daftar.almubarokmranggen.id">
    <meta property="og:title" content="Daftar Santri Baru Al Mubarok Mranggen" />
    <meta property="og:description" content="Daftar Santri Baru Pondok Pesantren Al Mubarok Mranggen Demak" />
    <meta property="og:image" content="https://almubarokmranggen.id/wp-content/uploads/2023/08/LOGO-ALBA-HITAM.png">
    <meta property="og:site_name" content="Al Mubarok Mranggen">
    <meta property="og:ttl" content="3600">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets') }}/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets') }}/modules/select2/dist/css/select2.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('assets') }}/modules/bootstrap-daterangepicker/daterangepicker.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets') }}/modules/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/modules/animate/animate.css">
    <!-- CSS DATATABLE -->
    <link rel="stylesheet" href="{{ asset('assets') }}/modules/datatables/datatables.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('{{ asset('assets') }}/img/spinner-primary.svg') 50% 50% no-repeat rgb(249, 249, 249);
            opacity: .9;
        }
    </style>
</head>

<body class="layout-3">
    <div class='loader'></div>
    <div class="chating" style=" z-index: 99999; width: 50px; padding: 15px;  bottom: 0; position: fixed; ">
        <a
            href="https://api.whatsapp.com/send?phone=+6285701885618&text=Assalamualaikum%2525252C%25252Bmohon%25252Binfo%25252Bpendaftaran">

            <img src="{{ asset('assets') }}/img/wa.png" width="150"> </a>
    </div>
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="." class="navbar-brand sidfebar-gone-hide d-none d-sm-block">
                    {{-- <img src="{{ asset('assets') }}/img/logo/logo436.png" width="50"> --}}
                    Al Mubarok Mranggen </a>
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i
                        class="fas fa-bars"></i></a>
                <form class="form-inline ml-auto">
                    <ul class="navbar-nav">
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets') }}/img/avatar/avatar-1.png"
                                class="rounded-circle mr-1">
                                @if (auth()->check())
                                <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div>
                                @else
                                <div class="d-sm-none d-lg-inline-block">Login Masuk</div>
                                @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('admin') }}" data-id="login" class=" klikmenu dropdown-item has-icon ">
                                <i class="fas fa-sign-out-alt"></i> Akses Admin
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link klikmenu" data-id="beranda"><i
                                    class="fas fa-home"></i><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('formulir') }}" class="nav-link klikmenu " data-id="pendaftaran"><i
                                    class="fas fa-edit    "></i><span>Isi Formulir</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cek_pendaftaran') }}" class="nav-link klikmenu" data-id="daftar"><i
                                    class="fas fa-user-friends"></i><span>Cek Pendaftaran</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link klikmenu" data-id="pengumuman"><i
                                    class="fas fa-bullhorn"></i><span>Pengumuman</span></a>
                        </li>
                    </ul>
                    </span>

            </nav>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">

                    @yield('content')

                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2024 Al Mubarok <div class="bullet"></div> Design By <a href="">Stisla</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="{{ asset('assets') }}/modules/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/modules/popper.js"></script>
    <script src="{{ asset('assets') }}/modules/tooltip.js"></script>
    <script src="{{ asset('assets') }}/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('assets') }}/modules/moment.min.js"></script>
    <script src="{{ asset('assets') }}/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets') }}/modules/select2/dist/js/select2.full.min.js"></script>
    {{-- <script src="{{ asset('assets') }}/modules/bootstrap-daterangepicker/daterangepicker.js"></script> --}}
    <script src="{{ asset('assets') }}/modules/izitoast/js/iziToast.min.js"></script>
    <!-- Page Specific JS File -->

    <!-- JS DATATABLE -->
    <script src="{{ asset('assets') }}/modules/datatables/datatables.min.js"></script>
    <script src="{{ asset('assets') }}/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets') }}/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets') }}/js/scripts.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

    <script type="text/javascript">
        $('.loader').fadeOut('slow');
    </script>
    <script>
        $(".datepicker").datepicker({
            dateFormat: "dd-mm-yy"
        });
    </script>
    @yield('js')
    <script>
        if ("{{ Session::get('success') }}") {
            iziToast.success({
                title: 'Mantap!',
                message: 'Data berhasil disimpan',
                position: 'topRight'
            });
        }
    </script>
</body>

</html>
