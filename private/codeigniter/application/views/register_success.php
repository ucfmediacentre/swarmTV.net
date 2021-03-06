<!DOCTYPE html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Register</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>css/normalize.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
	
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
	<script src="<?php echo base_url(); ?>js/vendor/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>libraries/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="<?php echo base_url(); ?>js/vendor/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo base_url(); ?>js/vendor/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="includes/videoPlayer_ie.css" />
	<![endif]-->
  </head>
  <body>

	<h1>Your registration was successfully submitted.</h1>
	
	<p>Thank you for registering. You will receive an email shortly with a link to confirm your email address. In order to complete your registration, you will need to click on that link within 24 hours.</p><p><a href="<?php echo base_url(); ?>index.php/pages/view/public/home">public : Home</a>&nbsp;|&nbsp;<a href="<?php echo base_url(); ?>index.php/pages/view/public/sandpit">Sandpit</a>&nbsp;|&nbsp;<a href="<?php echo base_url(); ?>index.php/pages/view/public/help">Help</a>&nbsp;|&nbsp;<a href="<?php echo base_url() . 'index.php/verifylogin/index/pages/' . $group . '/' . $title; ?>">Log In</a></p>
  </body>
  <!-- Google Analytics -->
  <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-47930876-1', 'swarmtv.net');
	  ga('send', 'pageview');
	
  </script>
</html>
