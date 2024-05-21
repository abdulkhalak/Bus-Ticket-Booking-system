<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BUSES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('/css/style.min.css')}}" rel="stylesheet">
    <link href="{{url('/css/style.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('/css/style.css')}}" rel="stylesheet">
</head>
<div class="container-fluid bg-light pt-3 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <p><i class="fa fa-envelope mr-2"></i>Buses@gmail.com</p>
                    <p class="text-body px-3">|</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+88-01798223658</p>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @auth('userGuard')

                    <a class="text-primary pl-3" href="{{route('user.profile')}}">

                        <i class='fas fa-bus-alt' style='font-size:48px;'>{{auth('userGuard')->user()->name}}</i>
                    </a>
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User</a>
                    <div class="dropdown-menu border-0 rounded-0 m-0">
                        <a href="{{route('user.profile')}}" class="dropdown-item">Profile</a>
                        <a href="{{route('booking.details', auth('userGuard')->user()->id)}}" class="dropdown-item">Booking Details</a>
                    </div>
                    <a href="{{route('do.logout')}}" class="nav-item nav-link">Log out</a>
                    @endauth
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">BU</span>SES</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{route('homepage')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            
                    <a href="{{route('brance.location')}}" class="nav-item nav-link">Brance Location</a>
                    <div class="nav-item dropdown">
                        @guest('userGuard')
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="{{route('coustomer.login')}}" class="dropdown-item">Registration</a>
                            <a href="{{route('login.user')}}" class="dropdown-item">User Login</a>
                        </div>
                        @endguest
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>