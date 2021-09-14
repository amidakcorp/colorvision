/*!
// Contents
// ------------------------------------------------

 1. Utility Bar
 2. Spinner Loader
 3. Tooltip Catalog
 4. Selector

/*!---------- 1. UTILITY BAR ----------*/  

//open utility bar
$(function () {
    $('.navbar-toggler').on('click', function(event) {
		event.preventDefault();
		$(this).closest('.navbar-minimal').toggleClass('open');
	})
});

//zoom image
$(document).ready(function(){
    $("#zoomIn").click(function(){
        var div = $(".tail img");
        startAnimation();
        function startAnimation(){
            div.css({"transform": "scale(1.3)",
					 "-webkit-transform": "scale(1.3)", 
					 "-moz-transform": "scale(1.3)", 
					 "transition": "all 0.3s",
					 "-webkit-transition": "all 0.3s",
					 "-moz-transition": "all 0.3s"});			
        }
    });
});

$(document).ready(function(){
    $("#zoomOut").click(function(){
        var div = $(".tail img");
        startAnimation();
        function startAnimation(){
            div.css({"transform": "scale(1)",
					 "-webkit-transform": "scale(1)", 
					 "-moz-transform": "scale(1)", 
					 "transition": "all 0.3s",
					 "-webkit-transition": "all 0.3s",
					 "-moz-transition": "all 0.3s"});			
        }
    });
});

/*!---------- 2. SPINNER LOADER ----------*/  

var myVar;

function myFunction() {
	myVar = setTimeout(showPage, 3000);
}

function showPage() {
	document.getElementById("sk-circle").style.display = "none";
	document.getElementById("catalog").style.display = "block";
	}

/*!---------- 3. TOOLTIP CATALOG ----------*/  	
	
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

/*!---------- 4. SELECTOR ----------*/  

$(document).ready(function(){
	
//Select Eyeshadow
$('li.select-1').click(function(){
    $('li.select-1').removeClass('activex');
    $(this).addClass('activex');
});
//Select Lipstick
$('li.select-2').click(function(){
    $('li.select-2').removeClass('activex');
    $(this).addClass('activex');
});
//Select Highlighter
$('li.select-3').click(function(){
    $('li.select-3').removeClass('activex');
    $(this).addClass('activex');
});

});

