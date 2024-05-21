<!DOCTYPE html>
<html lang="en">

<head>
@notifyCss
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

<body>
    <!-- Topbar Start -->
   @include('frontend.fixed.header')
    <!-- Navbar End -->


    <!-- Carousel Start -->
   @yield('content')
    <!-- Blog End -->


    <!-- Footer Start -->
    @include('frontend.fixed.footer')
    <!-- Footer End -->


    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('lib/easing/easing.min.js')}}"></script>
    <script src="{{url('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{url('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{url('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
   
    <!-- Template Javascript -->
    <script src="{{url('/js/main.js')}}"></script>
    
</body>


</html>