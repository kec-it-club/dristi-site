<? defined("CHECK") OR ( header( 'Location: /' ) && exit ); ?>
    
<?
include "include/base.php";

define("PAGE",Pages::EVENTS )
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dristi 2.0 : Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- {/* Item prop */} -->
  <meta itemprop="name" content="Dristi2.0" />
  <meta itemprop="description" content="The Vision beyond imagination" />
  <meta itemprop="image" content="https://dristi.keckist.edu.np/social.jpg" />

  <!-- {/* Twitter */} -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Dristi2.0" />
  <meta name="twitter:description" content="The Vision beyond imagination" />
  <meta name="twitter:site" content="@dristi" />
  <meta name="twitter:creator" content="@dristi" />
  <meta name="twitter:image:src" content="https://dristi.keckist.edu.np/social.jpg" />
  <!-- {/* Twitter */} -->

  <!-- {/* Facebook */} -->
  <meta property="og:title" content="Dristi2.0" />
  <meta property="og:description" content="The Vision beyond imagination" />
  <meta property="og:image" content="https://dristi.keckist.edu.np/social.jpg" />
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
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('./social.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <!-- <h1 class="mb-3 bread">Hackathon</h1> -->
          <p class="breadcrumbs">
            <span class="mr-2"> <a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Events <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row mb-4 justify-content-center">
        <div class="text-center heading-section ftco-animate">
          <span class="subheading"></span>
          <h2 class="mb-4">
            <span>Our</span>
            Events</h2>
        </div>
      </div>
      <div class="row d-flex">

        <!-- event item start -->
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <!-- here goes the photo -->
            <a href="events/hackathon" class="block-20" style="background-image: url('images/hackathon.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;font-weight: 600 !important;" class="day">Hackathon</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">A Hackathon is an event where programmers meet to do collaborative
                computer
                programming..</p>
              <a href="events/hackathon">
                <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="More Info">
              </a>
            </div>
          </div>
        </div>
        <!-- event item end -->

        <!-- event item start -->
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <!-- here goes the photo -->
            <a href="events/software-exhibition" class="block-20" style="background-image: url('images/softwareExhibition.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Software Exhibition</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Software events often act as a medium to connect 
                the ideas of students into a practical solution...</p>
                <a href="events/software-exhibition">
                  <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="More Info">
                </a>
            </div>
          </div>
        </div>
        <!-- event item end -->

        <!-- event item start -->
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <!-- here goes the photo -->
            <a href="events/code-camp" class="block-20" style="background-image: url('images/codeCamp.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Code Camp</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">A Code Camp is an event where programmers meet to do collaborative computer programming...</p>
              <a href="events/code-camp">
                <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="More Info">
              </a>            
            </div>
          </div>
        </div>
        <!-- event item end -->

        <!-- event item start -->
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <!-- here goes the photo -->
            <a href="events/game-fest" class="block-20" style="background-image: url('images/gameFest.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Game Fest</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Gaming has always been a way for people to escape reality. Games are an important...</p>
                <a href="events/game-fest">
                  <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="More Info">
                </a>               
              </div>
          </div>
        </div>
        <!-- event item end -->

        <!-- event item start -->
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <!-- here goes the photo -->
            <a href="events/code-warz" class="block-20" style="background-image: url('images/codeWarz.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Code Warz</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Code Warz is a coding game. Various moves of the players are done...</p>
                <a href="events/code-warz">
                  <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="More Info">
                </a> 
            </div>
          </div>
        </div>
        <!-- event item end -->

        <!-- event item start -->
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <!-- here goes the photo -->
            <a href="events/quick-code" class="block-20" style="background-image: url('images/quickCode.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Quick Code</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Dristi 2.0 has created a platform to programmers in the world of algorithm. In this event you will</p>
                <a href="events/quick-code">
                  <input type="submit" style="cursor: pointer;" class="button btn-send disabled" value="More Info">
                </a> 
            </div>
          </div>
        </div>
        <!-- event item end -->
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
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
