var navOpen = false;
openNav();

function openNav() {
	if(navOpen) {
		navOpen = false;
		document.getElementById("mySidenav").style.width = "0";
	} else {
		navOpen = true;
	    document.getElementById("mySidenav").style.width = "250px";
	}
}

function closeNav() {
	navOpen = false;
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}