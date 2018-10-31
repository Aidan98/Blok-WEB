//Change action for form based on checked radio button
function changeAction() {
	
	if (document.getElementById('signIn').checked) {
		// document.getElementById("myForm").action = "/action_page.php";
		document.getElementById('signup-form').action = "../php/login.inc.php";
		document.getElementById('signup-form').method = "post";
	} else {

	}
}

submitbtn = document.getElementById('submit');
submitbtn.addEventListener("click", changeAction);




// function moveIcon{
	
// 	document.getElementById('mIcon').style.marginLeft = "500px";
// }
// document.getElementById('mIcon').addEventListener("mouseover", moveIcon);


