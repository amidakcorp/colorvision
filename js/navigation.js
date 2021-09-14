/*!
// NAVIGATION - Contents //Works with point .5 of CSS  
// ------------------------------------------------
*/ 

//Home Navigation
function openNav() {
	document.getElementById("mySidenav").style.width = "0%";
	document.getElementById("mySidenav-2").style.width = "100%";
	}
function closeNav() {
	document.getElementById("mySidenav-2").style.width = "0";
	document.getElementById("mySidenav").style.width = "100%";
	}
//Second Level Navigation
function openNav3() {
	document.getElementById("mySidenav").style.width = "0%";
	document.getElementById("mySidenav-3").style.width = "100%";
	}
function closeNav3() {
	document.getElementById("mySidenav-3").style.width = "0";
	document.getElementById("mySidenav").style.width = "100%";
	}
function openNav4() {
	document.getElementById("mySidenav").style.width = "0%";
	document.getElementById("mySidenav-4").style.width = "100%";
	}
function closeNav4() {
	document.getElementById("mySidenav-4").style.width = "0";
	document.getElementById("mySidenav").style.width = "100%";
	}
/*!reset all sidenav before opening mySidenav7(summary)*/ 
function openNav7() {
	document.getElementById("mySidenav-2").style.width = "0";
	document.getElementById("mySidenav-3").style.width = "0";
	document.getElementById("mySidenav-4").style.width = "0";
	document.getElementById("mySidenav-7").style.width = "100%";
	}
//end reset
function closeNav7() {
	document.getElementById("mySidenav-7").style.width = "0";
	document.getElementById("mySidenav").style.width = "100%";
	}
//Summary Navigation
function closeNav10() {
	document.getElementById("mySidenav-7").style.width = "0";
	document.getElementById("mySidenav-2").style.width = "100%";
	}
function closeNav11() {
	document.getElementById("mySidenav-7").style.width = "0";
	document.getElementById("mySidenav-3").style.width = "100%";
	}
function closeNav14() {
	document.getElementById("mySidenav-7").style.width = "0";
	document.getElementById("mySidenav-4").style.width = "100%";
	}
//Catalogue Navigation
function openNav13() {
	document.getElementById("mySidenav").style.width = "0%";
	document.getElementById("mySidenav-13").style.width = "100%";
	}
function closeNav13() {
	document.getElementById("mySidenav-13").style.width = "0%";
	document.getElementById("mySidenav").style.width = "100%";
	}