<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hiring management </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
    rel="stylesheet">

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

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">Uptown</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/adminhome" class="nav-link">Home</a></li>
          <li class="nav-item active">
            <div class="bs-example">
              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Userlist</a>
                <div class="dropdown-menu">
                  <a href="{{route('adminhome.serviceshow')}}" class="dropdown-item">Service Providers</a>
                  <a href="{{route('adminhome.customershow')}}" class="dropdown-item">Customers</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a href="{{route('adminhome.profile')}}" class="nav-link">Profile</a></li>
         
          <li class="nav-item">
            <div class="bs-example">
              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others</a>
                <div class="dropdown-menu">
                  <a href="../admin/feedback" class="dropdown-item">Feedbacks</a>
                  <a href="../admin/message" class="dropdown-item">Messages</a>
                  <a href="../admin/history" class="dropdown-item">User History</a>
                  <a href="../admin/transaction" class="dropdown-item">Transaction</a>
                </div>
              </div>
            </div>
          </li>
         
          <li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-center align-items-center">
        <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
          <div class="text text-center">
            <h1 class="mb-4"> <br>Welcome home Admin {{session('userid')}} </h1>

          </div>
        </div>
      </div>
    </div>
    <div class="mouse">
      <a href="#" class="mouse-icon">
        <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
      </a>
    </div>
  </div>



  <section class="ftco-section ftco-no-pb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          <span class="subheading">Our Services</span>
       
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-piggy-bank"></span>
            </div>
            <div class="media-body py-md-4">
              <h3>No Downpayment</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-wallet"></span>
            </div>
            <div class="media-body py-md-4">
              <h3>All Cash Offer</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-file"></span></div>
            <div class="media-body py-md-4">
              <h3>Experts in Your Corner</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-locked"></span>
            </div>
            <div class="media-body py-md-4">
              <h3>Lokced in Pricing</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 

  <section class="ftco-section ftco-degree-bg services-section img mx-md-5"
    style="background-image: url(images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-start mb-5">
        <div class="col-md-6 text-center heading-section heading-section-white ftco-animate">
          <span class="subheading">Work flow</span>
          <h2 class="mb-3">How it works</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                  <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>01</span></div>
                  <h3>Evaluate Property</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                  <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>02</span></div>
                  <h3>Meet Your Agent</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                  <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>03</span></div>
                  <h3>Close the Deal</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                  <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>04</span></div>
                  <h3>Have Your Property</h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pb">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
          style="background-image: url(images/about.jpg);">
        </div>
        <div class="col-md-6 wrap-about py-md-5 ftco-animate">
          <div class="heading-section p-md-5">
            <h2 class="mb-4">We Put People First.</h2>

            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
              paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have
              been rewritten a thousand times and everything that was left from its origin would be the word "and" and
              the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said
              could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her
              drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-counter img" id="section-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="305">0</strong>
              <span>Area <br>Population</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="1090">0</strong>
              <span>Total <br>Properties</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text text-border d-flex align-items-center">
              <strong class="number" data-number="209">0</strong>
              <span>Average <br>House</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 py-4 mb-4">
            <div class="text d-flex align-items-center">
              <strong class="number" data-number="67">0</strong>
              <span>Total <br>Branches</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftco-agent ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center pb-5">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Agents</span>
          <h2 class="mb-4">Our Agents</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ftco-animate">
          <div class="agent">
            <div class="img">
              <img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
            </div>
            <div class="desc">
              <h3><a href="properties.html">James Stallon</a></h3>
              <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="agent">
            <div class="img">
              <img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
            </div>
            <div class="desc">
              <h3><a href="properties.html">James Stallon</a></h3>
              <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="agent">
            <div class="img">
              <img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
            </div>
            <div class="desc">
              <h3><a href="properties.html">James Stallon</a></h3>
              <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="agent">
            <div class="img">
              <img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
            </div>
            <div class="desc">
              <h3><a href="properties.html">James Stallon</a></h3>
              <p class="h-info"><span class="position">Listing</span> <span class="details">&mdash; 10 Properties</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Uptown</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
            <ul class="ftco-footer-social list-unstyled mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Community</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Search Properties</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>For Agents</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reviews</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">About Us</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Our Story</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Meet the team</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Company</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Press</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San
                    Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span
                      class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved |
          </p>
        </div>
      </div>
    </div>
  </footer>



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