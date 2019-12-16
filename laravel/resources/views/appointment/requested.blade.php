<!DOCTYPE html>
<html lang="en">
<head>

<title>Appointment </title>

<link rel="stylesheet" href="/css/bootstrap.min.css">
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/register.css">
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
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Don't have an appointment Create on here!</p>
                        
                 </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" >Appointment</a>
                            </li>
                            
                        </ul>
                         <form method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Appointment</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            Service id
                                            <input type="text" class="form-control" placeholder="" value="{{$appointment[0]->serviceid}}" name="serviceid" disabled  />
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder=""  value= "{{$appointment[0]->location}}" name="city" disabled />
                                        </div>
                                       
                                
                                       
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    Price(in Tk)
                                                 <input type="text" class="form-control" placeholder="" value="{{$appointment[0]->amount}}" name="price" disabled />
                                                </div>
                                        <div class="form-group">
                                            <input type="time" class="form-control" placeholder="" value="{{$appointment[0]->time}}" name="time" disabled/>
                                        </div>
                                        
                                       
                            
                                      
                                        <div class="col-md-16">
                                            <a href="../customer/requested/delete" class="list-group-item list-group-item-action">Delete <br> </a>
                                    </div>
                                     
                                    </div>
                                </div>
                            </div>
                             </form>


                             
                            
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>            
</body>
</html>                  

