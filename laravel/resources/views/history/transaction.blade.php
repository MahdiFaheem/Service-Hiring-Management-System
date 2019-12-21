<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hiring management </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

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
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{route('customer-home.index')}}">Uptown</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{route('customer-home.index')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{route('customer.profile')}}" class="nav-link">Profile</a></li>
          <li class="nav-item active">
            <div class="bs-example">
              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Appointments</a>
                <div class="dropdown-menu">
                  <a href="{{route('customer.requested')}}" class="dropdown-item">Requested Appointments</a>
                  <a href="{{route('customer.upcomming')}}" class="dropdown-item">Upcomming Appointments</a>
                  <a href="{{route('customer.completed')}}" class="dropdown-item">Completed Appointments</a>
                  <a href="{{route('customer.history')}}" class="dropdown-item">History</a>
                </div>
              </div>
            </div>
          </li>
          
          <li class="nav-item"><a href="{{route('customer.serviceshow')}}" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="{{route('customer.notice')}}" class="nav-link">Notice</a></li>
          <li class="nav-item"><a href="{{route('customer.message')}}" class="nav-link">Message</a></li>
          <li class="nav-item"><a href="{{route('customer.feedback')}}" class="nav-link">Feedback</a></li>
          <li class="nav-item"><a href="{{route('logout.index')}}" class="nav-link">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          
          	<div class="text text-center">
	            <h1 class="mb-4"> <br>Welcome home  {{session()->get('username')}}  </h1>
	           
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
            <span class="subheading"></span>
            <h2 class="mb-2"> Service History </h2>
          </div>
        </div>
      </div>
    </section>


   <div class="list-group" align="center" >
    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
      <table align="center">
     
     <tr>

       <th><div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Customer name</label>
        </div> </th>

      <th> <div class="col-sm-3 col-md-2 col-5">
          <label style="font-weight:bold;">Service Id</label>
      </div></th> 
      <th> <div class="col-sm-3 col-md-2 col-5">
          <label style="font-weight:bold;">Service Name</label>
      </div></th> 



     <th> <div class="col-sm-3 col-md-2 col-5">
        <label style="font-weight:bold;">Total Amount</label>
    </div>
      </th> 


      </tr>
    <hr />
     @for( $i=0; $i< count($account); $i++)
      <tr>

        <td> <div class="col-md-8 col-6">
              {{session()->get('username')}}
         </div></td>
     
   
     
     <td> <div class="col-md-8 col-6">
          {{$account[$i]->serviceid}}
      </div></td>
      <td> <div class="col-md-8 col-6">
          {{$account[$i]->servicename}}
      </div></td>

 <td> 
    <div class="col-md-8 col-6">
   tk {{$account[$i]->totalamount}}
    </div>
  </td>




 @endfor
</div>
</div>

<script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
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
