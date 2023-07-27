<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fixedgear | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e273e69b57.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 px-5 fs-3 fw-bolder" href="/"><span
                    class="text-warning">DI</span>BENGKEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse me-5" id="navbarNav">
                <!-- Right Side Of Navbar -->
                <ul class="nav justify-content-end navbar-nav ms-auto me-5">
                    @guest
                        <!-- Authentication Links -->
                        <li class="nav-item me-3 fs-6">
                            <a class="btn btn-light px-4" href="login">
                                <span class="fw-medium">Login</span></a>
                        </li>
                        <li class="nav-item me-3 fs-6">
                            <a class="btn btn-outline-dark px-4" href="register">
                                <span class="fw-medium">Daftar</span></a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="/dashboard-user">
                                        <i class="fa-regular fa-user"></i>
                                        Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/logout">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        Logout</a>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
                {{-- @else
                        @if ($count > 0)
                            <li class="nav-item">
                                <a class="nav-link" href="/keranjang">Keranjang <span
                                        class="badge badge-primary">{{ $count }}</span></a>
                            </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li> --}}
                {{-- </ul> --}}
                {{-- @endguest --}}
                {{-- <ul class="">
                    <li class="">
                        <a class="" href="/login">
                            <span class="fw-medium">Masuk</span>
                        </a>
                    </li>
                    <li class="nav-item me-5 fs-6">
                        <a class="btn btn-outline-dark px-4" href="/register">
                            <span class="fw-medium">Daftar</span>
                        </a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('container')
    </div>
    <footer class="py-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 Dibengkel</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
