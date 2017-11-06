  <footer id="footer">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_left">
               <p><?php echo get_option( 'nt_footer_text' ); ?></p>
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_right">
               <ul class="social_nav">
                 <li><a href="<?php echo get_option( 'nt_facebook_social_link' ); ?>"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="<?php echo get_option( 'nt_twitter_social_link' ); ?>"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="<?php echo get_option( 'nt_googleplus_social_link' ); ?>"><i class="fa fa-google-plus"></i></a></li>
                 <li><a href="<?php echo get_option( 'nt_linkedin_social_link' ); ?>"><i class="fa fa-linkedin"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </footer>
      <!--=========== END FOOTER ================-->

     <!-- Javascript Files
     ================================================== -->
  


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

    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.map.js"></script>


    <!-- superslides slider -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.superslides.min.js" type="text/javascript"></script>
    <!-- slick slider -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- for portfolio filter gallery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/elastic_grid.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/portfolio_slider.js"></script>
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

    <!-- Custom js-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

 <script>
$(".sub-menu .current-menu-item").parent().prev().addClass('active1');
</script>



<script type="text/javascript">
  $(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("in");
        if (_opened === true && !clickover.hasClass("navbar-toggle")) {
            $("button.navbar-toggle").click();
        }
    });

</script>
<?php wp_footer(); ?>
  </body>
</html>