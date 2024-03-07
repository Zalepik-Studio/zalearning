<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('../assets/images/fav.ico') }}">
    <link href="{{ asset('../assets/css/config/default/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet">
    <link href="{{ asset('../assets/css/config/default/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet">
    <link href="{{ asset('../assets/css/config/default/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet">
    <link href="{{ asset('../assets/css/config/default/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet">
    <link href="{{ asset('../assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Login | Zalepik</title>
</head>
<body class="loading authentication-bg authentication-bg-pattern">
    <div class="account-pages mt-5 mb-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                             @endif

                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $item)
                                    <li>{{$item}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="m-auto">
                                <div class="auth-logo">
                                    <span class="logo-lg">
                                        <img src="{{ asset('assets/images/zalepik.png') }}" alt="" width="50">
                                    </span>
                                    <span class="logo-zalepik">Zalepik</span>
                                    <span class="logo-studio">Studio</span>
                                </div>
                            </div>
                            <h4 class="welcome-login">Hai, Selamat Datang!</h4>
                            <p class="register">Belum punya akun? <a href="{{ route('register') }}">Daftar disini yuk!</a></p>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="social-auth-links text-center mt-2 mb-2">
                                    <a href="#" type="text" class="form-control hover">
                                        <img src="{{ asset('assets/icons/google.png') }}" alt="" width="25" heigt="25" class=""><span class="google">Login dengan Google</span>
                                    </a>
                                </div>
                                <div class="garis">
                                    <div class="row">
                                        <div class="col" style="height: 4px; background: #D9D9D9; border-radius: 5px; float: left; margin-top:10px;"></div>
                                        <div class="col text-center">
                                            <p style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 15px; line-height: 27px">atau</p>
                                        </div>
                                        <div class="col" style="height: 4px; background: #D9D9D9; border-radius: 5px; float: right; margin-top:10px;"></div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <label for="email" class="form-label" style="font-family: 'Poppins';">Email</label>
                                    <input class="form-control" type="email" id="email" value="{{ old('email') }}" name="email" placeholder="Enter your email">
                                </div>
                                <div class="mt-2">
                                    <label for="password" class="form-label" style="font-family: 'Poppins';">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                    <a href="{{ route('forgot-password') }}" class="float-end">Forgot Password?</a>
                                </div>
                                <div class="text-center d-grid mt-5">
                                    <button class="btn btn-lg tombol-login text-white" type="submit">Login</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <footer class="footer footer-alt">
        <script>
            document.write(new Date().getFullYear())
        </script> &copy; Zalepik<a href="" class="text-white-50"></a>
    </footer>

    <script src="{{ asset('../assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('../assets/js/app.min.js') }}"></script>
</body>
</html>