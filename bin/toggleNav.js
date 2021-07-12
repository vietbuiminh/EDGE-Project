$(document).ready(function(){
	function toggleNav() {
		if ($("#nav").css("display") == 'none' || !$("nav").hasClass("block")){
			$("#nav").addClass("block");
		} else{
			$("#nav").removeClass("block");
		}
	}
	document.getElementById("toggleNav").addEventListener('click', toggleNav);
});