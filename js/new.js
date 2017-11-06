;(function($) {

	// DOM ready
	$(function() {
		
	// Add some classes and Append the mobile icon nav
		$('.nav').append($('<div class="nav-mobile"></div>'));
		$('.nav > ul').addClass('nav-list');
		$('.nav > ul > li').addClass('nav-item');
		$('.nav > ul > li > ul').addClass('nav-submenu');
		$('.nav > ul > li > ul > li').addClass('nav-submenu-item');
		
	// Add a <span> to every .nav-item that has a <ul> inside. And add an sub menu icon indicator.
		$('.nav-item').has('ul').prepend('<span class="nav-click"><i></i></span>');
		
// Click to reveal the mobile menu
$('.nav-mobile').click(function(){
    $('.nav-list').toggle();
    $('.nav-submenu').hide(); // This will close the submenu when i click the top ribbon (.nav-mobile) to close the mobile menu
    if(!$('.nav-list').is(':visible')){ // the menu was closed because it's not visible anymore
        $('.nav-item .nav-click').each(function(){ // loop through nav clicks
            if($(this).hasClass('icon-close')) { // This will toggle back the + icon on mobile menu close/open
              $(this).toggleClass('icon-close');           
            }
        }); 
    }
});
	
// Dynamic binding to on 'click' and Toggle the nested nav
$('.nav-list').on('click', '.nav-click', function(){
    var currentSubmenu = $(this).siblings('.nav-submenu');
    var currentNavClick = $(this);
    $('.nav-submenu').not(currentSubmenu).slideUp();
    $('.nav-click').not(currentNavClick).removeClass('icon-close');
    $(this).siblings('.nav-submenu').toggle();


	// This will toggle the + and - when clicked
		$(this).removeClass('nav-click');
		$(this).toggleClass('icon-close');
		$(this).toggleClass('nav-click');   
	});
	
	// This will toggle the menu/submenu/- when click outside of the menu
		$('.wrapper').click(function(event) {
        $('html').one('click',function() {
        $('.nav-list').hide();
        $('.nav-submenu').hide(); // This will close the submenu when you click the top ribbon (hamburger button) to close the mobile menu
        if(!$('.nav-list').is(':visible')){ // the menu was closed because it's not visible anymore
        $('.nav-item .nav-click').each(function(){ // loop through nav clicks
        if($(this).hasClass('icon-close')) { // This will toggle the +/- icon on mobile menu close/open
         $(this).toggleClass('icon-close');
         }
      }); 
    }
 });
 event.stopPropagation();
});

});	

})(jQuery);
