<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <title>Preclinic - Medical & Hospital - Bootstrap 5 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/plugins/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">

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
                                    <h2>CREAR UNA CUENTA</h2>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label >Nombre Completo <span class="login-danger">*</span></label>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label >Email <span class="login-danger">*</span></label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label >Password <span class="login-danger">*</span></label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror pass-input" name="password" required autocomplete="new-password">
                                            <span class="profile-views feather-eye-off toggle-password"></span>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label>Password Confirmation<span class="login-danger">*</span></label>
                                            <input id="password-confirm" type="password" class="form-control pass-input" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <div class="form-group login-btn">
                                            <button type="submit" class="btn btn-primary" >REGISTRARSE</button>
                                        </div>
                                    </form>
                                    <div class="next-sign">
                                        <p class="account-subtitle">Need an account? <a href="{{ route('login') }}">Sign
                                                In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/assets/js/jquery-3.6.1.min.js')}}"></script>
	<script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('/assets/js/feather.min.js')}}"></script>
	<script src="{{asset('/assets/js/app.js')}}"></script>
		
</body>

</html>
