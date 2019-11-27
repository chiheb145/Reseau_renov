<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>reseau renov</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('')}}/template/img/reseau.png" rel="icon">
    <link href="{{asset('')}}/template/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('')}}/template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('')}}/template/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('')}}/template/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('')}}/template/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('')}}/template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('')}}/template/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('')}}/template/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('')}}/template/css/style.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Reveal
      Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body id="body">

<!--==========================
  Top Bar
============================-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left" style="color: #ff4cb8d4">
            <i class="fa fa-envelope-o" style="color: #ff4cb8d4"></i> <a href="mailto:contact@example.com" style="color: #ff4cb8d4">contact@example.com</a>
            <i class="fa fa-phone"></i> 05 49 13 09 92
        </div>
        <div class="social-links float-right">
            <a href="#" class="twitter" style="color:  rgb(166, 21, 115)"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook" style="color:  rgb(166, 21, 115)"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram" style="color:  rgb(166, 21, 115)"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus" style="color: rgb(166, 21, 115)"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin" style="color: rgb(166, 21, 115)"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</section>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container">
        <a href="#body" class="float-left" ><img src="{{asset('')}}/template/img/reseau-logo.png" alt="" title="" style="width: 50px" height="50px" /></a>
        <div id="logo" class="pull-left" >
            <h2><a href="#body" class="scrollto" style="color:#ff4cb8;">Réseau<span style="color: #007bff ">Rénov</span></a></h2>
            <!-- Uncomment below if you prefer to use an image logo -->

        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#body"  style="color:rgb(0,123,255)">Accueil</a></li>
                <li><a href="#about" style="color: rgb(0,123,255)">Entreprise</a></li>
                <li><a href="#services" style="color: rgb(0,123,255)">Services</a></li>
                <li><a href="#portfolio" style="color: rgb(0,123,255)">Nos métiers</a></li>
                <li><a href="#team" style="color:rgb(0,123,255)">Equipe</a></li>
                <li class="menu-has-children" ><a href="" style="color: rgb(0,123,255)">Entretien Rénovation</a>
                    <ul>
                        <li><a href="#" style="color: rgb(0,123,255)">Drop Down 1</a></li>
                        <li><a href="#" style="color: rgb(0,123,255)">Drop Down 3</a></li>
                        <li><a href="#" style="color: rgb(0,123,255)">Drop Down 4</a></li>
                        <li><a href="#" style="color: rgb(0,123,255)">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#contact" style="color: rgb(0,123,255)">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
<br>
<br>
<br>


<section id="contact" class="wow fadeInUp">
<div class="container">
    <div class="form">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
    </div>

</div>
</section>
<footer id="footer">
    <div class="container">
        <div class="copyright">
            Copyright &copy; <strong>2019 1wayDev</strong>. All Rights Reserved.
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
            -->

        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{asset('')}}/template/lib/jquery/jquery.min.js"></script>
<script src="{{asset('')}}/template/lib/jquery/jquery-migrate.min.js"></script>
<script src="{{asset('')}}/template/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('')}}/template/lib/easing/easing.min.js"></script>
<script src="{{asset('')}}/template/lib/superfish/hoverIntent.js"></script>
<script src="{{asset('')}}/template/lib/superfish/superfish.min.js"></script>
<script src="{{asset('')}}/template/lib/wow/wow.min.js"></script>
<script src="{{asset('')}}/template/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('')}}/template/lib/magnific-popup/magnific-popup.min.js"></script>
<script src="{{asset('')}}/template/lib/sticky/sticky.js"></script>

<!-- Contact Form JavaScript File -->
<script src="{{asset('')}}/template/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('')}}/template/js/main.js"></script>

</body>
</html>
