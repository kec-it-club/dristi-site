<? defined("CHECK") OR ( header( 'Location: /' ) && exit ); ?>
    
<?
include "include/base.php";

define("PAGE",Pages::CONTACT )
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dristi 2.0: Contact Us</title>
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

  <style>
    
  </style>
</head>

<body>
<? include 'include/nav.php'; ?>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('./images/logo/flex.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <h1 class="mb-3 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i
                class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h3">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-5">
          <p><span>Address:</span> <a href="#"> Kathmandu Engineering College Kalimati, Kathmandu, Nepal </a></p>
        </div>
        <div class="col-md-3">
          <p><span>Phone:</span> <a href="tel://+97701-4284902">+977-01-4284902</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:info@dristi@keckist.edu.np">dristi@keckist.edu.np</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-4 order-md-last d-flex">

          <form style="width: -webkit-fill-available;" id="contact-form" method="POST"
            action="https://mailthis.to/sujanpoudel" novalidate="true">
            <div class="controls">
              <div class="form-group">
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name"
                  required="required" data-error="Name is required.">
                <div class="form-control-border"></div>
                <i class="form-control-icon pe-7s-user"></i>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address"
                  required="required" data-error="Valid email is required.">
                <div class="form-control-border"></div>
                <i class="form-control-icon pe-7s-mail"></i>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <textarea id="form_message" name="message" class="form-control" placeholder="Message for Us" rows="4"
                  required="required" data-error="Please, leave me a message."></textarea>
                <div class="form-control-border"></div>
                <i class="form-control-icon pe-7s-comment"></i>
                <div class="help-block with-errors"></div>
              </div>
              <input type="hidden" name="_subject" value="Contact from sujanpoudel.me">
              <input type="hidden" name="_honeypot" value="">
              <input type="hidden" name="_confirmation"
                value="Your message is successfully sent, I will contact you back as soon as possible.">

              <input style="position:relative;" type="submit" class="button btn-send disabled" value="Send message">

            </div>
          </form>
        </div>

        <div class="col-md-8 d-flex">
          <iframe width="100%" height="100%" id="gmap_canvas"
            src="https://maps.google.com/maps?q=Kathmandu%20Engineering%20college&t=&z=14&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
          </iframe>
        </div>
      </div>
  </section>

  <? include "include/footer.php" ?>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


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
  <script src="js/main.js"></script>

</body>

</html>