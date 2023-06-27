<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asset Management Demo | Koba</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/mordern-business.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body style="background-image: url('images/bg.jpg');">

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">

            </div>
            <div class="col-md-4 col-sm-12 frm-container">
                {{-- <img src="images/assetlogo.png" class="img-fluid"> --}}
                <h3><span style="color: red">BUSINESS LOGO</span> <span style="color: aliceblue">|</span>
                    <span style="color: rgb(71, 71, 221)">BUSINESS
                        NAME</span>
                </h3><br />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">

                        <input id="email" placeholder="Email Address" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group">

                        <input id="password" placeholder="Password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>

                    <p class="acc-lbl"> Forgot Password?
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Click here</a>
                        @endif
                    </p>
                </form>
                <p class="p-2">&copy; <?php echo date('Y'); ?> Project Tools Product Suite. All Rights Reserved</p>
            </div>
            <div class="col-md-4 col-sm-12">

            </div>

        </div>


    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
