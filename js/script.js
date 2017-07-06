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

    var d;
    var h;
    var m;
    var s;

function setTime(){
    d = new Date();
    h = d.getHours();
    m = d.getMinutes();
    s = d.getSeconds();
};

function colorChange(){
    var timeRed = 6.25*h;
    var timeGreen = 2.5*m;
    var timeBlue = 2.5*s;

    var c = "rgba("+Math.round(timeRed)+","+Math.round(timeGreen)+","+Math.round(timeBlue)+",.7)";
    document.getElementById("bannerHome").style.backgroundColor = c;
    console.log(c);
};

window.setInterval(function(){
    setTime();
    colorChange();
}, 1000);