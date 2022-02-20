<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> The Pizza Company</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons
    ================================================== -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

  <!-- Stylesheet
    ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lajawab dine in catering" />
    <meta name="keywords" content="restaurant, a la carte menu, thali, Biryani, Appetizers, Soup, Tandoori, Amritsari Kulcha, Karahi Chicken ,Goat Meat " />
    <meta name="author" content="BDEXPERT" />

   
    <!--====== FAVICON ICON =======-->
  <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />
  <!--====== STYLESHEETS ======-->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/pogo-slider.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/datepicker.css">
  <link rel="stylesheet" href="css/timepicker.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!--====== MAIN STYLESHEETS ======-->
  <link href="style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <!-- Navigation
    ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#features" class="page-scroll">Home</a></li>
          <li><a href="#about" class="page-scroll">About</a></li>
          <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
          <li><a href="#team" class="page-scroll">Special Offer</a></li>
          <li><a href="#contact" class="page-scroll">Contact</a></li>
          <button type="button" class="btn btn-primary adm"><a href="Admin/index.php">Admin</a></button>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>
  <a href="#features" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>
  <!-- Header -->
  <?php
  include('dbc.php');
  ?>
  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="intro-text">
              <h1> The Pizza Company</h1>
              <p>Reservations:03046444363</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Features Section -->
  <div id="features" class="text-center">
    <div class="container">
      <div class="section-title">
        <h2>Our Specials</h2>
      </div>
      <div class="row">
        <?php $query = mysqli_query($con, "select * from category order by categoryid LIMIT 3");
        $cnt = 1;
        if (!empty($query)) {
          while ($row = mysqli_fetch_array($query)) { ?>

            <div class="col-xs-12 col-sm-4">
              <div class="features-item">
                <h3><?php echo isset($row['catname']) ? $row['catname'] : ''; ?></h3>
                <img src="<?php echo isset($row['photo']) ? "Admin/" . $row['photo'] : ''; ?>" class="img-responsive" alt="" style="max-height: 220px;min-height: 220px;max-width: 320px;min-width: 320px;">
                <p><?php echo isset($row['description']) ? $row['description'] : ''; ?></p>
              </div>
            </div>
        <?php $cnt = $cnt + 1;
          }
        } ?>

      </div>
    </div>
  </div>

  <!-- About Section -->
  <div id="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-6 about-img"> </div>
        <div class="col-xs-12 col-md-3 col-md-offset-1">
          <div class="about-text">
            <div class="section-title">
              <h2>Our Story</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--MENUS AREA-->
  <div id="restaurant-menu">
    <div class="container">
      <div class="section-title text-center">
        <h2>Menu</h2>
      </div>
      <section class="menus-area section-padding" id="menu">
        <div class="container wow fadeIn">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
              <div class="area-title text-center">
                <h2>Today’s menu</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
              <div class="food-menu-list-menu">
                <ul>
                  <li class="filter active" data-filter="all">All</li>
                  <li class="filter" data-filter=".main-dishes">Main Dishes</li>
                  <li class="filter" data-filter=".appetizers">Pizza</li>
                  <li class="filter" data-filter=".rice">Shawarmas</li>
                  <li class="filter" data-filter=".tandoori">Burger</li>
                </ul>
              </div>
            </div>
          </div>


          <div class="row food-menu-list">

            <?php $query = mysqli_query($con, "select * from product");
            $cnt = 1;
            if (!empty($query)) {
              while ($row = mysqli_fetch_array($query)) { ?>

                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu main-dishes">
                  <div class="single-menu-details">
                    <div class="food-menu-img"><img src="<?php echo isset($row['photo']) ? "Admin/" . $row['photo'] : ''; ?>" alt=""></div>
                    <div class="food-menu-details">
                      <h3><?php echo isset($row['productname']) ? $row['productname'] : ''; ?><span class="menu-price">$<?php echo isset($row['price']) ? $row['price'] : '0'; ?></span></h3>
                      <p class="menu-speacification">
                        <?php echo isset($row['description']) ? $row['description'] : ''; ?>
                      </p>
                      <p class="menu-speacification">
                        <a href="" class="btn btn-danger btn-rounded mb-4" id="<?php echo isset($row['productid']) ? $row['productid'] : ''; ?>" data-toggle="modal" data-target="#modalContactForm">Order</a>
                      </p>
                    </div>
                  </div>
                </div>
            <?php $cnt = $cnt + 1;
              }
            } ?>

            <!-- Burger  Section -->
            <?php $query = mysqli_query($con, "select * from product WHERE categoryid=3");
            $cnt = 1;
            if (!empty($query)) {
              while ($row = mysqli_fetch_array($query)) { ?>

                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu tandoori">
                  <div class="single-menu-details">
                    <div class="food-menu-img"><img src="<?php echo isset($row['photo']) ? "Admin/" . $row['photo'] : ''; ?>" alt="">
                    </div>
                    <div class="food-menu-details">
                      <h3><?php echo isset($row['productname']) ? $row['productname'] : ''; ?><span class="menu-price">$<?php echo isset($row['price']) ? $row['price'] : '0'; ?></span>
                      </h3>
                      <p class="menu-speacification">
                        <?php echo isset($row['description']) ? $row['description'] : ''; ?>
                      </p>
                      <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Order</a>
                      </p>
                    </div>
                  </div>
                </div>
            <?php $cnt = $cnt + 1;
              }
            } ?>



            <!-- pizza  Section -->



            <?php $query = mysqli_query($con, "select * from product WHERE categoryid=1");
            $cnt = 1;
            if (!empty($query)) {
              while ($row = mysqli_fetch_array($query)) { ?>

                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu appetizers">
                  <div class="single-menu-details">
                    <div class="food-menu-img"><img src="<?php echo isset($row['photo']) ? "Admin/" . $row['photo'] : ''; ?>" alt="">
                    </div>
                    <div class="food-menu-details">
                      <h3><?php echo isset($row['productname']) ? $row['productname'] : ''; ?><span class="menu-price">$<?php echo isset($row['price']) ? $row['price'] : ''; ?></span>
                      </h3>
                      <p class="menu-speacification">
                        <?php echo isset($row['description']) ? $row['description'] : ''; ?>
                      </p>
                      <p class="menu-speacification">
                        <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Order</a>
                      </p>
                    </div>
                  </div>
                </div>

            <?php $cnt = $cnt + 1;
              }
            } ?>


            <!-- Shawrmas  Section -->

            <?php $query = mysqli_query($con, "select * from product WHERE categoryid=2");
            $cnt = 1;
            if (!empty($query)) {
              while ($row = mysqli_fetch_array($query)) { ?>

                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu rice">
                  <div class="single-menu-details">
                    <div class="food-menu-img"><img src="<?php echo isset($row['photo']) ? "Admin/" . $row['photo'] : ''; ?>" alt="">
                    </div>
                    <div class="food-menu-details">
                      <h3><?php echo isset($row['productname']) ? $row['productname'] : ''; ?><span class="menu-price">$<?php echo isset($row['price']) ? $row['price'] : ''; ?></span>
                      </h3>
                      <p class="menu-speacification">
                        <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Order</a>
                        &nbsp;
                      </p>
                      <p class="menu-speacification">&nbsp;
                        <?php echo isset($row['description']) ? $row['description'] : ''; ?>

                      </p>
                    </div>
                  </div>
                </div>

            <?php $cnt = $cnt + 1;
              }
            } ?>







            <!-- Gallery Section -->
            <div id="gallery">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-6 col-md-3">
                    <div class="gallery-item"> <img src="img/gallery/01.jpg" class="img-responsive" alt=""></div>
                  </div>
                  <div class="col-xs-6 col-md-3">
                    <div class="gallery-item"> <img src="img/gallery/02.jpg" class="img-responsive" alt=""></div>
                  </div>
                  <div class="col-xs-6 col-md-3">
                    <div class="gallery-item"> <img src="img/gallery/03.jpg" class="img-responsive" alt=""></div>
                  </div>
                  <div class="col-xs-6 col-md-3">
                    <div class="gallery-item"> <img src="img/gallery/04.jpg" class="img-responsive" alt=""></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Team Section -->
            <div id="team">

              <div id="row">
                <section class="promotions-area section-padding" id="promotion">
                  <div class="promotion-area-bg" data-stellar-background-ratio="0.6"></div>
                  <div class="container wow fadeIn">
                    <div class="row">
                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="area-title text-center">
                          <h2>Special Offer</h2>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="menu-discount-offer col-md-12 col-lg-12 col-sm-12 col-xs-12">

                        <div class="single-promotions">
                          <div class="promotions-img">
                            <img src="img/promotions/promo_slide_20.jpg" alt="">
                          </div>
                          <div class="promotions-details">
                            <h3>LargePizza</h3>
                            <p>Hooves cooked with garlic, turmeric & butter</p>
                            <p>Sabots cuits avec de l'ail, au curcuma et au beurre</p>
                            <span class="special-price"><sup>$</sup>8.<sub>99</sub></span>

                            <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Order</a>

                          </div>
                        </div>

                        <div class="single-promotions">
                          <div class="promotions-img">
                            <img src="img/promotions/promo_slide_3.jpg" alt="">
                          </div>
                          <div class="promotions-details">
                            <h3>Burger</h3>
                            <p>Hooves cooked with garlic, turmeric & butter</p>
                            <p>Sabots cuits avec de l'ail, au curcuma et au beurre</p>
                            <div class="special-price"><sup>$</sup>9.<sub>99</sub>
                              <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Order</a>
                            </div>
                          </div>
                        </div>

                        <div class="single-promotions">
                          <div class="promotions-img">
                            <img src="img/promotions/promo_slide_5.jpg" alt="">
                          </div>
                          <div class="promotions-details">
                            <h3>Shawarma</h3>
                            <p>Lamb leg steak grilled with special house spices</p>
                            <p>Bifteck de jambe d'agneau grille avec epices speciales</p>
                            <div class="special-price"><sup>$</sup>19.<sub>99</sub>
                              <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Order</a>
                            </div>
                          </div>
                        </div>

                        <div class="single-promotions">
                          <div class="promotions-img">
                            <img src="img/promotions/promo_slide_14.jpg" alt="">
                          </div>
                          <div class="promotions-details">
                            <h3>Small Pizza</h3>
                            <p>Salmon cooked to perfection in the tandoor over</p>
                            <p>Saumon grille a la perfection dans le four tandoor</p>
                            <div class="special-price"><sup>$</sup>14.<sub>99</sub>
                              <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Order</a>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </section>

              </div>
              <!-- Contact Section -->
              <div id="contact" class="text-center">
                <div class="container text-center">
                  <div class="col-md-4">
                    <h3>Reservations</h3>
                    <div class="contact-item">
                      <p>Please call</p>
                      <p>(887) 654-3210</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h3>Address</h3>
                    <div class="contact-item">
                      <p>4321 California St,</p>
                      <p>San Francisco, CA 12345</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h3>Opening Hours</h3>
                    <div class="contact-item">
                      <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
                      <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="section-title text-center">
                    <h3>Send us a message</h3>
                  </div>
                  <div class="col-md-8 col-md-offset-2">
                    <form action="contactback.php" method="post" id="contactForm" novalidate onSubmit="contact()">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <textarea name="message" name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                        <p class="help-block text-danger"></p>
                      </div>
                      <div id="success"></div>
                      <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                    </form>
                    <script>
                      function contact() {
                        alert('Successfully Send');
                      }
                    </script>
                  </div>
                </div>
              </div>
              <div id="footer">
                <div class="container text-center">
                  <div class="col-md-6">
                    <p>&copy; 2017 Gusto. All rights reserved. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
                  </div>
                  <div class="col-md-6">
                    <div class="social">
                      <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
              <script type="text/javascript" src="js/bootstrap.js"></script>
              <script type="text/javascript" src="js/SmoothScroll.js"></script>
              <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
              <script type="text/javascript" src="js/contact_me.js"></script>
              <script type="text/javascript" src="js/main.js"></script>

              <!--FOOER AREA END-->
              <!--====== SCRIPTS JS ======-->
              <script src="js/vendor/jquery-1.12.4.min.js"></script>
              <script src="js/vendor/bootstrap.min.js"></script>
              <!--====== PLUGINS JS ======-->
              <script src="js/vendor/jquery.easing.1.3.js"></script>
              <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
              <script src="js/jquery.pogo-slider.js"></script>
              <script src="js/owl.carousel.min.js"></script>
              <script src="js/stellar.js"></script>
              <script src="js/jquery.mixitup.min.js"></script>
              <script src="js/datepicker.min.js"></script>
              <script src="js/timepicker.min.js"></script>
              <script src="js/wow.min.js"></script>
              <script src="js/jquery.magnific-popup.min.js"></script>
              <script src="js/jquery.sticky.js"></script>
              <!--===== ACTIVE JS=====-->
              <script src="js/main.js"></script>

              <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h4 class="modal-title w-100 font-weight-bold">Enter Detail For Order</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="orderback.php" method="post" onSubmit="order()">
                      <div class="modal-body mx-3">


                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="form34">Your name</label>
                          <input type="text" id="form34" class="form-control validate" name="customer">
                        </div>

                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="form29">Your Phone number</label>
                          <input type="text" id="form29" class="form-control validate" name="phone">
                        </div>
                        <!-- <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form34">Quantity</label>
                        <input type="text" id="form34" class="form-control validate" name="quantity">
                    </div> -->
                        <div class="md-form mb-5">
                          <label data-error="wrong" data-success="right" for="form32">Pizza/Burger/Shawarma</label>
                          <select id="form32" class="form-control validate" name="productid">
                            <?php $query = mysqli_query($con, "select * from product");
                            $cnt = 1;
                            if (!empty($query)) {
                              while ($row = mysqli_fetch_array($query)) { ?>
                                <option value="<?php echo isset($row['productid']) ? $row['productid'] : ''; ?>"><?php echo isset($row['productname']) ? $row['productname'] : ''; ?></option>
                            <?php $cnt = $cnt + 1;
                              }
                            } ?>
                          </select>
                        </div>

                        <div class="md-form">
                          <label data-error="wrong" data-success="right" for="form8">Your Address</label>
                          <textarea type="text" id="form8" class="md-textarea form-control" rows="4" name="address"></textarea>
                        </div>

                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-unique">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
</body>

</html>
<script>
  function order() {
    alert('Order Successfully Send');
  }
</script>




<?php
require __DIR__ . '/Twilio/autoload.php';

use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACdae12d18c9cc309ae318ff01c7cd5447';
$auth_token = 'ec90a665cf3addd70f49f4e49d0ab315';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+1 774-315-3180";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
  // Where to send a text message (your cell phone?)
  '+923012887408',
  array(
    'from' => $twilio_number,
    'body' => 'I sent this message in under 10 minutes!'
  )
);
?>