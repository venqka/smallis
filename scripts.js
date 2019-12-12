jQuery(document).ready(function(){

	//Toggle desktop submenu

	jQuery('.smallis-desktop-menu ul li').on('hover', function(){
		jQuery(this).children('ul').toggle();
	});

	//Toggle mobile menu
	jQuery('.smallis-mobile-menu .smallis-menu-toggle').click(function(){
		jQuery('.smallis-mobile-menu .smallis-navigation-wrap').toggle();
	});

	jQuery('.smallis-mobile-menu ul .menu-item-has-children > a').on('click', function(a){
		a.preventDefault();
		jQuery(this).next().toggle();
	});
});