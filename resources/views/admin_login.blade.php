<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/adminAssets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/adminAssets/Fonts/font.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/adminAssets/css/style.css') }}">
    <title>login</title>
</head>

<body>
    <div class="login-to-access">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login-form">
                <figure>
                    <img src="{{ asset('public/adminAssets/images/Group.svg') }}" alt="Group" width="100px">
                </figure>
                <div class="form-group">
                    <h3>Login to access your account</h3>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror password-show" placeholder="Password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary bg-color">Login</button>
                </div>
            </div>
        </form>
    </div>

    <script src="{{ asset('public/adminAssets/js/libaury.js') }}"></script>
    <script src="{{ asset('public/adminAssets/js/bootstrap.min.js') }}"></script>
</body>

</html>