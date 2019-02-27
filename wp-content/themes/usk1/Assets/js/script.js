
jQuery(document).ready(function($){
	// Call Gridder
	$('.gridder').gridderExpander({
		scroll: true,
		scrollOffset: 30,
		scrollTo: "panel", // panel or listitem
		animationSpeed: 400,
		animationEasing: "easeInOutExpo",
		showNav: true, // Show Navigation
		nextText: "", // Next button text
		prevText: "", // Previous button text
		closeText: "x", // Close button text
		onStart: function () {
			//Gridder Inititialized
			console.log('On Gridder Initialized...');
		},
		onContent: function () {
			//Gridder Content Loaded
			console.log('On Gridder Expand...');
		},
		onClosed: function () {
			//Gridder Closed
			console.log('On Gridder Closed...');
		}
	});
});

//CLASES DE BOOTSTRAP MENU
//$('#menu-mi_menu li').addClass('nav-item').children(this).addClass('');

//$('.nav-item:last-of-type a').addClass('btn btn-primary').removeClass('js-scroll-trigger');

	//Deshabilitar el botón derecho del mouse

//	$(function(){
	//    $(document).bind("contextmenu",function(e){
	  //      return false;
	  //  });
//	});



//formulario
