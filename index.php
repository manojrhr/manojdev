<?php
session_start();
require_once'helpers/security.php';
$errors=isset($_SESSION['errors'])?$_SESSION['errors']:[];
$fields=isset($_SESSION['fields'])?$_SESSION['fields']:[];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Manoj Kumar</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Menu CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slide-style.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="assets/img/logo3.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolios">
                  Work
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#resume">
                  Resume
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="onepage-nev mobile-menu">
          <li>
            <a href="#home">Home</a>
          </li>
          <li>
            <a href="#about">about</a>
          </li>
          <li>
            <a href="#portfolio">Work</a>
          </li>
          <li>
            <a href="#resume">resume</a>
          </li>
          <li>
            <a href="#services">Services</a>
          </li>
          <li>
            <a href="#contact">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <div class="contents">
                <!-- <h5 class="script-font wow fadeInUp" data-wow-delay="0.2s">Hi This is</h5> -->
                <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s">Manoj Thakur</h2>
                <p class="script-font wow fadeInUp" data-wow-delay="0.6s">Full Stack Web Developer</p>
                <!-- ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                  <li>
                    <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                  </li>
                  <li>
                    <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                  </li>
                  <li>
                    <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                  </li>
                  <li>
                    <a class="linkedin" href="#"><i class="icon-social-linkedin"></i></a>
                  </li>
                  <li>
                    <a class="google" href="#"><i class="icon-social-google"></i></a>
                  </li>
                </ul> -->
                <div class="header-button wow fadeInUp" data-wow-delay="1s">
                  <a href="#contact" class="btn btn-common">Get a Free Quote</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" src="assets/img/about/about-1.jpg" alt="">
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <h3>Hi Guys!</h3>
              <p>I am a professional Web Developer having 7+ years of experience in Web Development using frameworks/API/CMS. Having experience in dealing with projects on frameworks like Laravel/Codeigniter and CMS (Wordpress, Drupal). 
                <p>Previous Work Experience: </p>
                Frameworks : Laravel 7.X, Codeigniter 4.0 
                E-commerce website developing using Wordpress CMS. 
                Php7.4, Mysql, HTML5, CSS3, Bootstrap, Javascript/JQuery 
                OS- Linux/Ubuntu 16.04, Windows.
                Custom modules & plugins development, API integration (REST/SOAP), Database development 
                Providing ongoing support & maintenance for websites. 
                Performing end to end test for all of my work before releasing. Flexible time frame and communicate in concise manner.
                Looking forward to build a strong & long term professional relationship with clients.
                Thanks.
                Manoj

              </p>
              <div class="about-profile">
                <ul class="admin-profile">
                  <li><span class="pro-title"> Name </span> <span class="pro-detail">Manoj Kumar</span></li>
                  <li><span class="pro-title"> Age </span> <span class="pro-detail">34 Years</span></li>
                  <li><span class="pro-title"> Experience </span> <span class="pro-detail">7 Years</span></li>
                  <li><span class="pro-title"> Country </span> <span class="pro-detail">India</span></li>
                  <li><span class="pro-title"> Location </span> <span class="pro-detail">Shimla, Himachal Pradesh, India</span></li>
                  <li><span class="pro-title"> e-mail </span> <span class="pro-detail">manojrhr@gmail.com</span></li>
                  <li><span class="pro-title"> Phone </span> <span class="pro-detail">+ (91) 98822 70566</span></li>
                  <li><span class="pro-title"> Freelance </span> <span class="pro-detail">Available</span></li>
                </ul>
              </div>
              <!-- <a href="#" class="btn btn-common"><i class="icon-paper-clip"></i> Download Resume</a> -->
              <a href="#contact" class="btn btn-danger"><i class="icon-speech"></i> Contact Me</a>
            </div>
          </div>   
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Portfolio Section -->
    <section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">        
        <h2 class="section-title wow flipInX" data-wow-delay="0.4s">My Remarkable Works</h2>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".design">
                Laravel 
              </a>
              <a class="filter btn btn-common" data-filter=".development">
                Codeigniter
              </a>
              <a class="filter btn btn-common" data-filter=".print">
                Wordpress 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/img-1.jpg" alt="" />  
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/img-1.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/img-2.jpg" alt=""/> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/img-2.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/img-3.jpg" alt=""/> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/img-3.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/img-4.jpg" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/img-4.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/img-5.jpg" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/img-5.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/img-6.jpg" alt=""/>
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/img-6.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

    <!-- Resume Section Start -->
    <div id="resume" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="education wow fadeInRight" data-wow-delay="0.3s">
              <ul class="timeline">
                <li>
                  <i class="icon-graduation"></i>
                  <h2 class="timelin-title">Education</h2>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">BCA - Indira Gandhi National Open University</h3>
                    <span>2008 - 2011</span>
                    <!-- <p class="line-text">Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor.</p> -->
                  </div>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">Senior Secondary School - HP State Education Board</h3>
                    <span>2004</span>
                    <!-- <p class="line-text">Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor.</p> -->
                  </div>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">High School - HP State Education Board</h3>
                    <span>2002</span>
                    <!-- <p class="line-text">Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor.</p> -->
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="experience wow fadeInRight" data-wow-delay="0.6s">
              <ul class="timeline">
                <li>
                  <i class="icon-briefcase"></i>
                  <h2 class="timelin-title">Experience</h2>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">Team Leader - Webmob Software Solutions Pvt. Ltd.</h3>
                    <p>Chadigarh, India (https://webmobinfo.ch)</p>
                    <span>October 2017 - April 2020</span>
                    <p class="line-text">Worked as a Team Leader at Webmob Software Solutions Pvt. Ltd.<br /> Developed Web Applications on <strong>Laravel Framework.</strong><br /> Managed teams of developers working on existing projects as well as new projects on <strong>Laravel/ Codeigniter/ Wordpress etc.</strong></p>
                  </div>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title">System Assistant - High Court of Himachal Pradesh</h3>
                    <span>September 2011 - October 2017</span>
                    <p class="line-text">Worked as System Assintant at High Court, Himachal Pradesh (India).<br />Developed Web Applications/API's/ Mobiles Apps as per organisation requirements.</p>
                  </div>
                </li>
                <!-- <li>
                  <div class="content-text">
                    <h3 class="line-title">Intern UI Designer - UIdeck</h3>
                    <span>Mar 2015 - Oct 2016</span>
                    <p class="line-text">Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor.</p>
                  </div>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Resume Section End -->

    <!-- Services Section Start -->
    <section id="services" class="services section-padding">
      <h2 class="section-title wow flipInX" data-wow-delay="0.4s">What I do</h2>
      <div class="container">
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
              <div class="icon">
                <i class="icon-grid"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Front-end Development</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon">
                <i class="icon-layers"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Back-end Development</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.9s">
              <div class="icon">
                <i class="icon-briefcase"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Business Branding</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="icon-bubbles"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Consultancy</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Counter Area Start-->
    <section class="counter-section section-padding">
      <div class="container">
        <div class="row">
          <!-- Counter Item -->
          <!-- <div class="col-md-3 col-sm-6 work-counter-widget text-center">
            <div class="counter wow fadeInDown" data-wow-delay="0.3s">
              <div class="icon"><i class="icon-briefcase"></i></div>
              <div class="counterUp">50</div>
              <p>Project Working</p>
            </div>
          </div> -->
          <!-- Counter Item -->
          <div class="col-md-4 col-sm-6 work-counter-widget text-center">
            <div class="counter wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon"><i class="icon-check"></i></div>
              <div class="counterUp">50</div>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-4 col-sm-6 work-counter-widget text-center">
            <div class="counter wow fadeInDown" data-wow-delay="0.9s">
              <div class="icon"><i class="icon-diamond"></i></div>
              <div class="counterUp">150</div>
              <p>Awards Received</p>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-4 col-sm-6 work-counter-widget text-center">
            <div class="counter wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon"><i class="icon-heart"></i></div>
              <div class="counterUp">299</div>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End-->

    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">      
      <div class="contact-form">
        <div class="container">
          <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="contact-block">
                <h2>Contact Form</h2>
                <form id="contactForm"  action="contact.php" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name" <?php echo isset ($fields['name'])? 'value="'.e($fields['name']).'"':''?>>
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email" <?php echo isset ($fields['email'])? 'value="'.e($fields['email']).'"':''?>>
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                     <!-- <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Subject" id="msg_subject" class="form-control" name="subject" required data-error="Please enter your subject" >
                        <div class="help-block with-errors"></div>
                      </div>
                    </div> -->
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Your Message"  name="message" rows="5" data-error="Write your message" required><?php echo isset ($fields['message'])? e($fields['message']):''?></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <?php if(!empty($errors)):?>
                      <div class="panel">
                          <ul class="alert alert-danger"><li><?php echo implode('</li> <li>', $errors)?></li></ul>
                      </div>
                      <?php endif; ?>
                      <?php if(!empty($_SESSION['success'])):?>
                        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
                      <?php endif; ?>
                      <div class="submit-button">
                        <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="footer-right-area wow fadeIn">
                <h2>Contact Address</h2>
                <div class="footer-right-contact">
                  <div class="single-contact">
                    <div class="contact-icon">
                      <i class="fa fa-map-marker"></i>
                    </div>
                    <p>Shimla, Himachal Pradesh, India</p>
                  </div>
                  <div class="single-contact">
                    <div class="contact-icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <p><a href="mailto:manojrhr@gmail.com">manojrhr@gmail.com</a></p>
                    <!-- <p><a href="mailto:tomsaulnier@gmail.com">tomsaulnier@gmail.com</a></p> -->
                  </div>
                  <div class="single-contact">
                    <div class="contact-icon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <p><a href="#">+ (91) 98822 70566</a></p>
                    <!-- <p><a href="#">+ (00) 123 344 789</a></p> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-12">
            <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
            </div> -->
          </div>
        </div>
      </div>   
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
              <!-- <ul class="social-icon">
                <li>
                  <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-linkedin"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-google"></i></a>
                </li>
              </ul> -->
              <p>Copyright © 2020 Manoj All Right Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->
<?php session_destroy(); ?>
    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>  
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/map.js"></script>
      
  </body>
</html>
