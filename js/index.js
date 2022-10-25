//Welcome message with user name added
//Need help formatting the text after the event so it remains consistent
if(window.location.href.indexOf('index.html') > -1){
window.onload = function getName() {
		let guest = prompt("Welcome! Please enter your name.");
		//var newItem = document.createElement('h1');
		console.log(guest);
		document.getElementById('welcome').innerHTML = "Welcome, " + guest + "!";
	return false;
	}
}
 //hamburger links
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
//Change Themes
function changeStyle(newStyle){
	document.getElementById('color').setAttribute('href', newStyle);
  return false;
}