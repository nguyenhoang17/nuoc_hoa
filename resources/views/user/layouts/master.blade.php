<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="./user/img/favicon.png" type="image/png" />
    <title>Eiser ecommerce</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./user/css/bootstrap.css" />
    <link rel="stylesheet" href="./user/vendors/linericon/style.css" />
    <link rel="stylesheet" href="./user/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./user/css/themify-icons.css" />
    <link rel="stylesheet" href="./user/css/flaticon.css" />
    <link rel="stylesheet" href="./user/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="./user/vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="./user/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="./user/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="./user/vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="./user/css/style.css" />
    <link rel="stylesheet" href="./user/css/responsive.css" />
    @yield('css')
</head>

<body>
<!--================Header Menu Area =================-->
@include('user.includes.header')
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
@yield('content')
<!--================ End Blog Area =================-->

<!--================ start footer Area  =================-->
@include('user.includes.footer')
<!--================ End footer Area  =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./user/js/jquery-3.2.1.min.js"></script>
<script src="./user/js/popper.js"></script>
<script src="./user/js/bootstrap.min.js"></script>
<script src="./user/js/stellar.js"></script>
<script src="./user/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="./user/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="./user/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="./user/vendors/isotope/isotope-min.js"></script>
<script src="./user/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="./user/js/jquery.ajaxchimp.min.js"></script>
<script src="./user/vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="./user/vendors/counter-up/jquery.counterup.js"></script>
<script src="./user/js/mail-script.js"></script>
<script src="./user/js/theme.js"></script>
@yield('js')
</body>

</html>
