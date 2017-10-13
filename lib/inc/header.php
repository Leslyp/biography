<?php 
	// set the default timezone to use. Available since PHP 5.1
	date_default_timezone_set('UTC');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
  	<meta name="viewport" content="width=device-width">
		<title>Biography Project</title>
		<link rel="stylesheet" type="text/css" href="./lib/css/styles.css">
		<script src="lib/js/functions.js"></script> <!-- add js to html-->
		<!--put fonts in head so they load before js-->
	</head>
	<body>
		<header>	
			<!-- Use CSS background images if the image is not part of the content -->
 			<div>
 				<div id="banner-picture"></div>
 			</div> 
	  	<nav>
	     	 <!-- id is used for dropdown class in mobile -->
	     	<ul id="myNavBar" class="nav-bar">
          <li id="my-name"><a class="<?php if ($section == "home") {echo "selected";} ?>" href="index.html">Lesly Perez</a></li>
	        <li><a class="<?php if ($section == "biography") {echo "selected";} ?>" href="biography.php">Biography</a></li>
	        <li><a class="<?php if ($section == "resume") {echo "selected";} ?>" href="resume.php">Resume</a></li>
	        <li><a class="<?php if ($section == "codepen") {echo "selected";} ?>" href="codepen.php">Code Pen</a></li>
	        <li><a class="<?php if ($section == "gallery") {echo "selected";} ?>" href="gallery.php">Gallery</a></li>
	        <li><a class="<?php if ($section == "contact") {echo "selected";} ?>" href="contact.php">Contact</a></li> 
          <!-- unicode character set = hamburger icon -->
          <!-- onClick calls js function when clicked, shows/ hides dropdown  -->
          <li class="home-icon"><a href="#" onClick="toggleMobileDropdown()">&#9776;</a></li> 
	    	</ul>
	    </nav>
		</header>