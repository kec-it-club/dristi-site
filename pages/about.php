<? defined("CHECK") or (header('Location: /') && exit); ?>

<?
include "include/base.php";

define("PAGE", Pages::ABOUT)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dristi 2.0 : About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



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
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">


</head>

<body>

<? include 'include/nav.php'; ?>

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('./images/logo/flex.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <h1 class="mb-3 bread">About Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section style="padding-bottom: 2em;" class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading"></span>
          <h2 class="mb-4">
            <span>Dristi </span>
            2.0</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="text">
            <p style="font-size: 17px;" class="mb-4">
              With the motto of <strong>‘The Vision Beyond Imagination’</strong> , Dristi is a national
              event
              that represents students from different engineering departments of Kathmandu Engineering
              College that allows all the engineering minds to cross each other.
            </p>
            <p style="font-size: 17px;" class="mb-4">
              An event intended to encourage
              new talents along with the competitive spirit in the
              technical field, “DRISTI” comprises many skill development programs, talk shows, competitive
              hardware,
              software and electrical events among students from various national level colleges. </p>

            <p style="font-size: 17px;" class="mb-4">
              It also consists of
              non-competitive and recreational events such as exhibitions from Civil
              and Architecture faculty including various entertainment activities, gaming competitions,
              recreations and much more.</p>

          </div>

        </div>
      </div>
    </div>
  </section>

  <? include "include/footer.php" ?>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/validator.js"></script>


</body>

</html>

<script>
  document.write(
    '<script src="http://' +
    (location.host || '${1:localhost}').split(':')[0] +
    ':${2:80}/livereload.js?snipver=1"></' +
    'script>'
  );

  $(function() {
    $('#contact-form').validator();
    $('#contact-form').on('submit', function(e) {
      return !e.isDefaultPrevented();
    });
  });
</script>