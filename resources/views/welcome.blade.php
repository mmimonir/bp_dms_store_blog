<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 12</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }

        .hero-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .feature-box {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%;
            background-color: white;
            transition: transform 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-5px);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel 12</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Welcome to Laravel 12</h1>
            <p class="lead mb-5">Build amazing web applications with the latest version of Laravel and Bootstrap 5</p>
            @guest
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('login') }}" class="btn btn-light btn-lg px-4 me-sm-3 fw-bold">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg px-4">Register</a>
                </div>
            @else
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg px-4 fw-bold">Go to Dashboard</a>
                </div>
            @endguest
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why Laravel 12?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3 class="h5">Elegant Syntax</h3>
                        <p>Laravel's elegant syntax and extensive ecosystem make development a truly enjoyable
                            experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3 class="h5">Modern Tooling</h3>
                        <p>Take advantage of Laravel's modern tooling and libraries to boost your productivity.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h3 class="h5">Robust Features</h3>
                        <p>Laravel includes built-in support for authentication, queues, caching, and more.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Laravel 12</h3>
                    <p>Building the web of tomorrow with the tools of today.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
