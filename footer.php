<footer id="footer" class="midnight-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-6"><?php echo get_option( 'nt_footer_text' ); ?></div>
      <div class="col-sm-6">
	  <?php 

	  wp_nav_menu( array( 'menu' => 'footer', 'menu_class'=>'pull-right','theme_location' => 'secondary' ) ); ?> 

      </div>
    </div>
  </div>
</footer>
<?php echo get_option( 'nt_ga_code' ); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/new.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
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
 <script>
$(".sub-menu .current-menu-item").parent().prev().addClass('active1');
</script>
  <script type="text/javascript">
        $('.carousel').carousel()
    </script>


<style>
.col-sm-8.contact-left {
  display: table-cell;
  float: none;
  vertical-align: middle;
}

@media only screen and (max-width:767px) 
{
.col-sm-8.contact-left {
  display: table-cell;
  float: left;
  vertical-align: middle;
}	
}
</style>
<?php wp_footer(); ?>
</body>
</html>