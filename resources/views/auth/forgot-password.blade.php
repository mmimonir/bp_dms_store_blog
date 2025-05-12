@extends('layouts.guest')
@section('content')

    <body class="login-page bg-body-secondary app-loaded">
        <div class="login-box">
            <div class="login-logo">
                <a href="/"><b>Admin</b>LTE</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                    <form action="recover-password.html" method="post">
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required=""
                                autofocus="">
                            <div class="input-group-text">
                                <svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                    </path>
                                </svg><!-- <span class="fas fa-envelope"></span> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block w-100">Request new password</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <p class="mt-3 mb-1">
                        <a href={{ route('login') }} class="text-decoration-none">Login</a>
                    </p>
                    <p class="mb-0">
                        <a href="{{ route('register') }}" class="text-center text-decoration-none">Register a new
                            membership</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>

    </body>
@endsection
