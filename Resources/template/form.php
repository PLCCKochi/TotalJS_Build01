<?php

     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "crunchpress@info.com";
    $email_subject = "New Membership Form Submission";
	$error_message = '';

     

     
    // validation
    if(
        !isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['subject']) ||
		!isset($_POST['comments']))
		
		{
			
			echo "Fields are not filled properly";
			die();
    }
    
    $name = $_POST['name']; // required
	$email = $_POST['email']; // required
	$subject = $_POST['subject']; // required
	$comments = $_POST['comments'];
	
     
$email_message = '<html>';
$email_message = '<body>';
$email_message = '<head>';
$email_message = '<title>Your Details Are Below</title>';
$email_message = '</head>';
$email_message .= '<h1>Your Details Are Below</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$email_message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";
$email_message .= "<tr><td><strong>Comments:</strong> </td><td>" . strip_tags($_POST['comments']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";	






$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


@mail($email_to, $email_subject, $email_message, $headers); 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LAWYERS</title>
<!--CUSTOM CSS-->
<link href="css/custom.css" rel="stylesheet" type="text/css">
<!--BOOTSTRAP 3.3.5-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--COLOR CSS-->
<link href="css/color.css" rel="stylesheet" type="text/css">
<!--RESPONDIVE CSS-->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!--BXSLIDER CSS-->
<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<!--OWL CAROUSEL CSS-->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
<!--PrettyPhoto Css-->
<link href="css/prettyPhoto.css" rel="stylesheet">
<!--FONTAWESOME 4.4.0 CSS-->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--FAVICON ICON-->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="cp-theme-style-1">
<!--Wrapper Start-->
<div id="wrapper"> 
  <!--Headre Start-->
  <header id="header"> 
    <!--HEADER TOP BAR SECTION START-->
    <section class="cp-head-topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-box">
              <ul>
                <li>Phone: <a href="#">+800 123 4567</a></li>
                <li>Email: <a href="#">info@lawyers.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-box"> <a href="#" class="btn-consultation">Get Free Consultation</a>
              <ul>
                <li><a href="#">Sign up</a></li>
                <li><a href="#">Log in</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--HEADER TOP BAR SECTION END--> 
    
    <!--NAVIGATION SECTION START-->
    <section class="cp-navigation-section">
      <div class="container"> <strong class="logo"><a href="index.html"><img src="images/logo.png" alt="img"></a></strong>
        <div class="navigation-right"> 
          
          <!--BURGER NAVIGATION SECTION START-->
          <div class="cp-burger-nav"> 
            <!--BURGER NAV BUTTON-->
            <div id="cp_side-menu-btn" class="cp_side-menu"><a href="#" class=""><i class="fa fa-bars"></i></a></div>
            <!--BURGER NAV BUTTON--> 
            
            <!--SIDEBAR MENU START-->
            <div id="cp_side-menu"> <a href="#" id="cp-close-btn"><i class="fa fa-close"></i></a>
              <div class="burger-top-box">
                <ul>
                  <li>Phone: <a href="#">+800 123 4567 <span>|</span></a></li>
                  <li>Email: <a href="#">info@lawyers.com</a></li>
                </ul>
                <a href="#" class="btn-style-1">Get Free Consultation</a>
                <ul class="properties-none">
                  <li><a href="#">Sign up <span>|</span></a></li>
                  <li><a href="#">Log in</a></li>
                </ul>
              </div>
              <strong class="burger-logo"><a href="index.html"><img src="images/burger-logo.png" alt="img"></a></strong>
              <div class="cp_side-navigation">
                <nav>
                  <ul class="navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Practice Areas <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="classes-weekly.html">Practice Area Classic</a></li>
                        <li><a href="classes-daily.html">Practice Area Modern</a></li>
                        <li><a href="classes-detail.html">Practice Area Single</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Attorneys</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </nav>
                <form action="#">
                  <input type="text" placeholder="Type your search here" required>
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div class="cp-burger-social">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                  </ul>
                </div>
                <strong class="copyrights">Lawyers Pro &copy; 2015, All Rights Reserved</strong> </div>
            </div>
            <!--SIDEBAR MENU END--> 
            
          </div>
          <!--BURGER NAVIGATION SECTION END--> 
          
          <!--TOP BAR SEARCH START-->
          <div class="search-box"> <a href="#" id="searchtoggl"><i class="fa fa-search"></i></a> </div>
          <!--TOP BAR SEARCH END--> 
          
          <!--NAVIGATION START-->
          <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul id="nav" class="navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#">Practice Areas</a>
                  <ul>
                    <li><a href="#">Practice Area Style 1</a></li>
                    <li><a href="#">Practice Area Style 1</a></li>
                    <li><a href="#">Practice Area Classic</a>
                      <ul>
                        <li><a href="#">Class with Single Column</a></li>
                        <li><a href="#">Class with 2 Single Column</a></li>
                        <li><a href="#">Class with 3 Single Column</a></li>
                        <li><a href="#">Class with 4 Single Column</a> </li>
                      </ul>
                    </li>
                    <li><a href="#">Practice Area Modern</a></li>
                    <li><a href="#">Practice Area Single</a></li>
                  </ul>
                </li>
                <li><a href="#">Attorneys</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </nav>
          <!--NAVIGATION END--> 
        </div>
      </div>
    </section>
    <!--NAVIGATION SECTION END--> 
  </header>
  <!--Headre End-->
  <div id="inner-banner">
    <div class="container">
      <h1>Contact us 1</h1>
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Pages</a></li>
        <li class="active">Contact us 1</li>
      </ol>
    </div>
  </div>
  <div id="main"> 
  
    <!-- Start of Thank -->
    <section id="content_Wrapper" class="padding-tb-60">
      <section class="container">
        <section class="row">
          <section class="col-md-12 error-page">
            <div class="holder">
              <h2>Thank You</h2>
              <p>Thank you for your form submission, as soon as we get this we will get back to you shortly.</p>
            </div>
          </section>
        </section>
      </section>
    </section>
    <!-- End of Thank --> 
    <!--Footer Start-->
    <footer id="footer"> 
    <!--TWITTER SECTION START-->
    <section class="cp-twitter-footer">
      <div class="container">
        <div class="holder">
          <ul id="cp-footer-twitter">
            <li>
              <div class="icon-box"><i class="fa fa-twitter"></i></div>
              <strong>Check out 'Lawyer, Law Theme' on #EnvatoMarket by @CrunchPress #<a href="#">http://themeforest.net/item/lawyers-we-fight-for-justice-theme</a></strong> </li>
            <li>
              <div class="icon-box"><i class="fa fa-twitter"></i></div>
              <strong>Check out 'Goodwill, Theme' on #EnvatoMarket by @CrunchPress #<a href="#">http://themeforest.net/item/lawyers-we-fight-for-justice-theme</a></strong> </li>
          </ul>
        </div>
      </div>
    </section>
    <!--TWITTER SECTION END--> 
    
    <!--FOOTER CONTENT AREA START-->
    <section class="cp-footer-content">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="cp-box"> <strong class="footer-logo"><a href="index.html"><img src="images/footer-logo.png" alt="img"></a></strong>
              <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non fficia deserunt mollitia animi id pst Ut wisi enim.</p>
              <a href="#" class="btn-style-1">Read More</a> </div>
          </div>
          <div class="col-md-4">
            <div class="cp-box">
              <h3>Practice Areas</h3>
              <div class="practice-area">
                <ul>
                  <li><a href="#"><i class="fa fa-bank"></i>Corporate</a></li>
                  <li><a href="#"><i class="fa fa-home"></i>Property Law</a></li>
                  <li><a href="#"><i class="fa fa-shield"></i>Finance &amp; Security Law</a></li>
                  <li><a href="#"><i class="fa fa-male"></i>Criminal Defense Law</a></li>
                  <li><a href="#"><i class="fa fa-car"></i>Serious Car Crash</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cp-box">
              <h3>We Are Here</h3>
              <address>
              <p><i class="fa fa-bank"></i> 4700 Millenia Blvd #175, Orlando,<br>
                FL 32839, USA.</p>
              <ul>
                <li><i class="fa fa-phone"></i> Phone: 001 (407) 901-6400</li>
                <li><i class="fa fa-print"></i>Fax: 001 (407) 901-6400</li>
                <li><i class="fa fa-envelope-o"></i><a href="mailto:">Email: info@crunchpress.com</a></li>
                <li><i class="fa fa-globe"></i><a href="#">www.crunchpress.com</a></li>
              </ul>
              </address>
              <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="cp-copyright-section"> <strong class="copy">Lawyers Pro &copy; 2015, All Rights Reserved, Design &amp; Developed By: <a href="http://crunchpress.com/">CrunchPress</a></strong> </div>
      </div>
    </section>
    <!--FOOTER CONTENT AREA END--> 
  </footer>
    <!--Footer End--> 
  </div>
</div>
<!--Wrapper End--> 
<!--Jquery Start--> 
<!--jQuery 1.11.3--> 
<!--jQuery 1.11.3--> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!--BOOTSTRAP--> 
<script src="js/bootstrap.min.js"></script> 
<!--BXSLIDER JS--> 
<script src="js/jquery.bxslider.min.js"></script> 
<!--OWL CAROUSEL JS--> 
<script src="js/owl.carousel.min.js"></script> 
<!--RUNNING COUNTER JS--> 
<script src="js/waypoint.js"></script> 
<script src="js/jquery.counterup.min.js"></script> 
<!--FORM OPTION JS--> 
<script src="js/jquery.noconflict.js"></script> 
<script src="js/theme-scripts.js"></script> 
<!--CUSTOM SCRIPT--> 
<script src="js/custom.js"></script> 
<!--Jquery End-->
</body>
</html>
