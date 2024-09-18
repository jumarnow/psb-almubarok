<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>PSB &mdash; Al Mubarok</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS TOASTR -->
    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="assets/modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">

    <!-- CSS DATATABLE -->
    <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet"
        href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/modules/bootstrap-daterangepicker/daterangepicker.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Start GA -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script> -->

    <script src="assets/modules/jquery.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/modules/izitoast/js/iziToast.min.js"></script>
    <script src="assets/modules/sweetalert/sweetalert.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/modules/cleave-js/dist/cleave.min.js"></script>
    <style>
        .modal-backdrop {
            position: inherit;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 900;
            background-color: #000;

        }

        .form-control:not(.form-control-sm):not(.form-control-lg) {
            font-size: 13px;
            padding: 10px 15px;
            height: 35px;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">


                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="assets/img/avatar/avatar-1.png"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <a href="/" class="dropdown-item has-icon">
                                <i class="fas fa-home"></i> Landing Page
                            </a>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Profil
                            </a>
                            {{-- <div class="dropdown-divider"></div> --}}
                            <form id="logout-form" action="logout" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                            <a href="#" class="dropdown-item has-icon text-danger"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="#">Al Mubarok</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">ALBA</a>
                    </div>
                    <!-- INCLUDE MAIN MENU DI MENU.PHP -->
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main Menu</li>
                        <li class="{{ request()->is('admin') ? 'active' : '' }}"><a class="nav-link"
                                href="admin"><i class="fas fa-home fa-fw"></i>
                                <span>Dashboard</span></a></li>

                        <li class="{{ request()->is('admin/formulir') ? 'active' : '' }}"><a class="nav-link"
                                href="admin/formulir"><i class="fas fa-file-archive    "></i>
                                <span>Formulir</span></a></li>

                        <li class="{{ request()->is('admin/pengumuman') ? 'active' : '' }}"><a class="nav-link"
                                href="admin/pengumuman"><i class="fas fa-bullhorn fa-fw"></i>
                                <span>Pengumuman</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2024 Al Mubarok <div class="bullet"></div> Template By <a
                        href="">Stisla</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->

    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS DATATABLE -->
    <script src="assets/modules/datatables/datatables.min.js"></script>
    <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- Page Specific DATATABLE -->
    <script src="assets/js/page/modules-datatables.js"></script>
    <script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/modules/summernote/summernote-bs4.js"></script>

    <!-- Page Specific JS File -->
    {{-- <script src="assets/js/page/index-0.js"></script> --}}


    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>

    <script>
        $(document).on('click','.btn-delete', function(){
            var result = confirm("Apakah Anda yakin ingin melanjutkan?");

            if (result) {
                // alert("Anda memilih 'Ya'.");
                let url = $(this).data("url");
                $.get(url, function(){
                    location.reload();
                })
            } else {
                // alert("Anda memilih 'Batal' atau menutup pesan konfirmasi.");
            }
        })
    </script>
</body>

</html>
