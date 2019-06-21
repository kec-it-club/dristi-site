<? defined("CHECK") or (header('Location: /') && exit); ?>

<?
include "include/base.php";

define("PAGE", Pages::EVENTS)
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

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('./social.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <h1 class="mb-3 bread">Events</h1>
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
            <a href="events/hackathon" class="block-20" style="background-image: url('images/events/hackathon.jpg');">
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
            <a href="events/software-exhibition" class="block-20" style="background-image: url('images/events/softwareExhibition.jpg');">
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
            <a href="events/software-exhibition" class="block-20" style="background-image: url('images/events/kurukshetra.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Kurukshetra</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Kurukshetra is an event with objective of building a manual war robot that should fight against other robots and push it out of the arena or destroy the bot.</p>
              <a href="events/kurukshetra">
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
            <a href="events/code-camp" class="block-20" style="background-image: url('images/events/codeCamp.jpg');">
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
            <a href="events/game-fest" class="block-20" style="background-image: url('images/events/gameFest.jpg');">
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
            <a href="events/code-warz" class="block-20" style="background-image: url('images/events/codeWarz.jpg');">
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
            <a href="events/quick-code" class="block-20" style="background-image: url('images/events/quickCode.jpg');">
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


        <!-- event item start -->
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <!-- here goes the photo -->
            <a href="events/software-exhibition" class="block-20" style="background-image: url('/images/events/etching.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Circuit etching</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">PCB etching is the process that uses chemicals to make copper traces to connect different components on the circuit board.
                Copper is removed from the board except at the places where...</p>
              <a href="events/circuit-etching">
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
            <a href="events/software-exhibition" class="block-20" style="background-image: url('/images/events/junckyard.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Design beyond imagination</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">This event is based on the motto of DRISTI the vision beyond imagination. In this event, each team will
                be provided with scrap components and are required ....</p>
              <a href="events/design-beyond-imagination">
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
            <a href="events/junkyard-marvel" class="block-20" style="background-image: url('/images/events/junckyard.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Junkyard marvel competition</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">The Junkyard Marvel Battleground Competition is an open challenge which focuses on the logical
                and imaginative....</p>
              <a href="events/junkyard-marvel">
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
            <a href="events/art-competition" class="block-20" style="background-image: url('/images/events/art.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Art Competition</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">An artist grows by leaps and bounds when he or she puts artwork in the public eye for feedback, and that is what art competitions ...</p>
              <a href="events/art-competition">
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
            <a href="events/model-archi" class="block-20" style="background-image: url('/images/events/model making.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Model Competition (Architecture)</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">This is an model competition for the students of Bachelors of Architecture where .. </p>
              <a href="events/model-archi">
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
            <a href="events/earthquake-resistant" class="block-20" style="background-image: url('/images/events/earthquake.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Earthquake resistant design competition</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">The
                competition is planned to educate students about the effects of earthquakes on
                structures and to help them investigate and develop solutions to a simple design problem. </p>
              <a href="events/earthquake-resistant">
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
            <a href="events/extempore-speech" class="block-20" style="background-image: url('/images/events/speech.png');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Extempore speech</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">The meaning of extempore speech is a speech or spoken anything without preparation, so ...</p>
              <a href="events/extempore-speech">
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
            <a href="events/hardware-electrical" class="block-20" style="background-image: url('/images/events/hardware.jpeg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Open Hardware Demonstration</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Open Hardware Demonstration is a hardware event that provides the participants with a platform to present their projects in specified theme. </p>
              <a href="events/hardware-electrical">
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
            <a href="events/hardware-epc" class="block-20" style="background-image: url('/images/events/hardware.jpeg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Hardware Exhibition</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">‘Hardware Exhibition’ in Dristi 2.0 is a platform that provides the participants with an opportunity to present their hardware projects. </p>
              <a href="events/hardware-epc">
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
            <a href="events/model-civil" class="block-20" style="background-image: url('/images/events/civil-model.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Model Competition(Civil)</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">In this competition the physical model of the civil engineering structure is scaled down to suitable scale.</p>
              <a href="events/model-civil">
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
            <a href="events/model-electrical" class="block-20" style="background-image: url('/images/events/electrical-models.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Open model Demonstration</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Open model Demonstration is a event that provides the participants with a platform to present their projects/models in specified theme.</p>
              <a href="events/model-electrical">
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
            <a href="events/paper-bridge" class="block-20" style="background-image: url('/images/events/paper-bridge.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Paper Bridge Competition</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">The purpose of the competition is to build a bridge with the largest possible bearing, and this only from the copy paper! </p>
              <a href="events/paper-bridge">
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
            <a href="events/paper-presentation" class="block-20" style="background-image: url('/images/events/paper-presentation.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Paper Presentation(civil)</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">In this compitition a paper realated to Civil engineering should be presented.</p>
              <a href="events/paper-presentation">
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
            <a href="events/photography-competition" class="block-20" style="background-image: url('/images/events/photography.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Photography Competition</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Photography contests are a great way to find out if your images are up to scratch. By taking part in these competitions, you can win...</p>
              <a href="events/photography-competition">
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
            <a href="events/poetry" class="block-20" style="background-image: url('/images/events/poetry_competition.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Poetry</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Enter our Poetry Competition for your chance to present your talent and win... </p>
              <a href="events/poetry">
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
            <a href="events/robodrift" class="block-20" style="background-image: url('/images/events/robodrift.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Robodrift 6.0</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Organized by Robotics Club of Kathmandu Engineering College, Robodrift 6.0 is a competing platform for fellow bot builders to race their machines within a custom racing circuit. </p>
              <a href="events/robodrift">
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
            <a href="events/quiz-competition" class="block-20" style="background-image: url('/images/events/quiz-competition.png');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Quiz Competition</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Inter-college/Intra-college Quiz Competition is an event where various students from different colleges will participate
                in a competition.</p>
              <a href="events/quiz-competition">
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
            <a href="events/robomaze" class="block-20" style="background-image: url('/images/events/robo-maze.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Robo Maze</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">The Maze Runner is a competition organized by Robotics Club of KEC, Kalimati. Bots compete with each other where they go through a maze and solve it as quick as possible...</p>
              <a href="events/robomaze">
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
            <a href="events/spoken-word" class="block-20" style="background-image: url('/images/events/poetry_competition.jpg');">
            </a>
            <div class="text p-4 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
                <div class="one">
                  <!-- event name -->
                  <span style="font-size: 30px;
                                      font-weight: 600 !important;" class="day">Spoken Word Poetry Competition</span>
                </div>
              </div>
              <!-- short info -->
              <p style="color:#343a40;">Enter our Poetry Competition for your chance to present your talent and win...</p>
              <a href="events/spoken-word">
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

</body>

</html>