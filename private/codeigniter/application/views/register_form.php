<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/videoPlayer.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>libraries/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>libraries/fineuploader.jquery-3.0/fineuploader.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>libraries/jquery-ui-1.9.2.custom/css/eggplant/jquery-ui-1.9.2.custom.min.css" type="text/css" media="screen" />
	
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
	<script src="<?php echo base_url(); ?>js/vendor/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>libraries/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="<?php echo base_url(); ?>js/vendor/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo base_url(); ?>js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="<?php echo base_url(); ?>js/popcorn.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="includes/videoPlayer_ie.css" />
	<![endif]-->
  </head>
  <body>
    <h1>Register:</h1>
    <div id="main_pages_wrapper">
	  <span class="error"><?php echo validation_errors(); ?></span>
	  <?php echo form_open('register'); ?>
	  <table>
		<tr>
		  <td align="right">
			<label for="username">Username:</label>
		  </td><td>
			<input type="text" size="36" id="username" name="username" value="<?php echo set_value('username'); ?>" />
			<br />
		  </td>
		</tr>
		<tr>
		  <td>
			&nbsp;
		  </td><td>
			&nbsp;
			<br />
		  </td>
		</tr>
		<tr>
		  <td align="right">
			<label for="email">E-mail:</label>
		  </td><td>
			<input type="text" size="36" id="email" name="email" value="<?php echo set_value('email'); ?>" />
			<br />
		  </td>
		</tr>
		<tr>
		  <td>
			&nbsp;
		  </td><td>
			&nbsp;
			<br />
		  </td>
		</tr>
		<tr>
		  <td align="right">
			<label for="password">Password:</label>
		  </td><td>
			<input type="password" size="36" id="password" name="password" value="<?php echo set_value('password'); ?>" />
			<br />
		  </td>
		</tr>
		<tr>
		  <td>
			&nbsp;
		  </td><td>
			&nbsp;
			<br />
		  </td>
		</tr>
		<tr>
		  <td align="right">
			<label for="passconf" style="white-space: nowrap">Confirm Password:</label>
		  </td><td>
			<input type="password" size="36" id="passconf" name="passconf" value="<?php echo set_value('passconf'); ?>" />
			<br />
			<input type="hidden" name="controller" value="<?php if (isset($controller)) echo $controller; ?>">
			<input type="hidden" name="title" value="<?php echo $title; ?>">
			<input type="hidden" name="group" value="<?php echo $group ?>">
		  </td>
		</tr>
		<tr>
		  <td></td><td  align="right">
			<br/>
			<input type="submit" value="Register" />
		  </td>
		</tr>
	  </table>
	  <br />
	  <a href="<?php echo base_url(); ?>index.php/pages/view/public/home">public : Home</a>&nbsp;|&nbsp;<a href="<?php echo base_url(); ?>index.php/pages/view/public/sandpit">Sandpit</a>&nbsp;|&nbsp;<a href="<?php echo base_url(); ?>index.php/pages/view/public/help">Help</a>&nbsp;|&nbsp;<a href="<?php echo base_url() . 'index.php/verifylogin/index/pages/' . $group . '/' . $title; ?>">Log In</a>
    </div>
    </form>
	<script>
		$( document ).ready(function() {
			$("#username").focus();
		});
	</script>
	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  
		ga('create', 'UA-47930876-1', 'swarmtv.net');
		ga('send', 'pageview');
	  
	</script>
  </body>
</html>
