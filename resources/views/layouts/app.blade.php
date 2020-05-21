<!DOCTYPE html>
<html lang="en">


<head>
    <title>The Chris Omoijiade Company</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.html')}}">

    <!--All css  are here-->

    <!--Bootstrap css here-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <!--Font-Awsome css here-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!--Owl-carousel css here-->
    <link rel="stylesheet" href="{{asset('assets/plugins/owl/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl/owl.transitions.css')}}">

    <!--Custon css here-->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <!--Scroll Animation - aos-master css here-->
    <link rel="stylesheet" href="{{asset('assets/plugins/aos-master/aos.css')}}"/>

    <!--Responsive css here-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
.mySlides {display:none;}
</style>
</head>
<body>

<!-- NAVIGATION -->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header logoo">
            <button id="tog-btn" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><img class="img-responsive"  src="{{asset('assets/images/logo.png')}}"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
            <ul id="navigation" class="nav navbar-nav navbar-right">
                <li><a class="{{ Request::is('/')? "active" : "" }}" href="{{url('/')}}">Home</a></li>
                <li><a  class="{{ Request::is('/about')? "active" : "" }}" href="{{url('/about')}}">About</a></li>
                <li><a  class="{{ Request::is('/event')? "active" : "" }}" href="{{url('/event')}}">Event</a></li>
                <li><a  class="{{ Request::is('/gallery')? "active" : "" }}" href="{{url('/gallery')}}">Gallery</a></li>
                <li><a  class="{{ Request::is('/resources')? "active" : "" }}" href="{{url('/resources')}}">Resources</a></li>
                <li><a  class="{{ Request::is('/blog')? "active" : "" }}" href="{{url('/blog')}}">Blog</a></li>
                <li><a  class="{{ Request::is('/session')? "active" : "" }}" href="{{url('/session')}}">Schedule A Session</a></li>
                <li><a  class="{{ Request::is('/contact')? "active" : "" }}" href="{{url('/contact')}}">Contact</a></li>
            </ul>
        
        </div>

    </div>
</nav>
<!-- NAVIGATION -->





@yield('content')




<!-- Footer Section -->
<footer id="contact-section" class="sectionP60 dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-7 col-sm-7 col-xs-12 pull-right resCont">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="heading-text">
                            <span class="gold-gradient-color">Get in touch.</span>
                        </div>
                    </div>
                    <form action="#">
                        <div class="col-md-12 col-sm-12 col-xs-12 p0">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-box">
                                    <input placeholder="Full Name" type="text" required>
                                    <span style="position: absolute"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-box">
                                    <input placeholder="Email Address" type="text" required>
                                    <span style="position: absolute"><i class="fa fa-envelope-o"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 p0">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-box">
                                    <input placeholder="Mobile or Telephone" type="text" required>
                                    <span style="position: absolute"><i class="fa fa-phone"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-box">
                                    <input placeholder="Subject" type="text" required>
                                    <span style="position: absolute"><i class="fa fa-puzzle-piece"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 p0">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="input-box">
                                    <textarea placeholder="Type your message here..." name="" id="" cols="30" rows="5"></textarea>
                                    <span style="position: absolute"><i class="fa fa-comments"></i></span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-gradient outline-button pull-right mtb20"><div style="background: #0C1222;transition: all 0.3s">Send <tag class="hidden-xs">Message</tag></div></button>
                    </form>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 border-right resCompany">
                    <div class="company-desc logoo">
                        <a href="#home-section"><img class="img-responsive" src="{{asset('assets/images/logo.png')}}" /></a>
                      
                    </div>
                    
                    <div class="cont-us">
                        <p class="gold rL">Contact Us</p>
                     
                        <div><a class="light2 g" href="javascript:;"><span class="oR">Mobile :234 908-546-0000</span></a></div>
                        <div><a class="light2 g" href="javascript:;"><span class="oR">Email : askchris@chrisomoijiade.com</span></a></div>
                    </div>

                        <div class="cont-us">
                        <p class="gold rL">Social Media</p>
                        <ul class="list-inline">
                        <li class="list-inline-item"><a href="" style="color:#ffffff;font-weight:bolder"> <i class="fa fa-facebook"></i></a>  </li>
                        <li class="list-inline-item"><a href="" style="color:#ffffff;font-weight:bolder"><i class="fa fa-youtube"></i> </a></li>
                        <li class="list-inline-item"><a href="" style="color:#ffffff;font-weight:bolder"><i class="fa fa-twitter"></i> </a></li>
                        <li class="list-inline-item"><a href="" style="color:#ffffff;font-weight:bolder"><i class="fa fa-instagram"></i> </a></li>
                         <li class="list-inline-item"><a href="" style="color:#ffffff;font-weight:bolder"><i class="fa fa-linkedin"></i> </a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section -->

<!-- Copyright Section -->
<section class="sectionP20" style="background: #0b101d;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12">
                    <p class="light oR m0" style="opacity: .65">&copy; Copyright 2017, all rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Copyright Section -->

<!-- Scroll Back Top Button -->
<button onclick="topFunction()" id="myBtn" class="btn btn-gradient"><i class="visible-xs fa fa-arrow-up"></i><tag class="hidden-xs">Back To Top</tag></button>
<!-- Scroll Back Top Button -->


<!-- Popups Are Here -->
<popups>

    <!-- Register Popup -->
    <div id="pop-register" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" data-aos="zoom-in-up" data-aos-duration="800">&times;</button>
                    <h3 class="modal-title  blue oR m0">REGISTER</h3>
                    <span class="light oR" style="font-size: 14px">Enter your informations to register.</span>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="input-box">
                            <input placeholder="Full Name" type="text" required>
                            <span style="position: absolute"><i class="fa fa-user"></i></span>
                        </div>
                        <div class="input-box">
                            <input placeholder="Email Address" type="email" required>
                            <span style="position: absolute"><i class="fa fa-envelope-o"></i></span>
                        </div>
                        <div class="input-box">
                            <input placeholder="Login Key" type="text" required>
                            <span style="position: absolute"><i class="fa fa-key"></i></span>
                        </div>
                        <div class="input-box">
                            <input placeholder="Confirm Login Key" type="text" required>
                            <span style="position: absolute"><i class="fa fa-key"></i></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-gradient" data-dismiss="modal">Register</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Register Popup -->

    <!-- About Us Popup -->
    <div id="pop-about" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" data-aos="zoom-in-up" data-aos-duration="800">&times;</button>
                    <h3 class="modal-title  gold-gradient-color oR m0">About Us</h3>
                </div>
                <div class="modal-body">
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gradient" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- About Us Popup -->

    <!-- Think Popup -->
    <div id="pop-read-more1" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" data-aos="zoom-in-up" data-aos-duration="800">&times;</button>
                    <h3 class="modal-title  gold-gradient-color oR m0">Think</h3>
                </div>
                <div class="modal-body">
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gradient" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Think Popup -->

    <!-- Create Popup -->
    <div id="pop-read-more2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" data-aos="zoom-in-up" data-aos-duration="800">&times;</button>
                    <h3 class="modal-title  gold-gradient-color oR m0">Create</h3>
                </div>
                <div class="modal-body">
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gradient" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Create Popup -->

    <!-- Sell Popup -->
    <div id="pop-read-more3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" data-aos="zoom-in-up" data-aos-duration="800">&times;</button>
                    <h3 class="modal-title  gold-gradient-color oR m0">Sell</h3>
                </div>
                <div class="modal-body">
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gradient" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Sell Popup -->

    <!-- Earn Popup -->
    <div id="pop-read-more4" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" data-aos="zoom-in-up" data-aos-duration="800">&times;</button>
                    <h3 class="modal-title  gold-gradient-color oR m0">Earn</h3>
                </div>
                <div class="modal-body">
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p class="light oR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gradient" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Earn Popup -->

</popups>
<!-- Popups Are Here -->



<!-- All Javascripts -->

<!-- Jquery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<!-- Nice Scroll -->
<script type="text/javascript" src="{{asset('assets/plugins/niceScroll/niceScroll.min.js')}}"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
<script type="text/javascript" src="{{asset('assets/plugins/map/map.js')}}"></script>

<!-- Video Background -->
<script type="text/javascript" src="{{asset('assets/plugins/videoBg/jquery.vide.js')}}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('assets/plugins/owl/owl.carousel.js')}}"></script>

<!-- Number Counter -->
<script type="text/javascript" src="{{asset('assets/plugins/numScroll/numscroller-1.0.js')}}"></script>

<!-- Scroll Animations aos-master js -->
<script src="{{asset('assets/plugins/aos-master/aos.js')}}"></script>

<!-- Common -->
<script type="text/javascript" src="{{asset('assets/js/common.js')}}"></script>

<!-- All Javascripts -->
</body>


</html>
