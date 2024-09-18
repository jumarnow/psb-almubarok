<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Admin PSB</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Start GA -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script> --}}
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand" style="margin-bottom: 15px">
                            <img src="assets/img/logo/logo-alba.jpg" alt="logo" width="80"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Silahkan Login</h4>
                            </div>

                            <div class="card-body">
                                {{-- <form id="form-login" method="post" class="needs-validation" novalidate=""> --}}
                                <form id="form-login" action="{{ url('login') }}" method="post" class="needs-validation" novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input id="username" type="text" class="form-control" name="username"
                                            tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="#" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button name="login" type="submit" class="btn btn-primary btn-lg btn-block"
                                            tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; AL MUBAROK 2024 </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="assets/modules/jquery.min.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <script src="assets/modules/izitoast/js/iziToast.min.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    @if ($errors->any())
    <script>
        iziToast.error({
            title: 'Maaf Bro',
            message: 'Username atau Password Salah',
            position: 'topCenter'
        });
    </script>
    @endif
    <script>
        // $(document).ready(function() {
        //     $('#form-login').submit(function(e) {
        //         e.preventDefault();
        //         $.ajax({
        //             type: 'POST',
        //             url: '{{ url("login") }}',
        //             data: {
        //                 _token: '{{ csrf_token() }}',
        //                 username: $('#username').val(),
        //                 password: $('#password').val()
        //             },
        //             success: function(data) {
        //                 console.log(data);
        //                 if (data.success) {
        //                     iziToast.success({
        //                         title: 'Berhasil!',
        //                         message: 'Anda akan dialihkan',
        //                         position: 'topRight'
        //                     });
        //                     setTimeout(function() {
        //                         window.location.reload();
        //                     }, 2000);
        //                 } else {
        //                     iziToast.error({
        //                         title: 'Maaf Bro',
        //                         message: 'Username atau Password Salah',
        //                         position: 'topCenter'
        //                     });
        //                 }
        //             }
        //         });
        //         return false;
        //     });
        // });
    </script>
</body>

</html>
