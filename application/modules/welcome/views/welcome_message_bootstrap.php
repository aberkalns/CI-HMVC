<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width,
	initial-scale=1, shrink-to-fit=no"> 
	<meta http-equiv="x-ua-compatible" content="ie=edge"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>Welcome to CodeIgniter with HMVC Modular Extensions</title> 
</head> 
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="#">CodeIgniter with HMVC Modular Extensions</a>
	</nav>

	<div class="container">
		<div class="jumbotron">
		  <h1>Welcome to CodeIgniter!</h1>
			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>
			<code>application/modules/welcome/views/welcome_message_bootstrap.php</code>

			<p>The corresponding controller for this page is found at:</p>
			<code>application/modules/welcome/controllers/Welcome.php</code>

			<p>If you are exploring CodeIgniter for the very first time, you should start by reading the User Guide.</p>
		  	<a class="btn btn-primary btn-lg" href="user_guide/" role="button">
				CodeIgniter User Guide
		  	</a>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>CodeIgniter</h2>
          		<p>This is fork of CodeIgniter 3 dev branch with added HMVC Modular Extensions. If you would like to get original CodeIgniter framework, visit CodeIgniter site.</p>
          		<p><a class="btn btn-secondary" href="https://codeigniter.com/" role="button">CodeIgniter Site</a></p>
			</div>
			<div class="col-md-4">
				<h2>HMVC</h2>
          		<p>Modular Extensions makes the CodeIgniter PHP framework modular. HMVC stands for Hierarchical Model View Controller.If you would like to learn more, visit official site.</p>
          		<p><a class="btn btn-secondary" href="https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc" role="button">HMVC on Bitbucket</a></p>	
			</div>
			<div class="col-md-4">
				<h2>Bootstrap</h2>
          		<p>This page is styled with Bootstrap 4 beta. If you would like to know more about Bootstrap or get another version, visit official site.</p>
          		<p><a class="btn btn-secondary" href="https://getbootstrap.com/" role="button">Bootstrap Site</a></p>	
			</div>
		</div>
		<footer class="footer" style="background-color: #f5f5f5; height: 60px; line-height: 60px;">
		<div class="container text-right">
        	<span class="text-muted ">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></span>
		</div>
      </footer>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
