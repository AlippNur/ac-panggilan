 <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <ol class="breadcrumb justify-content-end mb-0">
                    <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Terms</a></li>
                    <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Privacy</a></li>
                    <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Support</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"><img class="img-fluid me-3" src="img/icon/icon-02-primary.png" alt="">AirCon</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
                <a class="nav-item nav-link {{ (request()->routeIs('home')) ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="nav-item nav-link {{ (request()->routeIs('about')) ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                <a class="nav-item nav-link {{ (request()->routeIs('service')) ? 'active' : '' }}" href="{{ route('service') }}">Our Services</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ (request()->routeIs('features') || request()->routeIs('quote') || request()->routeIs('team')) ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a class="dropdown-item {{ (request()->routeIs('features')) ? 'active' : '' }}" href="{{ route('features') }}">Features</a>
                        <a class="dropdown-item {{ (request()->routeIs('quote')) ? 'active' : '' }}" href="{{ route('quote') }}">Free Quote</a>
                        <a class="dropdown-item {{ (request()->routeIs('team')) ? 'active' : '' }}" href="{{ route('team') }}">Our Team</a>
                        <a class="dropdown-item {{ (request()->routeIs('testimonial')) ? 'active' : '' }}" href="{{ route('testimonial') }}">Testimonial</a>
                        <a class="dropdown-item {{ (request()->routeIs('404')) ? 'active' : '' }}" href="{{ route('404') }}">404 Page</a>
                    </div>
                </div>
                <a class="nav-item nav-link {{ (request()->routeIs('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

