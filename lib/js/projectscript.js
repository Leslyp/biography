// toggle = switching from one thing to another
// function to show/hide dropdown in mobile
function toggleMobileDropdown() {
    var myNavBar = document.getElementById("myNavBar"); //calling id in ul 
    if (myNavBar.className === "nav-bar") {  // when dropdown isn't showing
        myNavBar.className += " dropdown";  // add dropdown class to display dropdown
    } else { // means dropdown is showing
        myNavBar.className = "nav-bar";  // then remove dropdown class
    }
} 

// function to validate form 
function validate() {
	// create variables 
	// value property sets or returns the value of the option
	var firstName = document.getElementById("firstname").value;
	var lastName = document.getElementById("lastname").value;
	var emailCorrect = document.getElementById("email").value;
	var phoneCorrect = document.getElementById("phone").value;

	//check to see if required fields are filled in
	if (firstName === "") {
		alert("ERROR fill in first name");
	}
	
	if (lastName === "") {
		alert("ERROR fill in last name");
	}
	
	if (emailCorrect === "") {
		alert("ERROR fill in email");
	}
	
	if (phoneCorrect === "") {
		alert("ERROR fill in phone number");
	}
	// return to get out of the function
	return false;
}