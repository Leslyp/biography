<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width">
		<title>Website Project</title>
		<link rel="stylesheet" type="text/css" href="./lib/css/projectstyle.css">
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
				<!-- bring nav bar to each link so you can move from link to link -->
				<nav>
		     	 <!-- id is used for dropdown class in mobile -->
		     	<ul id="myNavBar" class="nav-bar">
	          <li id="my-name"><a href="index.html">Lesly Perez</a></li>
		        <li><a href="biography.html">Biography</a></li>
		        <li><a href="resume.html">Resume</a></li>
		        <li><a href="codepen.html">Code Pen</a></li>
		        <li><a href="gallery.html">Gallery</a></li>
		        <li><a class="selected" href="contact.html">Contact</a></li> 
	          <!-- "trigram for heaven" - hamburger icon -->
	          <!-- onClick calls js function when clicked, shows/ hides dropdown  -->
	          <li class="home-icon"><a href="#" onClick="toggleMobileDropdown()">&#9776;</a></li> 
		    	</ul>
		    </nav>
		    <h1>Contact Form</h1>
			</header>
			<main class="contact">

				<form id="contactForm" action="#" method="post" onsubmit="return validate()">		<!-- use post so users info is encripted -->

				  <!-- name -->
				  <!-- every lable needs a for -->
				  <!-- input needs an id with the same value as its name and for -->
				  <div>
				    <label for="firstname">First Name:</label>
				    <input type="text" id="firstname" name="firstname" placeholder="Johnny" />
				  </div>
				  <div>
				    <label for="lastname">Last Name:</label>
				    <input type="text" id="lastname" name="lastname" placeholder="Appleseed" />
				  </div>
				  <!-- email-->
			   	<div>
				    <label for="email">Email:</label>
				    <input type="email" id="email" name="email" placeholder="johnny@gmail.com" />
			   	</div>
				  <!-- phone-->
			   	<div>
				    <label for="phone">Phone:</label>
				    <input type="tel" id="phone" name="phone" placeholder="xxx-xxx-xxxx" pattern="/^\d{3}-\d{3}-d\{4}$" />
			   	</div>
				  <!-- company-->
			   	<div>
				    <label for="company">Company:</label>
				    <input type="text" id="company" name="company" placeholder="Red Ventures" />
			   	</div>
				  <!-- comments/questions-->
			   	<div id="textarea">
				    <label for="comments">Comments/Questions:</label>
				    <textarea rows="6" cols="40" id="comments" name="comments" placeholder="Leave comments/questions here"></textarea>
			   	</div>
				  <!-- save button-->
			   	<div>
				  	<input type="submit" name="submit" value="Submit" />
			   	</div>	   
				</form> 
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
  