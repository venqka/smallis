jQuery(document).ready(function(){

	//Toggle desktop submenu

	jQuery('.smallis-navigation-wrap ul li').on('hover', function(){
		jQuery(this).children('ul').toggle();
	});

});