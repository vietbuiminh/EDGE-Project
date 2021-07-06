// JavaScript Document
function toggleNav(){
	var nav = document.getElementById("nav");
	/*var subNav = document.getElementById("subnav-1");
	var subNav2 = document.getElementById("subnav-2");*/
	if(nav.style.display == "flex"){
		nav.style.display = "none";	
	} else{
		nav.style.display = "flex";	
	}
	/*if(subNav.style.display == "flex"){
		subNav.style.display = "none";
	} else{
		subNav.style.display = "flex";	
	}
	if(subNav2.style.display == "flex"){
		subNav2.style.display = "none";
	} else{
		subNav2.style.display = "flex";	
	}*/
}