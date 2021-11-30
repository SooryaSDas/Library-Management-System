<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>memorial books</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout contact-page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li > <a href="{{ url('/') }}">Home</a> </li>
                                 <!-- <li> <a href="about.html">About us</a> </li> -->
                                 <li><a href="{{ url('/books') }}">Our Books</a></li>
                                 <!-- <li><a href="library.html">library</a></li> -->
                                 <li class="active"><a href="{{ url('/contact') }}">Contact us</a></li>
                                 <!-- <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li> -->
                                 @if (Route::has('login'))
                                 
                                 @auth
                                 <!-- <li><a href="{{ url('/dashboard') }}" class="">Dashboard</a></li> -->
                                 @else
                                      <li> <a href="{{ route('login') }}" class="">Log in</a></li>

                                       @if (Route::has('register'))
                                       <li>   <a href="{{ route('register') }}" class=>Register</a></li>
                                       @endif
                                 @endauth
                              
                           @endif

                              @auth('admin')
                              <li class="mean-last"> <a href="{{route('admin.dashboard')}}"><img src="images/top-icon.png" alt="#" /></a> </li>
                              @else
                              <a href="{{route('admin.login')}}"> <img src="images/top-icon.png" alt="#" /> </a>
                              @endauth
                                
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Contact -->
      <div class="Contact">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="col"><br><br><br><br>
                           Sapna Book House<br>
                           2 Foursquare tips · Book store <br>
                           No 46, Anthony Nicolas Street, Ashok Nagar, M.G.Road,<br> Bengaluru, Karnataka 560025, <br>Bengaluru · 080 49166999<br>
                           Open · Closes 9 pm
                        </div>
                        <br><br>
                  </div>
               </div>
               <div class="col">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="col">
                           <br><br>
                        <div>
                        <iframe width="500" height="400" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=500&cp=12.97904949309644~77.54339218139648&lvl=14&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
                        </iframe>
                        <div style="white-space: nowrap; text-align: center; width: 500px; padding: 6px 0;">
                           <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=12.97904949309644~77.54339218139648&amp;sty=r&amp;lvl=14&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
                           <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=12.97904949309644~77.54339218139648&amp;sty=r&amp;lvl=14&amp;rtp=~pos.12.97904949309644_77.54339218139648____&amp;FORM=MBEDLD">Get Directions</a>
                        </div>
                     </div>
                        </div>
                        <br><br>
               </div>
            </div>   
            </div>
         </div>
         
      </div>
      <!-- end Contact -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  
               </div>
            <!-- </div> -->
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2019 All Right Reserved By Memorial book center</a></p>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>