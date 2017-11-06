<div class="footer-bottom">
		<div class="container">
			<div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
				<div class="footer_copyright">
					<p> <?php echo get_option( 'nt_footer_text' ); ?></p>					
					
				</div>
			</div>
		</div>
</div>
<?php echo get_option( 'nt_ga_code' ); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/new.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mixitup.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js">
    
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>  
// Click to reveal the mobile menu
(function($) {

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

  
  </script>
  <script type="text/javascript" src="js/new.js"></script>
	<script type="text/javascript">
		$(window).scroll(function() {
if ($(this).scrollTop() > 150){  
    $('header').addClass("sticky");
  }
  else{
    $('header').removeClass("sticky");
  }
});
	</script>
	<!--for smooth scrolling-->
	<script>
	$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});
	</script>
  	<script type="text/javascript">
    	$(function(){

			// Instantiate MixItUp:

			$('#Container').mixItUp();

		});

	    	$('.autoplay').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    </script>

 <script>
$(".sub-menu .current-menu-item").parent().prev().addClass('active1');
</script>
<script type="text/javascript">
$(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("collapse in");
        if (_opened === true && !clickover.hasClass("navbar-toggle")) {
            $("button.navbar-toggle").click();
        }
    });
</script>
<?php wp_footer(); ?>
</body>
</html>