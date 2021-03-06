<!DOCTYPE html>
<html>
	<head>
		<!--  -->
		<meta charset="utf-8"> 
  	<meta name="viewport" content="width=device-width">
		<title>Website Project</title>
		<link rel="stylesheet" type="text/css" href="./lib/css/styles.css">
		<script src="lib/js/projectscript.js"></script> <!-- add js to html-->
		<link href="https://fonts.googleapis.com/css?family=Times+New+Roman%7CCinzel+Decorative%7CLobster+Two%7C" rel="stylesheet">
		 <!--put fonts in head so they load before js-->
	</head>
	<body>
		<div id="container">
			<header>	
	 			<div>
	 				<div id="banner-picture"></div>
	 			</div> 
	 			<!--create class menu to target nav bar-->
		  	<nav>
		     	 <!-- id is used for dropdown class in mobile -->
		     	<ul id="myNavBar" class="nav-bar">
	          <li id="my-name"><a class="selected" href="index.html">Lesly Perez</a></li>
		        <li><a href="biography.html">Biography</a></li>
		        <li><a href="resume.html">Resume</a></li>
		        <li><a href="codepen.html">Code Pen</a></li>
		        <li><a href="gallery.html">Gallery</a></li>
		        <li><a href="contact.html">Contact</a></li> 
	          <!-- "trigram for heaven" - hamburger icon -->
	          <!-- onClick calls js function when clicked, shows/ hides dropdown  -->
	          <li class="home-icon"><a href="#" onClick="toggleMobileDropdown()">&#9776;</a></li> 
		    	</ul>
		    </nav>
			</header>
			<main class="margins">
				<!-- section Description of all pages -->
	    	<section class="home">
	    		<h2>Welcome to My Website</h2>
	    		<ul>
	    			<li>On my Home page you will find a summary of my experience with RoadtoHire.</li>
			    	<li>On my Biography page you will find a few fun facts about me.</li>
			    	<li>On my Codepen page you will find a collection of my Codepen challenges.</li>
			    	<li>On my Resume page you will find my resume.</li>
			    	<li>On my Gallery page you will find a collection of some of my major events and achievements.</li>
			    	<li>On my Contact page you will find my personal information and an area to leave any comments or concerns.</li>
	    		</ul>	    	
	    	</section> 

				<!-- section Experience -->
	    	<section class="home">
	    		<h2>My Experience with RoadtoHire</h2>
		    	<p>Throughout my time in the RoadtoHire program, I have gained many new skills. Some of which pretain to my coding abilities and knowledge and others that have helped improve my professional development. I am grateful for all the resources and time this program has allowed us to utilize and for all the help our advisors/mentors have given us. This expeirence has been tough but rewarding.</p>
	    	</section>    
			</main>

			<!-- create footer with social media links -->
			<footer>
		  	<div>
		  		<div class="border-footer"></div>
		  		<a href="https://www.linkedin.com/in/lesly-perez-922806146/" target="_blank"><img class="icon" src="./lib/img/linkden.png" alt="linkedin logo"></a>
			  	<a href="http://www.roadtohire.org/" target="_blank"><img class="icon" src="./lib/img/numbers-11.png" alt="RoadtoHire link"></a>
			  	<a href="https://www.instagram.com/lesly_epr/?hl=en" target="_blank"><img class="icon" src="./lib/img/instagram-logo.jpg" alt="instagram logo"></a>
		  	</div>
		  	
				<!-- Disclaimer for photos -->
		    <p class="disclaimer">Disclaimer: All graphics are used for educational purposes only, and not for profit, in accordance with the Fair Use Act. All trademarks, trade names, or logos mentioned or used are the property of their respective owners. It will be removed at the request of copyright owner(s).</p>
		  	<p class="disclaimer">&copy;2017 Lesly Perez</p>
			</footer>
		</div>
  </body>
</html>
  


