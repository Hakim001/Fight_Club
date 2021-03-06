<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Fight Club Connection Sport combat Art martiaux Compétition</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('/homepage_v1/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/homepage_v1/css/owl.carousel.css') }}">
  <link href="{{ asset('/css/app.css') }}"  rel="stylesheet">
  <link href="{{ asset('/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">

  <!-- Google Font -->
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Libre+Baskerville:400italic" rel="stylesheet" type="text/css">

  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->
</head>

<body>

<!-- Start Main-Wrapper -->
<div id="main-wrapper">
  
  <!-- Start Header -->
  <header id="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12">
            <ul class="contact-info custom-list list-inline">
              <li><i class="fa fa-phone"></i><span>+1 (123) 456-7890</span></li>
              <li><i class="fa fa-envelope"></i><span>example@example.com</span></li>
            </ul>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-right pull-right">
            <div class="contact-right">
              <ul class="social custom-list list-inline">
                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
              </ul>
              
              <div class="header-login">
               
                <button class="login-toggle header-btn"><i class="fa fa-power-off"></i> Login</button>
                
                <div class="header-form">
               @guest
                  <form action="{{ route('login') }}" method="post" class="default-form">
                   {{ csrf_field() }}
                   
                    <p class="alert-message warning"><i class="ico fa fa-exclamation-circle"></i> All fields are required! <i class="fa fa-times close"></i></p>
                    
                     <p class="form-row">
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <input  type="text" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus >
                      @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                      @endif
					  </div>
                    </p>
                    
                    <p class="form-row">
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <input id="password" type="password" placeholder="Password" class="form-control" name="password" required >
                      @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
					</div>
                    </p>
                    <p class="form-row">
                      <button class="submit-btn button btn-blue"><i class="fa fa-power-off"></i> Login</button>
                    </p>
                    <p class="form-row forgot-password">
                      <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </p>
                    <p class="form-row register">
                      <a href="{{ route('register')}}">Register</a>
                    </p>
                  </form>
                  @else
                      
                      
                       <p class="default-form">
                            <li class="dropdown" style="background-color: navy;">
                              
                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href=" {{ route('profil') }}">Your profil</a></li>
                                       
                                    
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
				</p>
                    @endguest
                </div>
              </div>
              <div class="header-language">
                <button class="header-btn"><i class="fa fa-globe"></i>EN</button>
                <nav class="header-nav">
                  <ul class="custom-list">
                    <li class="active"><a href="#">EN</a></li>
                    <li><a href="#">DE</a></li>
                    <li><a href="#">FR</a></li>
                    <li><a href="#">IT</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-navi">
      <div class="container">
        <div class="row">
          <div class="col-md-12" id="bs-example-navbar-collapse-1">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12">
                <ul class="nav navbar-nav main-nav">
                  <li class="active"><a href="index.html">Home</a></li>
                  <li class="has-submenu">
                    <a href="#">Rooms</a>
                    <ul class="sub-menu custom-list">
                      <li><a href="listing.html">Rooms List View</a></li>
                      <li><a href="listing2.html">Rooms Grid View</a>
                      </li>
                      <li class="has-submenu">
                        <a href="#">Luxury Apartments</a>
                        <ul class="sub-menu custom-list">
                          <li><a href="room4.html">Luxury Apartment 1</a></li>
                          <li><a href="room.html">Luxury Apartment 2</a></li>
                        </ul>
                      </li>
                      <li class="has-submenu">
                        <a href="#">Deluxe Suites</a>
                        <ul class="sub-menu custom-list">
                          <li><a href="room2.html">Deluxe Suite 1</a></li>
                          <li><a href="room3.html">Deluxe Suite 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="staff.html">Our Staff</a></li>
                  <li><a href="locations.html">Locations</a></li>
                </ul>
              </div>
              <div class="col-lg-5 col-lg-offset-2 col-md-5 col-md-offset-2 col-sm-12 col-sm-offset-0">
                <ul class="nav navbar-nav main-nav pull-right text-right">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li class="has-submenu">
                    <a href="news.html">News</a>
                    <ul class="sub-menu custom-list">
                      <li><a href="single_post.html">Single Post</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Start Header-Toggle -->
  <div id="header-toggle">
    <i class="fa fa-bars"></i>
  </div>
  <!-- End Header-Toggle -->

  <!-- Start Header-Logo -->
  <div class="header-logo">
    <div class="header-logo-inner">
      <div class="css-table">
        <div class="css-table-cell">
          <a href="#">
            <img src="img/logo.png" alt="" class="img-responsive center-block">
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header-Logo -->

  <!-- Start Banner -->
  <section id="banner">

    <div class="banner-bg">
      <div class="banner-bg-item"><img src="img/banner-bg-1.jpg" alt=""></div>
      <div class="banner-bg-item"><img src="img/banner-bg-2.jpg" alt=""></div>
      <div class="banner-bg-item"><img src="img/banner-bg-3.jpg" alt=""></div>
      <div class="banner-bg-item"><img src="img/banner-bg-4.jpg" alt=""></div>
    </div>

    <div class="css-table">
      <div class="css-table-cell">

        <!-- Start Banner-Search -->
        <div class="banner-search">
          <div class="container">
              <div id="hero-tabs" class="banner-search-inner">
                <ul class="custom-list tab-title-list clearfix">
                  <li class="tab-title active"><a href="#yachts">Hotel</a></li>
                  <li class="tab-title"><a href="#privjet">Resorts</a></li>
                  <li class="tab-title"><a href="#luxcars">Private suites</a></li>
                  <li class="tab-title"><a href="#cartrans">Bed & breakfast</a></li>
                </ul>
                <ul class="custom-list tab-content-list">

                  <!-- Start Hotel -->
                  <li class="tab-content active">
                    <form action="index.html" class="default-form">
                      <span class="arrival calendar">
                        <input type="text" name="arrival" placeholder="Arrival" data-dateformat="m/d/y">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <span class="departure calendar">
                        <input type="text" name="departure" placeholder="Departure" data-dateformat="m/d/y">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <span class="adults select-box">
                        <select name="adults" data-placeholder="Adults">
                          <option>Adults</option>
                          <option value="1">1 adult</option>
                          <option value="2">2 adults</option>
                          <option value="3">3 adults</option>
                          <option value="4">4 adults</option>
                        </select>
                      </span>
                      <span class="children select-box">
                        <select name="children" data-placeholder="Children">
                          <option>Children</option>
                          <option value="1">1 children</option>
                          <option value="2">2 childrens</option>
                          <option value="3">3 childrens</option>
                          <option value="4">4 childrens</option>
                        </select>
                      </span>
                      <span class="submit-btn">
                        <button class="btn btn-transparent">Book Now</button>
                        <a href="#" class="advanced">Advanced Search</a>
                      </span>
                    </form>
                  </li>
                  <!-- End Hotel -->

                  <!-- Start Resorts -->
                  <li class="tab-content">
                    <form action="index.html" class="default-form">
                      <span class="arrival calendar">
                        <input type="text" name="arrival" placeholder="Arrival" data-dateformat="m/d/y">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <span class="departure calendar">
                        <input type="text" name="departure" placeholder="Departure" data-dateformat="m/d/y">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <span class="adults select-box">
                        <select name="adults" data-placeholder="Adults">
                          <option>Adults</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                        </select>
                      </span>
                      <span class="children select-box">
                        <select name="children" data-placeholder="Children">
                          <option>Children</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                        </select>
                      </span>
                      <span class="submit-btn">
                        <button class="btn btn-transparent">Book Now</button>
                        <a href="#" class="advanced">Advanced Search</a>
                      </span>
                    </form>
                  </li>
                  <!-- End Resorts -->

                  <!-- Start Private Suites -->
                  <li class="tab-content">
                    <form action="index.html" class="default-form">
                      <span class="arrival calendar">
                        <input type="text" name="arrival" placeholder="Arrival" data-dateformat="m/d/y">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <span class="departure calendar">
                        <input type="text" name="departure" placeholder="Departure" data-dateformat="m/d/y">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <span class="adults select-box">
                        <select name="adults" data-placeholder="Adults">
                          <option>Adults</option>
                          <option value="1">2 adults</option>
                          <option value="2">3 adults</option>
                          <option value="3">4 adults</option>
                        </select>
                      </span>
                      <span class="children select-box">
                        <select name="children" data-placeholder="Children">
                          <option>Children</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                        </select>
                      </span>
                      <span class="submit-btn">
                        <button class="btn btn-transparent">Book Now</button>
                        <a href="#" class="advanced">Advanced Search</a>
                      </span>
                    </form>
                  </li>
                  <!-- End Private Suites -->

                  <!-- Start Bed & Breakfast -->
                  <li class="tab-content">
                    <form action="index.html" class="default-form">
                      <span class="arrival calendar">
                        <input type="text" name="arrival" placeholder="Arrival" data-dateformat="m/d/y">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <span class="departure calendar">
                        <input type="text" name="departure" placeholder="Departure" data-dateformat="m/d/y">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <span class="adults select-box">
                        <select name="adults" data-placeholder="Adults">
                          <option>Adults</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                        </select>
                      </span>
                      <span class="children select-box">
                        <select name="children" data-placeholder="Children">
                          <option>Children</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                        </select>
                      </span>
                      <span class="submit-btn">
                        <button class="btn btn-transparent">Book Now</button>
                        <a href="#" class="advanced">Advanced Search</a>
                      </span>
                    </form>
                  </li>
                  <!-- End Bed & Breakfast -->

                </ul>
            </div>
          </div>
        </div>
        <!-- End Banner-Search -->

      </div>
    </div>
  </section>
  <!-- End Banner -->

  <!-- Start About -->
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="preamble col-md-12">
          <h3>About Hotel Petra</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eius exercitationem ab aspernatur, ratione officia animi. Rerum necessitatibus, culpa. Tenetur incidunt quasi unde libero molestias dicta doloremque, non aliquam ipsam!</p>
        </div>
        <div class="col-md-3 col-sm-6 feature text-center">
          <div class="overlay">
            <img src="img/about1.jpg" alt="" class="img-responsive">
            <div class="overlay-shadow">
              <div class="overlay-content">
                <a href="#" class="btn btn-transparent-white">Read More</a>
              </div>
            </div>
          </div>
          <h4>Our Services</h4>
          <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
        </div>
        
        <div class="col-md-3 col-sm-6 feature text-center">
          <div class="overlay">
            <img src="img/about2.jpg" alt="" class="img-responsive">
            <div class="overlay-shadow">
              <div class="overlay-content">
                <a href="#" class="btn btn-transparent-white">Read More</a>
              </div>
            </div>
          </div>
          <h4>Memberships</h4>
          <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
        </div>

       <div class="col-md-3 col-sm-6 feature text-center">
          <div class="overlay">
            <img src="img/about3.jpg" alt="" class="img-responsive">
            <div class="overlay-shadow">
              <div class="overlay-content">
                <a href="#" class="btn btn-transparent-white">Read More</a>
              </div>
            </div>
          </div>
          <h4>Our Agents</h4>
          <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
        </div>

        <div class="col-md-3 col-sm-6 feature text-center">
          <div class="overlay">
            <img src="img/about4.jpg" alt="" class="img-responsive">
            <div class="overlay-shadow">
              <div class="overlay-content">
                <a href="#" class="btn btn-transparent-white">Read More</a>
              </div>
            </div>
          </div>
          <h4>Our Offices</h4>
          <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End About -->

  <!-- Start Testimonials -->
  <section class="testimonials">

    <!-- Start Video Background -->
    <div id="video_testimonials" data-vide-bg="video/ocean" data-vide-options="position: 0% 50%"></div>
    <div class="video_gradient"></div>
    <!-- End Video Background -->

    <div class="container">
      <div class="row">
        <div class="preamble light col-md-12">
          <h3>Testimonials</h3>
        </div>

        <div class="col-md-12">
          <div id="owl-testimonials" class="owl-carousel owl-theme">

            <!-- Start Container Item -->
            <div class="item">
              <div class="col-lg-12">
                <blockquote class="quote">
                  <cite>John Doe<span class="job">CEO - UOUapps</span></cite>
                  <p class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui.
                </blockquote>
              </div>
            </div>
            <!-- End Container Item -->

            <!-- Start Container Item -->
            <div class="item">
              <div class="col-lg-12">
                <blockquote class="quote">
                  <cite>John Kowalski<span class="job">CEO - UOUapps</span></cite>
                  <p class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui.
                </blockquote>
              </div>
            </div>
            <!-- End Container Item -->

            <!-- Start Container Item -->
            <div class="item">
              <div class="col-lg-12">
                <blockquote class="quote">
                  <cite>John Doe<span class="job">CEO - UOUapps</span></cite>
                  <p class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui.
                </blockquote>
              </div>
            </div>
            <!-- End Container Item -->

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonials -->

  <!-- Start Supertabs -->
  <section class="supertabs">
    <div class="container">
      <div class="row">
        
        <!-- Start Tab-Navigation -->
        <div class="col-md-4 tab-navigation">
          <ul class="custom-list">
            <li class="active">
              <a data-toggle="tab" href="#fleet">
                <h5 class="title">Highest Standards</h5>
                <h6 class="subtitle">No compromises</h6>
              </a>
            </li>
            <li>
              <a data-toggle="tab" href="#drivers">
                <h5 class="title">Qualified Staff</h5>
                <h6 class="subtitle">You are in good hands</h6>
              </a>
            </li>
            <li>
              <a data-toggle="tab" href="#location">
                <h5 class="title">Around the World</h5>
                <h6 class="subtitle">Meet us everywhere</h6>
              </a>
            </li>
          </ul>
        </div>
        <!-- End Tab-Navigation -->

        <!-- Start Tab-Content -->
        <div class="col-md-8 tab-content">
          <div id="fleet" class="tab-pane fade in active">
            <img src="img/supertabs.jpg" alt="">
            <header>
              <h5 class="title">Around the world</h5>
              <h6 class="subtitle">We are available</h6>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae a aut consequatur similique tempora excepturi iusto provident eum quam aperiam id est, voluptas recusandae quisquam, pariatur rerum tempore atque illo!</p>
          </div>
          <div id="drivers" class="tab-pane fade">
            <img src="img/supertabs-2.jpg" alt="">
            <header>
              <h5 class="title">Our location</h5>
              <h6 class="subtitle">We are available</h6>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae a aut consequatur similique tempora excepturi iusto provident eum quam aperiam id est, voluptas recusandae quisquam, pariatur rerum tempore atque illo!</p>
          </div>
          <div id="location" class="tab-pane fade">
            <img src="img/supertabs-3.jpg" alt="">
            <header>
              <h5 class="title">Our location</h5>
              <h6 class="subtitle">We are available</h6>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae a aut consequatur similique tempora excepturi iusto provident eum quam aperiam id est, voluptas recusandae quisquam, pariatur rerum tempore atque illo!</p>
          </div>
        </div>
        <!-- End Tab-Content -->

      </div>
    </div>
  </section>
  <!-- End Supertabs -->

  <!-- Start Partners -->
  <section class="partners">
    <div class="container">
      <div class="row">
        <div class="preamble col-md-12">
          <h3>Our Partners</h3>
        </div>
        <div class="col-md-12">
          <div id="clients-slider" class="owl-carousel">
            <img src="img/company1.png" alt="" class="img-responsive">
            <img src="img/company2.png" alt="" class="img-responsive">
            <img src="img/company3.png" alt="" class="img-responsive">
            <img src="img/company1.png" alt="" class="img-responsive">
            <img src="img/company2.png" alt="" class="img-responsive">
            <img src="img/company3.png" alt="" class="img-responsive">
            <img src="img/company1.png" alt="" class="img-responsive">
            <img src="img/company2.png" alt="" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Partners -->

  <!-- Start Footer -->
  <footer id="footer">

    <!-- Start Footer-Top -->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12 logo-footer">
            <img src="img/logo-footer.png" alt="" class="img-responsive">
          </div>
          <div class="col-md-4 widget widget-about">
            <h5 class="title">
              About Us
            </h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Etiam sit amet lectus quis est congue mollis.</p>
          </div>
          <div class="col-md-4 widget widget-news">
            <h5 class="title">
              Latest News
            </h5>
            <ul class="custom-list">
              <li><a href="#">Lorem ipsum dolor</a></li>
              <li><a href="#">Proin nibh augue suscipit scelerisque</a></li>
              <li><a href="#">Etiam pellentesque aliquet tellus</a></li>
            </ul>
          </div>
          <div class="col-md-4 widget widget-newsletter">
            <h5 class="title">
              Newsletter
            </h5>
            <form action="#" class="default-form">
              <input type="text" placeholder="Your email">
              <button class="btn btn-transparent pull-right">Sign Up</button>
            </form>
            <div class="social">
              <h5 class="title pull-left">
                Stay in touch
              </h5>
              <ul class="custom-list list-inline pull-right">
                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer-Top -->

    <!-- Start Footer-Copyrights -->
    <div class="footer-copyrights">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright 2015 © PetraHotel. All rights reserved. Powered by <a href="#">UOUapps</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer-Copyrights -->

  </footer>
  <!-- End Footer -->

</div>
<!-- End Main-Wrapper -->


<!-- Scripts -->
<script src="{{ asset('/homepage_v1/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('/homepage_v1/js/scripts.js') }}"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="{{ asset('/homepage_v1/js/gmap3.min.js') }}"></script>
<script src="{{ asset('/homepage_v1/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/homepage_v1/js/jquery-ui-1.10.4.custom.min.js') }}"></script>
<script src="{{ asset('/homepage_v1/js/jquery.ba-outside-events.min.js') }}"></script>
<script src="{{ asset('/homepage_v1/js/jqueryui.js') }}"></script>
<script src="{{ asset('/homepage_v1/js/jquery.vide.min.js') }}"></script>
<script src="{{ asset('/homepage_v1/js/tab.js') }}"></script>
<script src="{{ asset('/homepage_v1/js/transition.js') }}"></script>
<script src="{{ asset('/homepage_v1/js/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/jquery-ui/jquery-ui.min.js') }}"></script>
</body>
</html>