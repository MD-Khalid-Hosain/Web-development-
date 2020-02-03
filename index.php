<?php require 'db.php';
$banner_selet = "SELECT * FROM banners_section WHERE status=1";
$banner_result = mysqli_query($db_connection,$banner_selet);
$after_assoc_banner = mysqli_fetch_assoc($banner_result);
?>
<?php
$service_selet = "SELECT * FROM service_section WHERE status=1 ";
$service_result = mysqli_query($db_connection,$service_selet);

?>
<?php
$work_selet = "SELECT * FROM work_section";
$work_result = mysqli_query($db_connection,$work_selet);

?>
<?php
$social_select = "SELECT * FROM social_section WHERE status=1";
$social_result = mysqli_query($db_connection,$social_select);
 ?>
<?php
$about_selet = "SELECT * FROM about_section WHERE status=1";
$about_result = mysqli_query($db_connection,$about_selet);
$after_assoc_about = mysqli_fetch_assoc($about_result);
$a = $after_assoc_about['why_choose'];
$b = explode(",",$a);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INNOVA</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!--============
   chat section
  =================-->
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
  window.fbAsyncInit = function() {
  FB.init({
  xfbml            : true,
  version          : 'v5.0'
  });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your customer chat code -->
  <div class="fb-customerchat"
  attribution=setup_tool
  page_id="1226123674075858"
  theme_color="#0084ff"
  logged_in_greeting="Hi! I am Khalid How can we help you?"
  logged_out_greeting="Hi! I am Khalid How can we help you?">
  </div>

  <!--============
   chat section
  =================-->




<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Innova</a>
      <div class="phone"><span>Call Today</span>320-123-4321</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#portfolio" class="page-scroll">Projects</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a href="singup.php" class="page-scroll">Sing Up</a></li>
        <li><a href="login.php" class="page-scroll">Log in</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro" style="background: url(upload/banners/<?php echo $after_assoc_banner['banner_picture']; ?>) center center no-repeat;background-color: #e5e5e5;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size: cover;
	-o-background-size: cover;">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1><?php echo $after_assoc_banner['banner_title']; ?></h1>
            <p><?php echo $after_assoc_banner['banner_des']; ?></p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll"><?php echo $after_assoc_banner['banner_btn']; ?></a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Cost for your home renovation project</h3>
        <p>Get started today and complete our form to request your free estimate</p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Free Estimate</a></div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="upload/about/<?php echo $after_assoc_about['about_picture']; ?>" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Who We Are</h2>
          <p><?php echo $after_assoc_about['about_des'] ?></p>
          <h3>Why Choose Us?</h3>
          <div class="list-style">
            <?php foreach($b as $c){ ?>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li><?php echo $c ;?></li>
              </ul>
            </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
    </div>
    <div class="row">
      <?php foreach ($service_result as  $service) {?>
      <div class="col-md-4">
        <div class="service-media"> <img src="upload/service/<?php echo $service['service_picture']; ?>" alt=" ">
        </div>
        <div class="service-desc">
          <h3><?php echo $service['service_title']; ?></h3>
          <p><?php echo $service['service_des']; ?></p>
        </div>
      </div>
        <?php } ?>
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Our Works</h2>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <?php foreach ($work_result as  $work_value){ ?>

        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="upload/work/<?php echo $work_value['work_picture'] ?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4><?php echo $work_value['work_title'] ?></h4>
              </div>
              <img src="upload/work/<?php echo $work_value['work_picture']?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      <?php } ?>

      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials">
  <div class="container">
    <div class="section-title">
      <h2>Testimonials</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/01.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - John Doe </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/02.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/03.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - John Doe </div>
          </div>
        </div>
      </div>
      <div class="row"> </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/04.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/05.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - John Doe </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/06.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
        <form  action="innova_post.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text"  name="user_name"  class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email"  name="user_email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="user_comment"  class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div ></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span>4321 California St,<br>
          San Francisco, CA 12345</p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span> +1 123 456 1234</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> info@company.com</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <?php foreach ($social_result as $social) {?>

            <li><a href="<?php echo $social['social_link']; ?>" target="_blank"><i class="fa <?php echo $social['social_icon'];?>"></i></a></li>
          <?php } ?>
            <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2017 INNOVA. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
  </div>
</div>



<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<!-- <script type="text/javascript" src="js/jqBootstrapValidation.js"></script> -->
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
