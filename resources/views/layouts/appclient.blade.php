<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title>LearnEdu &minus; Education & Courses HTML5 Template</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
		
		<!-- Learedu Stylesheet -->
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
		
		<!-- Learedu Color -->
		<link rel="stylesheet" href="{{asset('css/color/color1.css')}}">
		<!--<link rel="stylesheet" href="css/color/color2.css">-->
		<!--<link rel="stylesheet" href="css/color/color3.css">-->
		<!--<link rel="stylesheet" href="css/color/color4.css">-->
		<!--<link rel="stylesheet" href="css/color/color5.css">-->
		<!--<link rel="stylesheet" href="css/color/color6.css">-->
		<!--<link rel="stylesheet" href="css/color/color7.css">-->
		<!--<link rel="stylesheet" href="css/color/color8.css">-->
    </head>

    <body>









{{-- start header --}}
@include('include.client_header')
{{-- end header --}}

{{-- start content --}}

@yield('contenu')

{{-- end content --}}


@include('include.client_footer')








<!-- Jquery JS-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate.min.js')}}"></script>
<!-- Popper JS-->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Jquery Steller JS -->
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<!-- Particle JS -->
<script src="{{asset('js/particles.min.js')}}"></script>
<!-- Fancy Box JS-->
<script src="{{asset('js/facnybox.min.js')}}"></script>
<!-- Magnific Popup JS-->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Masonry JS-->
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<!-- Circle Progress JS -->
<script src="{{asset('js/circle-progress.min.js')}}"></script>
<!-- Owl Carousel JS-->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Waypoints JS-->
<script src="{{asset('js/waypoints.min.js')}}"></script>
<!-- Slick Nav JS-->
<script src="{{asset('js/slicknav.min.js')}}"></script>
<!-- Counter Up JS -->
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<!-- Easing JS-->
<script src="{{asset('js/easing.min.js')}}"></script>
<!-- Wow Min JS-->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- Scroll Up JS-->
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<!-- Google Maps JS -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
<script src="{{asset('js/gmaps.min.js')}}"></script>
<!-- Main JS-->
<script src="{{asset('js/main.js')}}"></script>

@yield('scripts')

</body>
</html>