<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
    <meta content="my portofolio" name="description">
    <meta content="portofoliio, agus amirudin" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('public/img/favicon.png')}}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('public/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">

</head>

<body>

    {{$slot}}
    @include('sweetalert::alert')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Brandon Johnson</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('public/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('public/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('public/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('public/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('public/vendor/typed.js/typed.min.js')}}"></script>
    <script src="{{asset('public/vendor/waypoints/noframework.waypoints.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('public/js/main.js')}}"></script>

</body>

</html>