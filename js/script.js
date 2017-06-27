$(window).load(function() {
	// Animate loader off screen
	$(".se-pre-con").fadeOut("slow");;
});

function imgError(image) {
	    	image.onerror = "";
	    	image.src = "./media/oops.gif";
	    	return true;
		}

function openNav() {
    document.getElementById ("mobileNav").style.width = "100%";
    document.getElementById("container").style.filter = "blur(5px)";
    document.getElementById ("menuBtn").style.filter = "blur(5px)";
}

function closeNav() {
    document.getElementById ("mobileNav").style.width = "0%";
    document.getElementById ("container").style.filter = "blur(0px)";
    document.getElementById ("menuBtn").style.filter = "blur(0px)";
}

window.onresize = function (){
    if(window.innerWidth >= 600){
        closeNav();
    }
}