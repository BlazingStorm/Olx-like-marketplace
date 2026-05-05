<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <link href="{{ asset('electro/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('electro/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('electro/lib/font-awesome/css/all.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('electro/css/custom.css') }}" rel="stylesheet">
    </head>

    <body>
      
        <div class="container-fluid sticky-top">
            <div class="row bg-primary px-4 align-items-center">
                <div class="col-lg-2">
                    <nav class="navbar navbar-light position-relative">
                        <a class="navbar-brand text-white fw-bold" href="{{ url('/') }}">
                            MOX
                        </a>
                        
                    </nav>
                </div>
                <div class="col-12 col-lg-9">
                    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
                        
                           
                            <div class="d-flex align-items-center w-100 gap-3 justify-content-center ">
                                <form action="#" method="POST" class="d-flex bg-light align-items-center rounded-pill px-2 w-75">
                                    <input type="text" class="form-control rounded-pill w-100 "
                                        placeholder="Looking for?">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            Categories
                                        </button>

                                        <ul class="dropdown-menu">

                                            <li class="form-check ">
                                                <input class="form-check-input" type="radio" name="category"
                                                    id="cat_all" value="" checked>
                                                <label class="form-check-label" for="cat_all">
                                                    All Categories
                                                </label>
                                            </li>

                                            <li class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    id="cat_electronics" value="electronics">
                                                <label class="form-check-label" for="cat_electronics">
                                                    Electronics
                                                </label>
                                            </li>

                                            <li class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    id="cat_vehicles" value="vehicles">
                                                <label class="form-check-label" for="cat_vehicles">
                                                    Vehicles
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <button type="submit" class="btn btn-warning rounded-pill px-4 ">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="dropdown ms-3">
                                <button class="btn btn-outline-light dropdown-toggle d-flex align-items-center"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user me-2"></i>
                                    @auth
                                        {{ Auth::user()->name }}
                                    @else
                                        Account
                                    @endauth
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end shadow">
                                    @guest
                                        <li>
                                            <a class="dropdown-item" href="{{ route('login') }}">
                                                <i class="fa fa-sign-in-alt me-2"></i> Login
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('register') }}">
                                                <i class="fa fa-user-plus me-2"></i> Register
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">
                                                <i class="fa fa-shopping-cart me-2"></i> Cart
                                            </a>
                                        </li>
                                        
                                    @else
                                        <li class="dropdown-header text-muted">
                                            Signed in as <strong>{{ Auth::user()->name }}</strong>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">
                                                <i class="fa fa-shopping-cart me-2"></i> Cart
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a href="{{ route('listing.create') }}" class="dropdown-item">
                                                <i class="fa fa-id-card" aria-hidden="true"></i>  Create Listing
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out-alt me-2"></i> Logout
                                            </a>
                                        </li>
                                        

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    @endguest
                                </ul>
                            </div>
                        
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- jQuery Easing -->
        <script src="{{ asset('electro/lib/easing/easing.min.js') }}"></script>

        <!-- WOW.js -->
        <script src="{{ asset('electro/lib/wow/wow.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script src="{{ asset('electro/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <!-- Electro main.js (LAST) -->
        <script src="{{ asset('electro/js/main.js') }}"></script>
    </body>

</html>
