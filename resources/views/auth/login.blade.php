<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | laciKita</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/sistem/BULAT_Logo_laciKita.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Animate.css untuk animasi growl -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css/css/animate.css') }}">
</head>

<body themebg-pattern="theme1">

    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" method="POST" action="{{ route('login.process') }}">
                        @csrf
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-30">
                                    <div class="col-md-12 text-center">
                                        <img src="{{ asset('assets/images/sistem/KOTAK_Logo_laciKita.png') }}"
                                            alt="" width="60%">
                                    </div>
                                </div>

                                <!-- Notifikasi Error -->
                                @if (session('error'))
                                    <script>
                                        $(function() {
                                            $.growl.error({
                                                message: "{{ session('error') }}"
                                            });
                                        });
                                    </script>
                                @endif

                                {{-- Input Email --}}
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required
                                        value="{{ old('email') }}">
                                    <span class="form-bar"></span>
                                    <label class="float-label"><i class="icofont icofont-ui-email"></i> Masukkan alamat
                                        email anda</label>
                                </div>

                                {{-- Input Password --}}
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label"><i class="icofont icofont-key"></i> Password</label>
                                </div>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">LOGIN</button>
                                    </div>
                                </div>

                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <a href="#" class="text-right f-w-600 text-danger"> Daftar disini.</a>
                                        </div>
                                        <div class="forgot-phone text-right f-right">
                                            <a href="#" class="text-right f-w-600 text-danger"> Lupa password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/pages/waves/js/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/common-pages.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

    <!-- Plugin growl -->
    <script src="{{ asset('assets/js/bootstrap-growl.min.js') }}"></script>
</body>

</html>
