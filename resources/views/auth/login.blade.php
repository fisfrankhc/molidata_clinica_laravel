<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/img/favicon.png') }}">
    <title>Preclinic - Medical & Hospital - Bootstrap 5 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">


</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="container-fluid px-0">
            <div class="row">

                <!-- Login logo -->
                <div class="col-lg-6 login-wrap">
                    <div class="login-sec">
                        <div class="log-img">
                            <img class="img-fluid" src="{{ asset('/assets/img/login-02.png') }}" alt="Logo">
                        </div>
                    </div>
                </div>
                <!-- /Login logo -->

                <!-- Login Content -->
                <div class="col-lg-6 login-wrap-bg">
                    <div class="login-wrapper">
                        <div class="loginbox">
                            <div class="login-right">
                                <div class="login-right-wrap">
                                    <div class="account-logo">
                                        <a href="index.html"><img src="{{ asset('/assets/img/login-logo.png') }}"
                                                alt=""></a>
                                    </div>
                                    <h2>INICIAR SESI&Oacute;N</h2>
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Email <span class="login-danger">*</span></label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Password <span class="login-danger">*</span></label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
										<div class="forgotpass">
											<div class="remember-me">
												<label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Recordar datos
													<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
												<span class="checkmark"></span>
												</label>
											</div>
											<a href="forgot-password.html">¿Olvidaste tu contraseña?</a>
										</div>
                                        <div class="form-group login-btn">
                                            <button class="btn btn-primary btn-block" type="submit">INICIAR SESI&Oacute;N</button>
                                        </div>
                                    </form>
                                    <div class="next-sign">
                                        <p class="account-subtitle">¿No esta registrado? <a
                                                href="{{ route('register') }}">QUIERO REGISTRARME</a></p>
                                        <div class="social-login">
                                            <a href=""><img
                                                    src="{{ asset('/assets/img/icons/login-icon-01.svg') }}"
                                                    alt=""></a>
                                            <a href=""><img
                                                    src="{{ asset('/assets/img/icons/login-icon-02.svg') }}"
                                                    alt=""></a>
                                            <a href=""><img
                                                    src="{{ asset('/assets/img/icons/login-icon-03.svg') }}"
                                                    alt=""></a>
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
    <script src="{{ asset('/assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js') }}"></script>
</body>

</html>
