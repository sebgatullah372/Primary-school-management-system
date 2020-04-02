<?php
include 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Dokkhin Shikolbaha Primary School</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<!--<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>-->
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-left mainNav">
					<li><a href="index.php">Home</a></li>
					<li><a href="notice.php">Notice Board</a></li>					
					<li class="dropdown">
						<a href="Information.php" class="dropdown-toggle" data-toggle="dropdown">Information <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="school_information.php">School Information</a></li>
							<li><a href="teachers_information.php">Teachers Information</a></li>
							<li><a href="students_information.php">Students Information</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="Gallery.php" class="dropdown-toggle" data-toggle="dropdown">Gallery <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="school_gallery.php">School Gallery</a></li>
							<li><a href="event_gallery.php">Event Gallery</a></li>
							<li><a href="art_gallery.php">Art Gallery</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="results.php" class="dropdown-toggle" data-toggle="dropdown">Results <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="class_result.php">Class Result</a></li>
							<li><a href="psc_result.php">PSC Result</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="amenities.php" class="dropdown-toggle" data-toggle="dropdown">Amenities <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sfs.php">Safety for students</a></li>
							<li><a href="vp.php">Vaccination Program</a></li>
							<li><a href="ffe.php">Food for education</a></li>
						</ul>
					</li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
