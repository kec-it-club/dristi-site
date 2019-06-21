<? defined("CHECK") or (header('Location: /') && exit); ?>

<?
include "include/base.php";

define("PAGE", Pages::HOME)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dristi 2.0</title>

    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#000000" />
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />

    <meta name="description" content="The Vision beyond imagination" />
    <meta name="image" content="https://dristi.keckist.edu.np/images/logo/flex.jpg" />

    <!-- {/* Item prop */} -->
    <meta itemprop="name" content="Dristi2.0" />
    <meta itemprop="description" content="The Vision beyond imagination" />
    <meta itemprop="image" content="https://dristi.keckist.edu.np/images/logo/flex.jpg" />

    <!-- {/* Twitter */} -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Dristi2.0" />
    <meta name="twitter:description" content="The Vision beyond imagination" />
    <meta name="twitter:site" content="@dristi" />
    <meta name="twitter:creator" content="@dristi" />
    <meta name="twitter:image:src" content="https://dristi.keckist.edu.np/images/logo/flex.jpg" />
    <!-- {/* Twitter */} -->

    <!-- {/* Facebook */} -->
    <meta property="og:title" content="Dristi2.0" />
    <meta property="og:description" content="The Vision beyond imagination" />
    <meta property="og:image" content="https://dristi.keckist.edu.np/images/logo/flex.jpg" />
    <meta property="og:url" content="https://dristi.keckist.edu.np" />
    <meta property="og:site_name" content="Dristi2.0" />
    <meta property="og:type" content="website" />
    <!-- {/* Facebook */} -->

    <!-- {/* Styles */} -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- {/* Styles */} -->
</head>

<body>

    <? include 'include/nav.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/images/building.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" style="font-weight: 500;" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span>Dristi 2.0</span> <br> The
                        Vision beyond imagination </h1>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">July 5-7, 2019.
                        <b>Kathmandu Enginnering College </b>, Kalimati</p>
                    <div id="timer" class="d-flex mb-3">
                        <div class="time" id="days"></div>
                        <div class="time pl-4" id="hours"></div>
                        <div class="time pl-4" id="minutes"></div>
                        <div class="time pl-4" id="seconds"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- events start -->


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row mb-4 justify-content-center">
                <div class="text-center heading-section ftco-animate">
                    <span class="subheading"></span>
                    <h2 class="mb-4">
                        <span>Error: 404</span>
                        Not found </h2>
                </div>
            </div>
        </div>
    </section>


    <? include "include/footer.php" ?>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/faviconjs/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/jquery.timepicker.min.js"></script>
    <script src="/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="/js/google-map.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>