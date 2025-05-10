<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="register-page bg-body-secondary app-loaded">
    <div class="register-box mx-auto" style="width: 360px;">
        <div class="register-logo">
            <a href="{{ url('/') }}"><b>{{ config('app.name', 'Admin') }}</b>LTE</a>
        </div>
        <!-- /.register-logo -->
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">{{ __('Register a new membership') }}</p>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <!-- Full Name Field -->
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="{{ __('Full Name') }}" value="{{ old('name') }}" required autofocus>
                        <div class="input-group-text">
                            <span class="bi bi-person"></span>
                        </div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Email Field -->
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Password Field -->
                    <div class="input-group mb-3">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="{{ __('Password') }}" required>
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Password Confirmation Field -->
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            placeholder="{{ __('Confirm Password') }}" required>
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Terms Checkbox and Submit Button -->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="terms" id="flexCheckDefault"
                                    required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ __('I agree to the') }} <a href="#">{{ __('terms') }}</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="social-auth-links text-center mb-3 d-grid gap-2">
                    <p>- {{ __('OR') }} -</p>
                    <a href="#" class="btn btn-primary">
                        <i class="bi bi-facebook me-2"></i> {{ __('Sign in using Facebook') }}
                    </a>
                    <a href="#" class="btn btn-danger">
                        <i class="bi bi-google me-2"></i> {{ __('Sign in using Google+') }}
                    </a>
                </div>
                <!-- /.social-auth-links -->
                <p class="mb-0 text-center">
                    <a href="{{ route('login') }}" class="text-center">{{ __('I already have a membership') }}</a>
                </p>
            </div>
            <!-- /.register-card-body -->
        </div>
    </div>
</body>

</html>
